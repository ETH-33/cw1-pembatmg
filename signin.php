<?php

require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
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
    <?php if (isset($_SESSION['signup-success'])) : ?>
      <div class="alert-message success">
    <p>
      <?= $_SESSION['signup-success'];
      unset($_SESSION['signup-success']); ?>
    </p>
      </div>
    <?php elseif(isset($_SESSION['signin'])) :?>
      <div class="alert-message error">
    <p>
      <?= $_SESSION['signin'];
      unset($_SESSION['signin']); ?>
    </p>
    <?php endif ?>
    
  <form action="<?= ROOT_URL ?>signin-logic.php" method="POST">

    <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Username or Email">
    <input type="password" name="password" value="<?= $password ?>" placeholder="Password">
    <button type="submit" name="submit" class="btn">Sign In</button>
    <small>Don't have an account? <a href="signup.php">Sign up</a></small>
  </form>
  </div>
</section>

</body>
</html>