<?php
session_start();
require 'vendor/autoload.php'; // Ensure you include the Composer autoload file

\Stripe\Stripe::setApiKey('your_stripe_secret_key');

// Create a checkout session
$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'HIE Program',
            ],
            'unit_amount' => 5000, // Amount in cents (e.g., $50.00)
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => 'success.php',
    'cancel_url' => 'cancel.php',
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="icon" href="./images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap">
    <link rel="stylesheet" href="./style.css">
<body>
    <h2>Complete Your Payment</h2>
    <p>Hello <?php echo htmlspecialchars($_SESSION['name']); ?>, please complete your payment for the HIE program.</p>
    <form action="<?php echo $session->url; ?>" method="POST">
        <button type="submit">Pay Ksh. 25,000</button>
    </form>
</body>
</html>
