<?php
require 'config/database.php';

if(isset($_GET['id'])) {
  
  $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
  // fetch user from database
  $query = "SELECT * FROM users WHERE id=$id";
  $result =mysqli_query($connection, $query);
  $user = mysqli_fetch_assoc($result);

  // making sure we only get back one user

  if(mysqli_num_rows($result) == 1 ) {
    $avatar_name = $user['avatar'];
    $avatar_path = '../images/'. $avatar_name;
    // now to delete image if available
    if($avatar_path) {
      unlink($avatar_path);
    }

  }

  





  // delete user from database
  $delete_user_query = "DELETE FROM users WHERE id=$id";
  $delete_user_result = mysqli_query($connection, $delete_user_query);
  // if error
  if(mysqli_errno($connection)) {
    $_SESSION['delete-user'] = "couldn't delete {$user['firstname']} {$user['lastname']}' user";
  }else {
    $_SESSION['delete-user-success'] = "User {$user['firstname']} {$user['lastname']} has been deleted successfully";
  }

}

header('location: ' . ROOT_URL . 'admin/manage-user.php'  );
die();