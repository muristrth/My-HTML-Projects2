<!DOCTYPE html>
<html lang="en">
<?php include_once("templates/header.php"); ?>
<body>
    <?php include_once("templates/nav-bar.php"); ?>
    <br><br>
    <form class="modal-content" action="profile.php" method="post" onsubmit="return validateSignInForm()">
        <div class="container">
          <h1>Sign In</h1>
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="Enter Email" name="email" required><br><br>
          <i class="fas fa-lock"></i>
          <input type="text" placeholder="Enter Password" name="psw" required><br><br>
          <button type="submit" class="button2">Sign In</button>
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