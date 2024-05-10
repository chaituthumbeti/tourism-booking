<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="./css/admin.css">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <style>
    .table-container{
        height: 150vh;
    }
  </style>
</head>
<body>

<section class="header">

    <a href="home.php" class="logo"><span class="admin-span">Admin portal</span></a>
    <nav class="navbar">
        <a href="./login.php">Login</a>
        <i style='font-size:24px' class='fas'>&#xf406;</i>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>


<h1 class="admin-heading">Edit packages:</h1>

<div class="table-container">
<table>

    <thead>
      <tr>
        <th>Booking id</th>
        <th>name</th>
        <th>date</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2456558</td>
        <td>Mahendhar</td>
        <td>22/11/2023</td>
        <td>success</td>
      </tr>
      <tr>
        <td>Row 2, Cell 1</td>
        <td>Row 2, Cell 2</td>
        <td>Row 2, Cell 3</td>
        <td>Row 2, Cell 4</td>
      </tr>
    </tbody>
  </table>

</div>






<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>

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
        Credited by <span>mr. mahendhar | all rights reserved!</span>
    </div>

</section>



</body>
</html>