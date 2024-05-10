<?php
$user = 0;
$success = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connection.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql1 = "insert into `userinfo` (username,email,password,mobile) values ('$username','$email','$password',$mobile) ";
    $res = mysqli_query($conn, $sql1);
    if ($res) {
        $success = 1;
        session_start();
        $_SESSION['username'] = $username;
        header('location:home.php');
    } else
        die(mysqli_error($conn));
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Sign Up</title>
</head>

<body>
<img src="./images/loginbg.jpg" alt="bgimage" width="100%">
    <div class="popup">
        <div class="form">
            <h2 class="log-head">Register</h2>
            <form action="register.php" method="post">
                <div class="elements">

                    <div class="name-form-element">
                        <label class="name-label" for="name">Name</label>
                        <input type="text" id='name' name="username" placeholder="Enter your name">
                    </div>

                    <div class="email-form-element">
                        <label class="email-label" for="email">Email</label>
                        <input type="text" id='email' name="email" placeholder="Enter your email">
                    </div>

                    <div class="number-form-element">
                        <label class="number-label" for="number">Mobile number</label>
                        <input type="tel" maxlength="10" id='number' name="mobile" placeholder="Enter your mobile number">
                    </div>

                    <div class="pass-form-element">
                        <label class="pass-label" for="password">Password</label>
                        <input class="pass-inp" id='password' type="password" name="password" placeholder="Enter password">
                    </div>

                    <div class="form-element">
                        <button type="submit" class="button">Sign Up</button>
                    </div>

                    <a class="back-link" href="login.php"> &larr; Back</a>

                </div>
            </form>
        </div>
    </div>
</body>

</html>