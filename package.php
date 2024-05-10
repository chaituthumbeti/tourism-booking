<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/package.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Packages</title>
</head>

<body>
<section class="navbar-pack">
<a href="home.php" class="main-logo">MACS.com</a>
<nav class="navbar">
<div class="welcome">
<?php 
 if(isset($_SESSION['username']))
 {
 echo "<i class='fas fa-user-alt' style='font-size:29px;color:black'></i>";
 echo 'Welcome '. $_SESSION['username'];
 }  
?>
</div>
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact Us</a>
</nav>
<div id="menu-btn" class="fas fa-bars"></div>
</section>

    <div class="pack">
        <h1>Places to Visit in India</h1>
        <p>Places to Visit in India - The best places to visit in India to experience the most beautiful places like
            historical places, beach places, hill stations, romantic places, adventure places,peaceful places and many more.</p>
    </div>

    <?php
    include('connection.php');
    $sql="select vpname from viewpackages";
    $result=mysqli_query($conn,$sql);
    while($res=mysqli_fetch_array($result))
    {
        $i=$res['vpname'];
    
    
        if ($i == "tajmahal") {
            echo '<div class="container"><a href="book1.php?destination=tajmahal">
                <div class="card">
                    <img src="./images/taj.png" alt="Destination 1">
                    <div class="card-content">
                        <h3>Taj Mahal</h3>
                        <p>Marvel at the timeless beauty of the Taj Mahal, a UNESCO World Heritage Site and one of
                            the Seven
                            Wonders of the World.
                        </p>
                    </div>
                </div>
            </a></div>';
        }  if ($i == 'goa') {
            echo '<div class="container"><a href="book1.php?destination=goa">
            <div class="card">
                <img src="./images/goa.png" alt="Destination 3">
                <div class="card-content">
                    <h3>Goa</h3>
                    <p>Rev up your spirits with the stunning adventures of Goa. You can expect heavy rainfall throughout
                        the
                        season, pleasant
                        sea breeze. Humidity tends to be high. You can also sample delicious cuisines at Goa.
                    </p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'kerala') {
            echo '<div class="container"><a href="book1.php?destination=kerala">
            <div class="card">
                <img src="./images/kerela.png" alt="Destination 4">
                <div class="card-content">
                    <h3>Kerela</h3>
                    <p>Discover the enchanting beauty of Kerala, where lush green landscapes meet serene backwaters, and
                        vibrant culture
                        intertwines with tranquil beaches. Immerse yourself in the rich traditions and flavors that
                        define
                        Gods Own Country</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'leh') {
            echo '<div class="container"><a href="book1.php?destination=leh">
            <div class="card">
                <img src="./images/leh.jpeg" alt="Destination 5">
                <div class="card-content">
                    <h3>Leh</h3>
                    <p>Prepare to be wooed by the mesmerizing mountains of Leh. You will love sightseeing and the
                        surreal
                        vistas of snow-capped
                        mountains. Leh is also known for its unique wildlife.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'lakskadweep') {
            echo '<div class="container">
            <a href="book1.php?destination=lakskadweep">
                <div class="card">
                    <img src="./images/lak.png" alt="Destination 6">
                    <div class="card-content">
                        <h3>Lakshadweep</h3>
                        <p>Lakshadweep is home to serene beaches. You can expect summer heat and the temperature rising upto
                            32°C. Lakshadweep is
                            also very popular among relaxation-seekers..</p>
                    </div>
                </div>
            </a></div>';
        }  if ($i == 'ooty') {
            echo '<div class="container"> <a href="book1.php?destinationoOoty">
            <div class="card">
                <img src="./images/ooty.png" alt="Destination 7">
                <div class="card-content">
                    <h3>Ooty</h3>
                    <p>Officially called Ootacamund, the hill-town is better known by its nicknameOoty. It is loved by
                        Bollywood directors,
                        honeymooners, families, and even backpackers, for its mountains, lakes, gardens, and waterfalls.
                    </p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'goldentemple') {
            echo '<div class="container"> <a href="book1.php?destination=goldentemple">
            <div class="card">
                <img src="./images/goldentemple.png" alt="Destination 8">
                <div class="card-content">
                    <h3>Golden Temple</h3>
                    <p>Immerse yourself in the divine aura of the Golden Temple, a symbol of spiritual splendor nestled
                        in
                        the heart of
                        Amritsar</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'hampi') {
            echo '<div class="container">
            <a href="book1.php?destination=hampi">
                <div class="card">
                    <img src="./images/hampi.png" alt="Destination 9">
                    <div class="card-content">
                        <h3>Hampi</h3>
                        <p>Discover the rich history and breathtaking ruins of Hampi, a UNESCO World Heritage site in
                            Karnataka,
                            India. Explore
                            ancient temples and marvel at the architectural wonders of this historic city</p>
                    </div>
                </div>
            </a></div>';
        }  if ($i == 'delhi') {
            echo '<div class="container"> <a href="book1.php?destination=delhi">
            <div class="card">
                <img src="./images/delhi.png" alt="Destination 10">
                <div class="card-content">
                    <h3>Delhi</h3>
                    <p>With its flavourful street food, flea markets, monuments from different eras, throbbing
                        nightlife,
                        sprawling parks, posh
                        colonies, old quarters, exclusive clubs and places of worship- the colouful metropolis of Delhi
                        is a
                        glorious blend of
                        diverse cultures, languages and faiths.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'mysuru') {
            echo '<div class="container"> <a href="book1.php?destination=mysuru">
            <div class="card">
                <img src="./images/mysuru.jpeg" alt="Destination 2">
                <div class="card-content">
                    <h3>Mysuru</h3>
                    <p>Mysuru, often referred to as the cultural capital of Karnataka, is renowned for its
                        majestic Mysore Palace and vibrant Dasara festival, showcasing a rich blend of history and tradition
                        against the backdrop of scenic landscapes.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'mumbai') {
            echo '<div class="container"> <a href="book1.php?destination=mumbai">
            <div class="card">
                <img src="./images/mumbai.png" alt="Destination 11">
                <div class="card-content">
                    <h3>Mumbai</h3>
                    <p>Speckled with Victorian buildings, lofty skyscrapers, the glamour of Bollywood, pulsating
                        nightlife
                        and romantic
                        beaches, the mega-city of Mumbai is a mecca for dreamers looking to make it big.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'hyderbad') {
            echo '<div class="container"><a href="book1.php?destination=hyderbad">
            <div class="card">
                <img src="./images/hyd.png" alt="Destination 12">
                <div class="card-content">
                    <h3>Hyderbad</h3>
                    <p>Discover the regal charm of Hyderabad, where historic palaces meet modern innovation, creating a
                        city
                        of timeless
                        beauty.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'kolkata') {
            echo '<div class="container"> <a href="book1.php?destination=kolkata">
            <div class="card">
                <img src="./images/kolkata.png" alt="Destination 13">
                <div class="card-content">
                    <h3>Kolkata</h3>
                    <p>Immerse yourself in the rich cultural tapestry of Kolkata, where history and modernity coalesce,
                        creating a city known
                        for its intellectual pursuits, artistic expressions, and delectable culinary delights.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'jammu kashmir') {
            echo '<div class="container"><a href="book1.php?destination=jammu kashmir">
            <div class="card">
                <img src="./images/jammu.png" alt="Destination 14">
                <div class="card-content">
                    <h3>Jammu and Kashmir</h3>
                    <p>A dreamy honeymoon awaits you at Srinagar. You will love sightseeing and the lively festivals.
                        Dont
                        forget to sample the delicious cuisines at Srinagar.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'rajasthan') {
            echo '<div class="container">  <a href="book1.php?destination=rajasthan">
            <div class="card">
                <img src="./images/rajasthan.png" alt="Destination 15">
                <div class="card-content">
                    <h3>Rajasthan</h3>
                    <p>Explore the timeless beauty of Rajasthan, where history and culture weave a vibrant tapestry in
                        the
                        golden sands and
                        magnificent palaces.
                    </p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'kasi') {
            echo '<div class="container"><a href="book1.php?destination=kasi">
            <div class="card">
                <img src="./images/kasi.png" alt="Destination 16">
                <div class="card-content">
                    <h3>Kasi</h3>
                    <p>Kasi, also known as Varanasi or Banaras, is a sacred city on the banks of the Ganges River in
                        India,
                        renowned for its
                        spiritual significance and vibrant cultural heritage.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'banglore') {
            echo '<div class="container"> <a href="book1.php?destination=banglore">
            <div class="card">
                <img src="./images/ban.png" alt="Destination 17">
                <div class="card-content">
                    <h3>Banglore</h3>
                    <p>Bangalore, also known as the "Silicon Valley of India," boasts a perfect blend of modernity and
                        green
                        spaces, offering a
                        vibrant tech hub amidst lush parks and gardens.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'sikkim') {
            echo '<div class="container"> <a href="book1.php?destination=sikkim">
            <div class="card">
                <img src="./images/sikkim.png" alt="Destination 18">
                <div class="card-content">
                    <h3>Sikkim</h3>
                    <p>Discover the breathtaking beauty of Sikkim with its pristine landscapes, majestic mountains, and
                        vibrant culture, making
                        it a paradise for nature lovers.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'kanyakumari') {
            echo '<div class="container"> <a href="book1.php?destination=kanyakumari">
            <div class="card">
                <img src="./images/kanyakumari.png" alt="Destination 19">
                <div class="card-content">
                    <h3>Kanyakumari</h3>
                    <p>Experience the breathtaking beauty of Kanyakumari, where the Indian Ocean, Bay of Bengal, and
                        Arabian
                        Sea converge,
                        offering mesmerizing sunrise and sunset views at the southernmost tip of India.</p>
                </div>
            </div>
        </a></div>';
        }  if ($i == 'tirupati') {
            echo '<div class="container"><a href="book1.php?destination=tirupati">
            <div class="card">
                <img src="./images/tirupati.png" alt="Destination 20">
                <div class="card-content">
                    <h3>Tirupati</h3>
                    <p>Tirupati, a spiritual haven nestled in the hills of Andhra Pradesh, is renowned for the sacred
                        Tirumala Venkateswara
                        Temple, drawing millions of pilgrims annually.</p>
                </div>
            </div>
        </a></div>';
        
    }
}
    ?>

</body>

</html>