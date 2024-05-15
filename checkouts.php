<?php
// Include the connector.php file
include "../php_controllers/connector.php";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['payment_method']) && $_POST['payment_method'] === 'cod') {
        // Retrieve form data
        $first_name = $_POST['first_name'] ?? null;
        $last_name = $_POST['last_name'] ?? null;
        $phone = $_POST['phone'] ?? null;
        $address = $_POST['address'] ?? null;
        $email = $_POST['email'] ?? null;
        $total_quantity = $_POST['total_quantity'] ?? null;
        $total_price = $_POST['total_price'] ?? null;

        // Check if all required fields are filled
        if ($first_name && $last_name && $phone && $address && $email && $total_quantity && $total_price) {
            // Prepare an SQL statement
            $stmt = $pdo->prepare("INSERT INTO orders (first_name, last_name, phone, address, email, total_quantity, total_price) VALUES (:first_name, :last_name, :phone, :address, :email, :total_quantity, :total_price)");

            // Bind parameters
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':total_quantity', $total_quantity);
            $stmt->bindParam(':total_price', $total_price);

            // Execute the statement
            $stmt->execute();

            // Redirect to success page
            header("Location: success.php");
            exit();
        } else {
            echo "All form fields are required.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
<div class="container">
    <div class="checkoutLayout">
        <div class="returnCart">
            <p><a href="Menu.php" style="color: white; text-decoration: none; background-color: green; border-radius: 5px; padding: 10px;">Back to Menu</a></p>
            <center><h1>Orders Summary</h1></center>
            <div class="list"></div>
        </div>
        <div class="right">
            <h1>Checkout</h1>
            <form method="post" action="checkout.php" id="checkoutForm">
                <div class="form">
                    <div class="group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" required>
                    </div>
                    <div class="group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" required>
                    </div>
                    <div class="group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <div class="group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" required>
                    </div>
                    <div class="group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <input type="hidden" name="total_quantity" id="total_quantity">
                    <input type="hidden" name="total_price" id="total_price">
                    <input type="hidden" name="payment_method" value="cod">
                </div>
                <button class="buttonCheckout" type="submit" onclick="populateHiddenFields()">Pay Later (COD)</button>
            </form>
            <form id="stripeForm" method="post" action="create_stripe_session.php">
                <input type="hidden" name="first_name" id="stripe_first_name">
                <input type="hidden" name="last_name" id="stripe_last_name">
                <input type="hidden" name="phone" id="stripe_phone">
                <input type="hidden" name="address" id="stripe_address">
                <input type="hidden" name="email" id="stripe_email">
                <input type="hidden" name="total_quantity" id="stripe_total_quantity">
                <input type="hidden" name="total_price" id="stripe_total_price">
                <button class="buttonCheckouts" type="button" onclick="submitStripeForm()">Pay by Card</button>
            </form>
            <div class="popup" id="popup">
                <img src="images/tick.png">
                <h2>Thank You!</h2>
                <p>Your details have been successfully submitted. Please prepare your payment before the delivery arrives. Thank you for choosing Catyel's Catering!</p>
                <button type="button" onclick="closePopup()">OK</button>
            </div>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    let listCart = [];

    function checkCart() {
        var cookieValue = document.cookie
            .split('; ')
            .find(row => row.startsWith('listCart='));
        if (cookieValue) {
            listCart = JSON.parse(cookieValue.split('=')[1]);
        }
    }

    function addCartToHTML() {
        let listCartHTML = document.querySelector('.returnCart .list');
        listCartHTML.innerHTML = '';

        let totalQuantity = 0;
        let totalPrice = 0;

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

        document.getElementById('total_quantity').value = totalQuantity;
        document.getElementById('total_price').value = totalPrice.toFixed(2);
        document.getElementById('stripe_total_quantity').value = totalQuantity;
        document.getElementById('stripe_total_price').value = totalPrice.toFixed(2);
    }

    function populateHiddenFields() {
        checkCart();
        addCartToHTML();
    }

    document.addEventListener('DOMContentLoaded', function() {
        checkCart();
        addCartToHTML();
    });

    function submitStripeForm() {
        populateHiddenFields();
        const form = document.getElementById('checkoutForm');
        if (form.checkValidity()) {
            document.getElementById('stripe_first_name').value = document.getElementById('first_name').value;
            document.getElementById('stripe_last_name').value = document.getElementById('last_name').value;
            document.getElementById('stripe_phone').value = document.getElementById('phone').value;
            document.getElementById('stripe_address').value = document.getElementById('address').value;
            document.getElementById('stripe_email').value = document.getElementById('email').value;

            fetch('create_stripe_session.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    first_name: document.getElementById('stripe_first_name').value,
                    last_name: document.getElementById('stripe_last_name').value,
                    phone: document.getElementById('stripe_phone').value,
                    address: document.getElementById('stripe_address').value,
                    email: document.getElementById('stripe_email').value,
                    total_quantity: document.getElementById('stripe_total_quantity').value,
                    total_price: document.getElementById('stripe_total_price').value
                })
            })
            .then(response => response.json())
            .then(session => {
                if (session.error) {
                    console.error('Error:', session.error);
                    alert('Error creating Stripe session.');
                } else {
                    const stripe = Stripe('pk_test_51P7ukHBN2Yw7QivRL0hdwp2ynHMnR8XzHOV23nc8WCJHPMBulfY6KZkKGySOFHb4DIy23Vu6lpGFx5xnLDGd64Na00HW6VLFVZ');
                    stripe.redirectToCheckout({ sessionId: session.id });
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        } else {
            alert("Please fill out all the fields before checking out.");
        }
    }

    function closePopup() {
        document.getElementById('popup').classList.remove('open-popup');
    }
</script>
</body>
</html>
