<?php

require 'vendor/autoload.php';
require 'content/php/Helper.php';
$real_mode = Helper::real_mode();
if ($real_mode){
    $sk = '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';
    $image_file = '/content/images/warning-shield-96.png';
} else {
    $sk = 'sk_test_51JBJAKEd3rpD3LOUWxcQ6fk451mP5Tr85dU9cb6WzjczGxPu3OaXiM586TBgbfrsjZbry7H5uR7LsS2EJUXZKSAI00Mvg4ZF4E';
    $image_file = '/content/images/test_tube.gif';
}
\Stripe\Stripe::setApiKey($sk);

header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://' . $_SERVER['HTTP_HOST'];
$price = $_GET['price'];

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'eur',
            'unit_amount' => $price * 100,
            'product_data' => [
                'name' => $price . ' Card',
                'images' => [$YOUR_DOMAIN . $image_file],
            ],
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '?payment_status=success',
    'cancel_url' => $YOUR_DOMAIN,
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
