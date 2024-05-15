<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('');

header('Content-Type: application/json');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$first_name = $data['first_name'];
$last_name = $data['last_name'];
$phone = $data['phone'];
$address = $data['address'];
$email = $data['email'];
$total_quantity = $data['total_quantity'];
$total_price = $data['total_price'];

try {
    $session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'php',
                'product_data' => [
                    'name' => 'Total Price',
                ],
                'unit_amount' => $total_price * 100,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'http://localhost/success.php',
        'cancel_url' => 'http://localhost/cancel.php',
    ]);

    echo json_encode(['id' => $session->id]);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
