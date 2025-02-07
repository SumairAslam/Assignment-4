<!DOCTYPE html>
<?php
require "server/nav.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="home shopping,good online shopping websites,favorite online shopping sites,online shopping websites,signin in the online website">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("https://www.ke.com.pk/assets/uploads/2016/06/Contact-us.jpg");
            filter: blur(8px);
            -webkit-filter: blur(5px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-text {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
            color: white;
            font-weight: bold;
            border: 3px solid #f1f1f1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 90%;
            height:auto;
            padding: 20px;
            text-align: center;
        }
        @media screen and (max-width: 500px) {
            .log {
                background-color: rgb(0, 0, 0); /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 65%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 90%;
                height:auto;
                padding: 20px;
                text-align: center;

            }
        }

    </style>

</head>
<body>

<!--    Navigation bar-->
<?php nav_bar2(); ?>


<div class="bg"></div>
<div class="bg-text log">
    <h2 style="font-size:5vw;">Contact Us</h2>
    <h1 style="font-size:2vw;">Questions, comments or special requests? Get in touch today, we’re happy to help.</h1>
    <p style="font-size:2vw;">Avenue 1, Khayaban-e-Jinnah، Road، Johar Town, Lahore <br>

        Sumair&Asad@ucp.edu.pk<br>

        03xx-xxxxxxx</p>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.8097457904114!2d74.26604291462898!3d31.446904257913538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1556256596368!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="container">
    <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required
        pattern="[A-Z][a-z]+">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required
               pattern="[A-Z][a-z]+">

        <label for="country">Country</label>
        <select id="country" name="country">
            <option value="pakistan">Pakistan</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>