const express = require('express');
const app = express();
const stripe = require('stripe')('your-stripe-secret-key');
const bodyParser = require('body-parser');

app.use(bodyParser.json());

app.post('/create-checkout-session', async (req, res) => {
    const { items, customerInfo, amount } = req.body;

    try {
        const session = await stripe.checkout.sessions.create({
            payment_method_types: ['card'],
            line_items: items.map(item => ({
                price_data: {
                    currency: 'php',
                    product_data: {
                        name: item.id // Ensure your product name/id logic is correct
                    },
                    unit_amount: item.price * 100 // Convert to cents
                },
                quantity: item.quantity
            })),
            mode: 'payment',
            success_url: 'http://localhost:3000/success',
            cancel_url: 'http://localhost:3000/cancel',
            customer_email: customerInfo.email
        });

        res.json({ id: session.id });
    } catch (error) {
        console.error('Error creating Stripe session:', error);
        res.status(500).send('Server error');
    }
});

app.listen(3000, () => console.log('Server running on port 3000'));
