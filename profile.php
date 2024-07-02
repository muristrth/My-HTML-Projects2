<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: sign-in.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<body>
    <?php include('templates/nav-bar.php'); ?>
<hr>
<h1>User Profile</h1>
<div class="container">
    <div class="profile-header">
        <img class="profile-picture" src="https://via.placeholder.com/150" alt="Profile Picture">
        <div class="profile-name"> <?php echo htmlspecialchars($_SESSION['name']); ?></div>
    </div>
    <ul class="profile-details">
        <li><span>Full Name:</span> <?php echo htmlspecialchars($_SESSION['name']); ?></li>
        <li><span>Phone Number:</span> <?php echo htmlspecialchars($_SESSION['tel']); ?></li>
        <li><span>Email:</span> <?php echo htmlspecialchars($_SESSION['email']); ?></li>
        <li><span>Password:</span> *********</li>
        <li><span>Courses Enrolled:</span> Hustler Income Expert</li>
    </ul>
    <h5><a href="#.pdf">Payment-Receipt</h5></a>
</div>
<br><br><br>
<h2>Welcome to Your Profile, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
<p>You have successfully confirmed your payment. Here are your course details:</p>
<div class="course-content">
    <h3>Course Content</h3>
    <ul>
        <li><a href="video1.mp4">Video 1: Introduction</a></li>
        <li><a href="video2.mp4">Video 2: Module 1</a></li>
        <li><a href="video3.mp4">Video 3: Module 2</a></li>
        <!-- Add more videos as needed -->
    </ul>
</div>
<div class="zoom-details">
    <h3>Zoom Session Details</h3>
    <p><strong>Meeting Date:</strong> 25th June 2024</p>
    <p><strong>Meeting Time:</strong> 10:00 AM - 12:00 PM EAT</p>
    <p><strong>Zoom Meeting Link:</strong> <a href="https://zoom.us/j/1234567890">Join Zoom Meeting</a></p>
    <p><strong>Meeting ID:</strong> 123 4567 890</p>
    <p><strong>Passcode:</strong> ABCD1234</p>
</div>
<br><br><br><br><br><br>
<?php include_once("templates/footer.php") ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

