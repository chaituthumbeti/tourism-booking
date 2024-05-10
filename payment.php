<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/payment.css">
    <title>Payment Options</title>
</head>

<body>
   <?php
     include('connection.php');
     $sql="INSERT into payment (payid,uniqueid,bid,price,packid) values ('1','5','2','30000','4')";
     $result=mysqli_query($conn,$sql);
   ?>
    <div class="container">
        <div class="payment-options">
            <div class="payment-option" onclick="showCreditCard()">
                <img src="./images/credit.jpg" alt="Credit Card" class="payment-icon">
                <span class="payment-label">Credit Card</span>
            </div>
            <div class="payment-option" onclick="showGPay()">
                <img src="./images/gpay.jpg" alt="GPay" class="payment-icon">
                <span class="payment-label">GPay</span>
            </div>
            <div class="payment-option" onclick="showPhonePay()">
                <img src="./images/phonepe.jpg" alt="PhonePay" class="payment-icon">
                <span class="payment-label">PhonePay</span>
            </div>
            <div class="payment-option" onclick="showPaytm()">
                <img src="./images/paytm.jpg" alt="Paytm" class="payment-icon">
                <span class="payment-label">Paytm</span>
            </div>
        </div>
        <div class="payment-form" id="creditCardForm" style="display: none;">
            <form action="final.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <h2>Enter Card Details</h2>
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardName" name="cardName" required>
                <label for="expiryDate">Expiry Date:</label>
                <input type="date" id="expiryDate" name="expiryDate" required>
                <label for="cvc">CVC:</label>
                <input type="number" id="cvc" name="cvc" required>
                <button type="submit">Pay Now</button>
            </form>
        </div>
       
        <div class="payment-form" id="gpayForm" style="display: none;">
            <form action="final.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <h2>Enter GPay UPI ID</h2>
                <label for="gpayId">GPay UPI ID:</label>
                <input type="text" id="gpayId" name="gpayId" required>
                <button type="submit">Pay Now</button>
            </form>
        </div>
        <div class="payment-form" id="phonePayForm" style="display: none;">
            <form action="final.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
                <h2>Enter PhonePay UPI ID</h2>
                <label for="phonePayId">PhonePay UPI ID:</label>
                <input type="text" id="phonePayId" name="phonePayId" required>
                <button type="submit">Pay Now</button>
            </form>
        </div>
        <div class="payment-form" id="paytmForm" style="display: none;">
            <form action="final.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h2>Enter Paytm UPI ID</h2>
                <label for="paytmId">Paytm UPI ID:</label>
                <input type="text" id="paytmId" name="paytmId" required>
                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>

    <script>
        function showCreditCard() {
            hideAllForms();
            document.getElementById('creditCardForm').style.display = 'block';
        }

        function showGPay() {
            hideAllForms();
            document.getElementById('gpayForm').style.display = 'block';
        }

        function showPhonePay() {
            hideAllForms();
            document.getElementById('phonePayForm').style.display = 'block';
        }

        function showPaytm() {
            hideAllForms();
            document.getElementById('paytmForm').style.display = 'block';
        }

        function hideAllForms() {
            document.getElementById('creditCardForm').style.display = 'none';
            document.getElementById('gpayForm').style.display = 'none';
            document.getElementById('phonePayForm').style.display = 'none';
            document.getElementById('paytmForm').style.display = 'none';
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["cardNumber"])) {
            // Process credit card details
            // Your processing logic here for credit card
            echo "<script>alert('Credit Card Payment Processed!');</script>";
        } elseif (isset($_POST["gpayId"])) {
            // Process GPay UPI ID
            // Your processing logic here for GPay UPI ID
            echo "<script>alert('GPay Payment Processed!');</script>";
        } elseif (isset($_POST["phonePayId"])) {
            // Process PhonePay UPI ID
            // Your processing logic here for PhonePay UPI ID
            echo "<script>alert('PhonePay Payment Processed!');</script>";
        } elseif (isset($_POST["paytmId"])) {
            // Process Paytm UPI ID
            // Your processing logic here for Paytm UPI ID
            echo "<script>alert('Paytm Payment Processed!');</script>";
        }
    }
    ?>
</body>

</html>