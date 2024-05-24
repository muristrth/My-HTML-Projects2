<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
</head>
<body>
<?php
echo 'Thanks for signing up to our HIE program';
echo '<br><br>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>Thank you for contacting us, $name!</h2>";
    echo "<p>We will get back to you at $email soon.</p>";
} else {
    echo "Invalid request method.";
}
?>
</body>
</html>
