<!DOCTYPE html>
<?php
require "server/nav.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="favorite online shopping sites,online shopping websites,signin in the online website ">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
            background-image: url(https://www.itsecurityguru.org/wp-content/uploads/2018/07/Fotolia_60822416_XL.jpg);

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
            color: black;
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

<body>

<!--    Navigation bar-->
<?php nav_bar2(); ?>

<form action="/action_page.php" class="bg-text log">
    <h2>Login Form</h2>

    <div class="imgcontainer">
        <img src="Logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

        <label for="psw"><b>Password</b></label>
        <input type="password"  placeholder="Enter Password" name="psw" required
               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" > <!--style="background-color:#f1f1f1"-->
        <span class="psw">Forgot <a href="forgot-password.php">password?</a></span>
        <!--<button type="button" class="cancelbtn">Cancel</button>-->
    </div>

    <div class="container" > <!--style="background-color:#f1f1f1"-->
        <span class="psw">Admin <a href="admin/login.php">Login?</a></span>
        <!--<button type="button" class="cancelbtn">Cancel</button>-->
    </div>
</form>
<div class="bg-image"></div>
</body>
</html>