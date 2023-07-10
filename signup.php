<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>
  <link rel="stylesheet" href="style.css">

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
    <div class="alert-message error">
      <p>This is an error message</p>
    </div>
  <form action="" enctype="multipart/form-data">
    <input type="text" placeholder="First Name">
    <input type="text" placeholder="Last Name">
    <input type="text" placeholder="Username">
    <input type="email" placeholder="Email">
    <input type="password" placeholder="Create Password">
    <input type="password" placeholder="Confirm Password">
    <div class="form-control">
      <label for="avatar">User Avatar</label>
      <input type="file" id="avatar">
    </div>
    <button type="submit" class="btn">Sign Up</button>
    <small>Already have an account? <a href="signin.html">Sign In</a></small>
  </form>
  </div>
</section>

</body>
</html>