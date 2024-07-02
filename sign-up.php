<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIE-Sign Up</title>
    <link rel="icon" href="./images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="dropdown-item" href="profile.html">Profile</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<hr>
<br><br><br>
    <form class="modal-content" id="sign-up-form" action="action.php" method="post">
        <div class="container">
        <h1>Sign Up</h1>
        <i class="fas fa-user"></i>
        <input type="text" id="name" placeholder="Full Name" name="name" required><br><br>
        <i class="fas fa-phone"></i>
        <input type="text" placeholder="Phone Number" name="tel" required><br><br>
        <i class="fas fa-envelope"></i>
        <input type="text" id="email" placeholder="Email" name="email" required><br><br>
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="psw" required><br><br>
        <button type="submit" class="button2">Sign Up</button>
    </form><br><br>
    <p class="or">
       <br> -------------------or------------------
    </p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Already Have an Account ?</p>
        <a class="button2" href="./sign-in.html">Sign In</button>
    </div>
</div>

<br><br><br><br><br><br>
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
        <p>&copy; 2024 HIE. All rights reserved.</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>