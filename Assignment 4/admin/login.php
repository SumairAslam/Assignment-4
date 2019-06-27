<?php
session_start();
require_once 'db_connection.php';
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:index.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <title>Admin Login</title>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {
            /* The image used */
            background-image: url(https://mypropertytracker.com/build/assets/lessons/admin.jpg);

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(5px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Position text in the middle of the page/image */
        .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: whitesmoke;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 80%;
            padding: 20px;
            text-align: center;
        }



        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }

        @media screen and (max-width: 500px) {
            .log {
                background-color: rgb(0, 0, 0); /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4); /* Black w/opacity/see-through */
                color: black;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 90%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 90%;
                padding: 20px;
                text-align: center;
            }
        }
    </style>
</head>
<body class="text-center">

<div class="w3-bar w3-black fixed-top">
    <a href="http://localhost/Assignment%204/Assignment2.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="http://localhost/Assignment%204/contact.php" class="w3-bar-item w3-button w3-mobile">Conatct Us</a>
    <a href="http://localhost/Assignment%204/about.php" class="w3-bar-item w3-button w3-mobile">About Us</a>
    <a href="http://localhost/Assignment%204/login.php" class="w3-bar-item w3-button w3-mobile">Log In</a>
    <a href="http://localhost/Assignment%204/registration.php" class="w3-bar-item w3-button w3-mobile">Registration</a>
</div>

    <form class="login_form bg-text log" action="login.php" method="post">
        <h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
        <h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
        <h3 class="m-3">Admin Login </h3>


        <div class="imgcontainer">
            <img src="Logo.png" alt="Avatar" class="avatar">
        </div>


        <div><?php echo $error_msg;?></div>

        <div class="container">

        <input type="text" id="user_email" name="user_email"
               value="<?php echo @$_COOKIE['user_email']?>" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" id="user_pass" name="user_pass"
               value="<?php echo @$_COOKIE['user_pass']?>" class="form-control" placeholder="Password" required><br>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        </div>
        <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">

    </form>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
    <div class="bg-image"></div>

</body>
</html>



