<?php

require_once './stripe-php/init.php';


$stripeSecretKey = 'sk_test_51N4MzmEdyYofR3Nhtor38OK8aI0mLYLvtmAL8mF8fi2GqBexpWq63Ez2nP1t5NHVI0nwjJyHG4DjWG1Q7cveWVsC00Uhabn8sg';

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:8080/Project/PHP/dash.php';

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card',],
  'line_items' => [[
    //'price' => '{{PRICE_ID}}',
    'price_data' => [
        'currency' => 'ZAR',
        'product_data' => ['name' => 'Job Post 1'],
        'unit_amount' => 5000,
      ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN ,
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);