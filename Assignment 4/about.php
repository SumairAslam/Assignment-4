<!DOCTYPE html>
<?php
require "server/nav.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="favorite online shopping sites,online shopping websites,favorite online shopping sites,online shopping websites,signin in the online website">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>About</title>

    <style>

        /* Float four columns side by side */
        .column {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,1);
            float: left;
            width: 50%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }


        * {
            box-sizing: border-box;
        }
        .menu {
            float: left;
            width: 20%;
        }
        .menuitem {
            padding: 8px;
            margin-top: 7px;
            border-bottom: 1px solid #f1f1f1;
        }
        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
            overflow: hidden;
        }
        .right {
            background-color: lightblue;
            float: left;
            width: 20%;
            padding: 10px 15px;
            margin-top: 7px;
        }

        @media only screen and (max-width:800px) {
            /* For tablets: */
            .main {
                width: 80%;
                padding: 0;
            }
            .right {
                width: 100%;
            }
        }
        @media only screen and (max-width:500px) {
            /* For mobile phones: */
            .menu, .main, .right {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!--<div class="element">-->
    <!--<ul>-->
        <!--<li><a class="active" href="Assignment2.html">Home</a></li>-->
        <!--<li><a href="contact.html">Contact</a></li>-->
        <!--<li><a href="about.php">About</a></li>-->
        <!--<li><a href="login.html">Login</a></li>-->
        <!--<li><a href="registration.html">Registration</a></li>-->

    <!--</ul>-->
<!--</div>-->

<!--    Navigation bar-->
<?php nav_bar2(); ?>

<div>
<div class="col-sm-12 col-md-12 col-lg-12">
<img height=328 width="100%" src="https://freshome.com/wp-content/uploads/2012/09/Design-tricks-via-Triangle-Honeymoom-bright-LR.jpg">
</div>

    <div class="style col-sm-12 col-md-12 col-lg-12">
        <h1>Learn more About us</h1>
        <p>The Home Experts</p>
        <span>At Shop Online, we believe that your home should reflect your own personal style. Each corner of your life should be eye-catching and unique, just like you. Shop Online is a home decor store, dedicated to helping our customers discover their own design personality. Browse through our wide selection today to find just what you have been searching for.</span>
    <span>Our company offers the perfect opportunity for online shoppers who live inside Pakistan, but would like to shop from the outside either through online stores or auctions like EBAY. You can ship your packages to our address and once we receive them, we can ship them to you by using our competitive shipping rates.</span>
    </div>
</div>

</div>
<h2 class="contact">Admins & Designers of ShopOnline.com</h2>

<div class="row">
    <div class="column col-sm-12 col-md-6 col-lg-6">
        <img src="mypic.jpg" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><a href="https://www.facebook.com/sumair.aslam.3">Sumair Aslam</a></h4>
            <p>Software Engineer</p>
        </div>
    </div>

    <div class="column col-sm-12 col-md-6 col-lg-6">
        <img src="asad.jpg" alt="Avatar" style="width:80%">
        <div class="container">
            <h4><a href="https://www.facebook.com/asad.butt.944">Asad Butt</a></h4>
            <p>Software Engineer</p>
        </div>
    </div>
</div>
<!--<div class="image">-->
    <!--<img height="50%" width="50%" src="mypic.jpg">-->
    <!--<span class="image">Muhammad Sumair Aslam</span>-->
<!--</div>-->

</body>
</html>