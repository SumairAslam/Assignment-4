<?php

function nav_bar(){
    echo "
                <div class=\"w3-bar w3-black fixed-top\">
        <a href=\"Assignment2.php\" class=\"w3-bar-item w3-button w3-mobile\">Home</a>
        <a href=\"contact.php\" class=\"w3-bar-item w3-button w3-mobile\">Conatct Us</a>
        <a href=\"about.php\" class=\"w3-bar-item w3-button w3-mobile\">About Us</a>
        <a href=\"login.php\" class=\"w3-bar-item w3-button w3-mobile\">Log In</a>
        <a href=\"registration.php\" class=\"w3-bar-item w3-button w3-mobile\">Registration</a>

        <input type=\"search\" class=\" w3-bar-item w3-button w3-mobile card  \"
               id=\"search-bar\" name=\"search\"
             placeholder=\"Find Mobile Phones, Laptops, and more..\" onkeyup=\"checkSearch(this.value)\">

        <div class=\"\">
            <button class=\"w3-bar-item w3-button w3-mobile btn btn-outline-secondary btn-sm \" type=\"submit\"><i class=\"fas fa-search\"></i>

            </button>
        </div>

    </div>
        ";
}

function nav_bar2(){
    echo "
                <div class=\"w3-bar w3-black fixed-top\">
        <a href=\"Assignment2.php\" class=\"w3-bar-item w3-button w3-mobile\">Home</a>
        <a href=\"contact.php\" class=\"w3-bar-item w3-button w3-mobile\">Conatct Us</a>
        <a href=\"about.php\" class=\"w3-bar-item w3-button w3-mobile\">About Us</a>
        <a href=\"login.php\" class=\"w3-bar-item w3-button w3-mobile\">Log In</a>
        <a href=\"registration.php\" class=\"w3-bar-item w3-button w3-mobile\">Registration</a>

    </div>
        ";
}
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 6/28/2019
 * Time: 2:06 AM
 */