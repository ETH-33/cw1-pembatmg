<?php

require 'config/database.php';
// fetch current user from database
if(isset($_SESSION['user-id'])) {
  $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
  $query = "SELECT avatar FROM users WHERE id=$id";
  $result = mysqli_query($connection, $query);
  $avatar = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>
  <link rel="stylesheet" href="<?php echo ROOT_URL ?>css/style.css">

    <!--Using cdnjs font awsome for social icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Using Bar and close icons -->
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/close-o.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/file-add.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/user-add.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/file-add.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/push-chevron-down.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/user-list.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-long-left.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
  <link href='https://unpkg.com/css.gg@2.0.0/icons/css/list.css' rel='stylesheet'>
  <!-- Using google fonts poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  

</head>
<body>

  <nav>
    <div class="container nav-container ">
       <a href="<?php echo ROOT_URL ?>" class="nav-logo">KHYUNG</a>
       <ul class="nav-items">
        <li><a href="<?php echo ROOT_URL ?>blog.php">Blog</a></li>
        <li><a href="<?php echo ROOT_URL ?>about.php">About</a></li>
        <li><a href="<?php echo ROOT_URL ?>services.php">Services</a></li>
        <li><a href="<?php echo ROOT_URL ?>contact.php">Contact</a></li>
        <?php if(isset($_SESSION['user-id'])) : ?>
        <li class="nav-profile">
          <div class="avatar">
            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>">
          </div>
          <ul>
            <li><a href="<?php echo ROOT_URL ?>admin/index.php">Dashboard</a></li>
            <li><a href="<?php echo ROOT_URL ?>logout.php">Logout</a></li>
          </ul>
        </li>
        <?php else : ?>
        <li><a href="<?php echo ROOT_URL ?>signin.php">Signin</a></li>
        <?php endif ?>

       </ul>

       <button id="open-btn"><i class="gg-menu"></i></button>
       <button id="close-btn"><i class="gg-close-o"></i></button>


    </div>


  </nav>
  <!--====================END OF NAV=================================================-->
  