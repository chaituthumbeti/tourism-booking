<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="./css/home.css">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>

<!-- header starts here -->
<section class="header">
    <a href="home.php" class="logo">MACS.com</a>
    <nav class="navbar">
        <?php
        session_start();
         if(isset($_SESSION['username']))
         {
            echo "<i class='fas fa-user-alt' style='font-size:29px;color:black'></i>";
            echo 'Welcome '. $_SESSION['username'];  
         }
         else
         {
           echo '<a href="login.php">Login</a>';
         }
        ?>
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>

        <?php 
        if(isset($_SESSION['username']))
         echo '<a href="logout.php">Log Out</a>'; 
        ?>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>';


<!-- header ends here -->

<!-- home section starts here -->

<!-- between header and services section  this is home section-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(./images//homebg.jpg) no-repeat">
                <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(./images/slide-1.jpg) no-repeat">
                <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/slide-4.jpg) no-repeat">
                <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- services section ends after that -->
<!-- home-about -->
<section class="home-about">
  <div class="image">
    <img src="images/about-img.jpg" alt="">
  </div>
  <div class="content">
    <h3>about us</h3>
    <p>At <strong>MACS</strong>, we believe that travel is not just about reaching a destination; it's about the experiences and memories you create along the way. We are passionate about curating exceptional travel journeys that go beyond the ordinary, providing you with unforgettable adventures and a deeper understanding of the world.</p>
    <a href="about.php" class="btn">readmore</a>
  </div>
</section>
<!--  home about ends -->
<!-- home packagesstarts -->
<section class="home-packages">
  <h1 class="heading-title">
    Our Top 3 best packages
  </h1>
  <div class="box-container">
    <div class="box">
      <div class="image">
        <img src="./images/goa.png" alt="goa">
      </div>
      <div class="content">
        <h3>Goa</h3>
        <p>Rev up your spirits with the stunning adventures of Goa. You can expect heavy rainfall throughout the
            season, pleasant
            sea breeze. Humidity tends to be high. You can also sample delicious cuisines at Goa.</p>
        <a href="package.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="./images/kerela.png" alt="kerala">
      </div>
      <div class="content">
        <h3>Kerala</h3>
        <p>Discover the enchanting beauty of Kerala, where lush green landscapes meet serene backwaters, and
                        vibrant culture
                        intertwines with tranquil beaches. Immerse yourself in the rich traditions and flavors that
                        define
                        Gods Own Country</p>
        <a href="package.php" class="btn">book now</a>
      </div>
    </div>

    <div class="box">
      <div class="image">
        <img src="./images/leh.png" alt="leh">
      </div>
      <div class="content">
        <h3>Leh</h3>
        <p>Prepare to be wooed by the mesmerizing mountains of Leh. You will love sightseeing and the
                        surreal
                        vistas of snow-capped
                        mountains. Leh is also known for its unique wildlife</p>
        <a href="package.php" class="btn">book now</a>
      </div>
    </div>


  </div>

  <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>
<!--  home-package endds -->


<!-- home section ends here -->


<!-- services selection starts here -->

    <section class="services">
        <h1 class="heading-title">Our services</h1>

        <div class="box-container">
            <div class="box">
                <img src="#" alt="">
                <h3>Trips</h3>
            </div>
            <div class="box">
                <img src="#" alt="">
                <h3>Tours</h3>
            </div>
            <div class="box">
                <img src="#" alt="">
                <h3>Customer Care</h3>
            </div>
        </div>
    </section>













<!-- services selection ends here -->






<!-- footer starts here -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>

        </div>


        <div class="box">
            <h3>Contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> 9100567616 </a>
        <a href="#"> <i class="fas fa-phone"></i> 8490567821 </a>
        <a href="#"> <i class="fas fa-envelope"></i> mahendhar2004@gmail.com  </a>
        <a href="#"> <i class="fas fa-map"></i> mumbai,india -400104 </a>

        </div>

        <div class="box">

        <h3>Follow us</h3>
        <a href="#"> <i class="fas fa-facebook"></i> facebook </a>
        <a href="#"> <i class="fas fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fas fa-instagram"></i> instagram  </a>
        <a href="#"> <i class="fas fa-linkedin"></i> linkedin </a>

        </div>
    </div>

    <div class="credit">
        Credited by <span>&copy;macs | all rights reserved!</span>
    </div>

</section>

    <!-- footer ends here -->





<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>