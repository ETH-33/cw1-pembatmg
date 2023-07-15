<?php

require'config/constants.php'; 

// geting back data if regestration is error
$firsname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;

// delete signup data session
unset($_SESSION['signup-data']);

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
    <h2>Sign Up</h2>
    <?php
    if(isset($_SESSION['signup'])): ?>
       <div class="alert-message error">
      <p><?= $_SESSION['signup'];
       unset($_SESSION['signup']);?> </p>
     
    </div>

    <?php endif ?>
 
  <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="post">
    <input type="text" name="firstname" value="<?= $firsname?>" placeholder="First Name">
    <input type="text" name="lastname" value="<?= $lastname?>" placeholder="Last Name">
    <input type="text" name="username" value="<?= $username?>" placeholder="Username">
    <input type="email" name="email" value="<?= $email?>" placeholder="Email">
    <input type="password" name="createpassword" value="<?= $createpassword?>" placeholder="Create Password">
    <input type="password" name="confirmpassword" value="<?= $confirmpassword?>" placeholder="Confirm Password">
    <div class="form-control">
      <label for="avatar">User Avatar</label>
      <input type="file" name="avatar" id="avatar">
    </div>
    <button type="submit" name="submit" class="btn">Sign Up</button>
    <small>Already have an account? <a href="signin.php">Sign In</a></small>
  </form>
  </div>
</section>

</body>
</html>