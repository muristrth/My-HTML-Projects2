<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['psw']);
    $password_repeat = htmlspecialchars($_POST['psw-repeat']);

    // Validate passwords match
    if ($password !== $password_repeat) {
        echo "Passwords do not match.";
        exit();
    }

    // Store form data in session variables
    $_SESSION['name'] = $name;
    $_SESSION['tel'] = $tel;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Simulate payment process and generate confirmation code
    $confirmation_code = "CONF123";  // You can generate a real confirmation code as needed
    $_SESSION['confirmation_code'] = $confirmation_code;

    // Redirect to profile page
    header("Location: profile.php");
    exit();
} else {
    echo "<p>Invalid request method.</p>";
}
?>

