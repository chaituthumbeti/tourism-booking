<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/book.css">
    <title>Booking</title>
</head>

<body>
    <section class="booking-form">
        <h1 class="heading-title">Book Your Trip  
                                <?php
                                if (isset($_GET['destination'])) {
                                    $destination = $_GET['destination'];
                                    session_start();
                                    $_SESSION['destination']=$destination;
                                    echo "<h2> $destination</h2>";
                                }
                                
                                else {
                                    echo "Destination not provided";
                                }
                                ?></h1>
       
        <form action="bookconfirm.php" method="post" class="book-form">
            <div class="flex">
<div class="inputBoxes">
    <div class="inputBox">
        <span>Name:</span>
        <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div class="inputBox">
        <span>Email:</span>
        <input type="email" placeholder="Enter your email" name="email">
    </div>
    <div class="inputBox">
        <span>Phone:</span>
        <input type="tel" max=10 placeholder="Enter your number" name="phone">
    </div>
    <div class="inputBox">
        <span>No.of Tickets</span>
        <input type="number" max=10 placeholder="Enter the number" name='tickets' >
        
    </div>
</div>
    <div class="inputBox">
    <span>Arrival:</span>
    <input type="date" name="arrivals">
    </div>  
    </div>
            <button type="submit" class="btn">Proceed to payment</button>
        </form>
    </section>
</body>

</html>