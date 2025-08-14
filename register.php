<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register Page</title>
  <link rel="stylesheet" href="../asset/css/register.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="form-container">
      <!-- read methods which one is used for when if you don't want to check the action page code -->
      <form method="post" action="register_insert.php">
        <h2>Create<br>Account</h2>
        <!-- make sure to add name attribute to link the text to send it in a form to another page like u_name, u_email, u_password -->
        <input type="text" name="u_name" placeholder="Name" required>
        <input type="email" name="u_email" placeholder="Email" required>
        <input type="password" name="u_password" placeholder="Password" required>
        <!-- <input type="text" placeholder="Contact" required>
        <input type="text" placeholder="Address" required> -->
        <div class="btn-wrapper">
          <!-- for validation purpose we want until the button of submit is not clicked then don't run SQL query to chcek that we used name attribute with value submi it is case sensitive -->
          <button class="signup-btn" name="submit">SIGN UP</button>
        </div>
      </form>
    </div>
    <div class="overlay">
      <h2>Welcome<br>Back!</h2>
      <p>To keep connected with us please login with your personal info</p>
      <button class="signin-btn">SIGN IN</button>
  
    </div>
  </div>
</body>
</html>
