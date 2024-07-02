<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIE-Contact Us</title>
    <link rel="icon" href="./images/icon.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.html">Hustler Income Expert</a>
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
<div class="container">
    <h1>Welcome to Hustler Income Expert</h1>
    <div>
        <h2>Our Services</h2>
        <table>
            <tr>
                <th>Service</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>Business/Marketing Consultation</td>
                <td>Expert advice on Business Strategies</td>
                <td>Ksh. 5,000/day</td>
            </tr>
            <tr>
                <td>Hustler Income Expert Course</td>
                <td>Generate Wealth in Kenya using the HIE <br>Program and become one of the Millionaire Hustlers</td>
                <td>Ksh. 50,000</td>
            </tr>
        </table>
    </div>
    <div><br><br><br><br>
        <h2>Request Service</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="text" name="email" placeholder="Your Email" required><br>
            <select type="text" name="service" required>
                <option value="">---Select Service--- </option>
                <option value="consultation">Consultation</option>
                <option value="training">Training Program</option>
            </select><br><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
<form class="modal-content">
    <div class="container">
    <h1>Talk To Us</h1><br>
      <input type="text" placeholder="Your Full Name" name="text" required><br>
      <input type="text" placeholder="Your Email Address" name="email" required><br>
      <input type="text" placeholder="Your Phone Number" name="tel" required><br>
      <input type="text" placeholder="Occupation" name="location" required><br>
        <input type="text" placeholder="Your Message" name="message" required><br>
      <br><br>
      <input type="submit" value="Submit">
      </div>
 </form>
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
        <p>&copy; 2024 Hustler Income Expert. All rights reserved.</p>
    </div>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>