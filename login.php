<?php 
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="../asset/css/login.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- for what purpose -->
   <?php
    if (isset($_GET["msg"])) {
        echo "<div class='alert alert-info'>" . $_GET["msg"] . "</div>";
    }
    ?>

<!--      -->
  <div class="container">
    <div class="form-container">
      <form action="login_validate.php" method="post">
        <h2>Sign in</h2>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <div class="btn-wrapper">
          <button class="signin-btn" name="submit">SIGN IN</button>
        </div>
        <!-- <p class="admin-text">Click here to login as admin!</p> -->
      </form>
    </div>
    <div class="overlay">
      <h2>Hello, User!</h2>
      <p>Enter your personal details and start journey with us</p>
       
      <!-- <button class="signup-btn">SIGN UP</button>
       <a href="./register.php"> -->
      <a href="./register.php" class="signup-btn">SIGN UP</a>

    </div>
  </div>
</body>
</html>
