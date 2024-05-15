<?php 

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51PEqGPP2AvTtC4eBRtqwsgR3J6QnOHxSrg6O6QT24CU78g6kfaXNusjuhwJm3Ep4xlivQLeza5gQlA1PP1cZK6es00IqRFj9li";


\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/success.php",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "php",
                "unit_amount" => 50000,  //PHP 500.00 in centavos
                "product_data" => [
                    "name" => "T-shirt"
                ] 
            ]
        ]
    ]
]);

http_response_code(303);
header("Loccation: " . $checkout_session->url);