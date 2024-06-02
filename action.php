<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" href="./images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.html">
        <img src="./images/icon.PNG" alt="Hustler Income Expert Logo" width="50px" height="50px"></a>
        <a class="navbar-brand" href="#">Hustler Income Expert</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="courses.html">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                        <a class="dropdown-item" href="sign-in.html">Sign In</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="sign-in.html">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<hr><br><br><br>
<body>
<div class="message">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email'])) {
            // Sanitize form inputs
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);

            // Save details in session for later use
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            // Display thank you message and payment details
            echo "<h2>Thank you for contacting us, $name!</h2>";
            echo "<p>We will get back to you at $email soon.</p>";
            echo "<p>Please make a payment of KES 15,000 to the following details:</p>";
            echo "<ul>";
            echo "<li><strong>Paybill Number:</strong> 329329</li>";
            echo "<li><strong>Account Number:</strong> 0100429111400</li>";
            echo "<li><strong>Amount:</strong> KES 15,000</li>";
            echo "</ul>";
            echo "<p>Once you have made the payment, please enter your M-Pesa transaction code below to confirm your payment.</p>";

            // Payment confirmation form
            echo '<form action="confirm_payment.php" method="post">';
            echo '<label for="mpesa_code">M-Pesa Transaction Code:</label>';
            echo '<input type="text" id="mpesa_code" name="mpesa_code" required>';
            echo '<input type="submit" value="Confirm Payment">';
            echo '</form>';
        } else {
            echo "<p>Name or email not set in POST data.</p>";
        }
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
</div>
<footer style="padding: 20px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <a href="./contact.html"><h3>Talk To Us</h3></a>
                </div>
            <div>
                <h3>Follow Us</h3>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        <hr style="margin: 20px 0;">
        <p>&copy; 2024 Hustler Income Expert. All rights reserved.</p>
    </div>
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>