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

  <nav>
    <div class="container nav-container ">
       <a href="index.html" class="nav-logo">YETI</a>
       <ul class="nav-items">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <!-- <li><a href="signin.html">Signin</a></li> -->
        <li class="nav-profile">
          <div class="avatar"><img src="/images/avatar.jpg"></div>
          <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="logout.html">Logout</a></li>
          </ul>

          
        </li>

       </ul>

       <button id="open-btn"><i class="gg-menu"></i></button>
       <button id="close-btn"><i class="gg-close-o"></i></button>


    </div>


  </nav>
  <!--====================END OF NAV=================================================-->
  
  <section class="singlepost">
    <div class="container singlepost-container">
      <h2>
        The Himalayan mountain range in Nepal stands as a 
        testament to nature's grandeur
      </h2>
      <div class="post-author">
        <div class="post-author-avatar">
          <img src="/images/avatar1.jpg">
        </div>
        <div class="post-author-info">
          <h5> By : Nero</h5>
          <small>june 20, 2023 - 08:24</small>
        </div>
      </div>
      <div class="singlepost-thumbnail">
        <img src="/images/travel.jpg">
      </div>
      <P>
        The best time to visit Nepal is during the spring (March to May) and autumn (September to November) seasons. During spring, the weather is mild, and the flowers are in full bloom, making it a great time for trekking and exploring the countryside. 
      </P>
      <p>
        Autumn brings clear skies, favorable weather conditions, and stunning views of the Himalayas, making it ideal for mountain expeditions and outdoor activities. These seasons are popular among tourists, so expect larger crowds at popular destinations. 
      </p>
      <p>
        However, Nepal's diverse geography and climate offer year-round opportunities for adventure and cultural experiences.
      </p>
      
  
    </div>
  </section>
  <!-- ===============END OF SINGLE POST============== -->

<footer>
  <div class="footer-social">
    <a href="https://youtube.com/YETI" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://facebook.com/YETI" target="_blank"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://instagram.com/YETI" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://linkedin.com/YETI" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    <a href="https://twitter.com/YETI" target="_blank"><i class="fa-brands fa-twitter"></i></a>
  </div>
  <div class="container footer-container">
    <article>
      <h4>Categories</h4>
      <ul>
        <li><a href="">Trekking</a></li>
        <li><a href="">Travel</a></li>
        <li><a href="">Food</a></li>
        <li><a href="">Culture</a></li>
        <li><a href="">Lifestyle</a></li>
        <li><a href="">History</a></li>
      </ul>
    </article>
    <article>
      <h4>Support</h4>
      <ul>
        <li><a href="">Online support</a></li>
        <li><a href="">Call numbers</a></li>
        <li><a href="">Emails</a></li>
        <li><a href="">Social support</a></li>
        <li><a href="">Location</a></li>
      </ul>
    </article> 
    <article>
      <h4>Blog</h4>
      <ul>
        <li><a href="">Recent</a></li>
        <li><a href="">Popular</a></li>
        <li><a href="">Safety</a></li>
        <li><a href="">Categories</a></li>
        <li><a href="">Repair</a></li>
      </ul>
    </article>
    <article>
      <h4>Links</h4>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contacts</a></li>
      </ul>
    </article>
  </div>
  
</footer>

<script src="/main.js"></script>
</body>
</html>