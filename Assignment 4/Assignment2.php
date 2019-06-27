<!DOCTYPE html>
<?php
require "server/functions.php";
require "server/nav.php";

?>
<html lang="en">
<head>
    <meta name="keywords" content="best ecommerce,online shoping for home,best online shopping websites,favorite online shopping sites,online shopping websites,signin in the online website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <meta charset="UTF-8">
    <title>HomePage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
        function checkSearch(search) {
            var xmlhttp  = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if(this.readyState === 4 && this.status === 200){
                    document.getElementById("proz").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","server/functions.php?search=" + search);
            xmlhttp.send();
        }
    </script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            top: 102%;
            margin: 0 -5px;
        }

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
                /*position: absolute;*/
                /*bottom: 20px;*/
            }
            .row{
                position: absolute;
                width: 100%;
                top: 100%;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .rowp{
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

    </style>

</head>
<body>
<div>
<video autoplay muted loop id="myVideo">
    <source src="Home - Shop Online.mp4" type="video/mp4">
</video>
</div>
<div class="element">
<!--    Navigation bar-->
    <?php nav_bar(); ?>
</div>

 <!--Optional: some overlay text to describe the video-->
<div class="content">
    <h1 style="font-size:5vw;">Welcome To Shop Online</h1>
    <p><h2 style="font-size:3vw;">Energize Your Decor</h2></p>
    <p><h3 style="font-size:2vw;">At Shop Online, we aim to help people discover those special finds to create a home that they truly love. Browse our selection online to see </h3></p>
        <p><h3 style="font-size:2vw;">what’s in stock, and find just what you have been looking for.</h3></p>
</div>

<!--<div class="row box">-->
<!--    <div class="column">-->
<!--        <div class="card">-->
<!--            <h3>Beds</h3>-->
<!--            <i class="fas fa-bed" style="font-size:48px;"></i>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="column">-->
<!--        <div class="card">-->
<!--            <h3>Couches</h3>-->
<!--            <i class="fas fa-couch"  style="font-size:48px;"></i>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="column">-->
<!--        <div class="card">-->
<!--            <h3>Chairs</h3>-->
<!--            <i class="fas fa-chair" style="font-size:48px;"></i>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="column">-->
<!--        <div class="card">-->
<!--            <h3>Smart TV's</h3>-->
<!--            <i class="fas fa-tv" style="font-size:48px;"></i>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="column">-->
<!--        <div class="card">-->
<!--            <h3>Smart TV's</h3>-->
<!--            <i class="fas fa-tv" style="font-size:48px;"></i>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->


<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-sitemap"></i>
                    Categories
                </a>
                <ul class="collapse show list-unstyled" id="homeSubmenu">
                    <?php getCats(); ?>
                </ul>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-briefcase"></i>
                    Brands
                </a>
                <ul class="collapse show list-unstyled" id="pageSubmenu">
                    <?php getBrands(); ?>
                </ul>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-question"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-paper-plane"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">
        <div class="rowp" id="proz">

            <?php getPro(); ?>
        </div>
    </article>


</div>

</body>
</html>