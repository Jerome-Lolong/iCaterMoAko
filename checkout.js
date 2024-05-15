let listCart = [];
function checkCart() {
    var cookieValue = document.cookie
        .split('; ')
        .find(row => row.startsWith('listCart='));
    if (cookieValue) {
        listCart = JSON.parse(cookieValue.split('=')[1]);
    }
}
checkCart();
addCartToHTML();

function addCartToHTML() {
    // clear data default
    let listCartHTML = document.querySelector('.returnCart .list');
    listCartHTML.innerHTML = '';

    let totalQuantityHTML = document.querySelector('.totalQuantity');
    let totalPriceHTML = document.querySelector('.totalPrice');
    let totalQuantity = 0;
    let totalPrice = 0;

    // if has product in Cart
    if (listCart) {
        listCart.forEach(product => {
            if (product) {
                let newCart = document.createElement('div');
                newCart.classList.add('item');
                newCart.innerHTML =
                    `<img src="${product.image}">
                    <div class="info">
                        <div class="name">${product.name}</div>
                        <div class="price">₱${product.price} per product</div>
                    </div>
                    <div class="quantity">${product.quantity}</div>
                    <div class="returnPrice">₱${product.price * product.quantity}</div>`;
                listCartHTML.appendChild(newCart);
                totalQuantity += product.quantity;
                totalPrice += (product.price * product.quantity);
            }
        });
    }
    totalQuantityHTML.innerText = totalQuantity;
    totalPriceHTML.innerText = '₱' + totalPrice;
}

const buttonCheckouts = document.querySelector('.buttonCheckout');

buttonCheckouts.addEventListener('click', () => {
    const customerInfo = getAddress();
    if (customerInfo) {
        // Proceed to send data to Stripe
        processPayment(customerInfo);
    }
});

const getAddress = () => {
    //form validation
    let fname = document.querySelector('#fname').value;
    let lname = document.querySelector('#lname').value;
    let phone = document.querySelector('#phone').value;
    let address = document.querySelector('#address').value;
    let email = document.querySelector('#email').value;

    if (!fname.length || !lname.length || !phone.length || !address.length || !email.length) {
        showFormError("Fill all the inputs");
        return null;
    } else {
        return { fname, lname, phone, address, email };
    }
}

function processPayment(customerInfo) {
    const totalAmount = listCart.reduce((total, product) => total + (product.price * product.quantity), 0) * 100; // Convert to cents

    fetch('/create-checkout-session', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            items: listCart.map(product => ({
                id: product.id,
                quantity: product.quantity,
                price: product.price
            })),
            customerInfo,
            amount: totalAmount
        })
    }).then(response => response.json())
      .then(session => {
          if (session.id) {
              stripe.redirectToCheckout({ sessionId: session.id });
          } else {
              showFormError('Failed to create Stripe session');
          }
      }).catch(error => {
          console.error('Error:', error);
          showFormError('An error occurred. Please try again.');
      });
}
