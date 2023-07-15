<?php
require 'config/constants.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>
  <link rel="stylesheet" href="./css/style.css">

  <!--Using cdnjs font awsome for social icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Using Bar and close icons -->
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close-o.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
  <!-- Using google fonts poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  

</head>
<body>

<section class="form-section">
  <div class="container form-container">
    <h2>Sign In</h2>
    <div class="alert-message success">
      <p>This is an success message</p>
    </div>
  <form action="">
    <input type="text" placeholder="Username or Email">
    <input type="password" placeholder="Password">
    <button type="submit" class="btn">Sign In</button>
    <small>Don't have an account? <a href="signup.php">Sign up</a></small>
  </form>
  </div>
</section>

</body>
</html>