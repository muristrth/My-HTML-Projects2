<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="icon" href="./images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="message">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email'])) {
            // Sanitize form inputs
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);

            // Display thank you message and payment details
            echo "<h2>Thank you for contacting us, $name!</h2>";
            echo "<p>We will get back to you at $email soon.</p>";
            echo "<p>Please make a payment of KES 5000 to the following details:</p>";
            echo "<ul>";
            echo "<li><strong>Paybill Number:</strong> 123456</li>";
            echo "<li><strong>Account Number:</strong> HIE$name</li>";
            echo "<li><strong>Amount:</strong> KES 5000</li>";
            echo "</ul>";
            echo "<p>Once you have made the payment, please await confirmation from our admin within 24 hours.</p>";

            // You could also save these details in a database for future reference
            // Database connection and saving logic here (omitted for brevity)
        } else {
            echo "<p>Name or email not set in POST data.</p>";
        }
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
</div>
</body>
</html>