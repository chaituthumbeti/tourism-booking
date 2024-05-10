<?php
$login = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connection.php');
    $ausername = $_POST['username'];
    $apassword = $_POST['password'];
    $sql = "Select * from admin where ausername='$ausername' and apassword='$apassword' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $login = 1;
            session_start();
            $_SESSION['ausername'] = $ausername;
            header('location:admin.php');
        } else {
            $invalid = 1;
        }
    } else
        die(mysqli_error($conn));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Admin Log in</title>
</head>

<body>
<img src="./images/loginbg.jpg" alt="bgimage" width="100%">

    <div class="login-container">
        <div class="nav-bar">
            <div class="popup">
                <div class="form">
                    <h2 class="log-head">Admin Log In</h2>
                    <form action="admin-log.php" method="post">
                        <div class="elements">
                            <div class="name-form-element">
                                <label class="name-label" for="username">User name</label>
                                <input type="text" id="username" name="username" placeholder="Enter username">
                            </div>

                            <div class="pass-form-element">
                                <label class="pass-label" for="password">Password</label>
                                <input class="pass-inp" type="password" id="password" name="password" placeholder="Enter password">
                            </div>

                            <div class="form-element">
                                <button display="" class="button">Sign in &#8594;</button>
                            </div>

                            <div class="new">
                                <a class="new-link" href="login.php"> &larr; back</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>