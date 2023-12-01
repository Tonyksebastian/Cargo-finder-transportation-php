<?php
include "connection.php";
if(!(isset($_SESSION['EmailId']) and isset($_SESSION['userName']))){
    header('Location: login.php');
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck hut</title>
    <link rel="icon" href="logof.png">
    <link rel="stylesheet" href="home.css">

</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // $(".logval").hide();
        $(".list a").hover(function() {
            $(".li").toggle();
        });
        // $(".seccion").hover(function() {
        //     $(".logval").show();
        
        // });
        // $(".seccion").mouseleave(function() {
        //     $(".logval").hide();
        
        // });
    });
</script>
<script>
    function check() {

        var start = document.getElementById("pickup").value;
        var dest = document.getElementById("destini").value;

        //email id expression code
        var number = /^[0-9]^/;
        var alp = /^[A-Z]+[a-z]^/;
        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
        var letters = /^[A-Za-z]+$/;
        var filter = /^([a-zA-Z0-9_\ nj1\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (start == '') {


            alert('Please enter your pickup');
        } else if (!letters.test(start)) {
            alert('Invalid entry');
        } else if (dest == '') {
            alert('Please enter your destination');
        } else if (!letters.test(dest)) {
            alert('Invalid entry');
        }
    }
</script>


<body>

    <!-- page 1 -->
    <div class="page-1">

        <div class="navbar">

            <div class="logo">
                <img src="logof.png" alt="" height="70px" width="170px">
            </div>
            <div class="list">
                <a href="">Top cities</a>
            </div>

            <div class="li" hidden>
                <option value="">karnataka</option>
                <hr>
                <option value="">kerala</option>
                <hr>
                <option value="">Tamil Nadu</option>
                <hr>
                <option value="">Maharashtra</option>
                <hr>
                <option value="">Madhya pradesh</option>
                <hr>
                <option value="">Gujarath</option>
                <hr>
                <option value="">West bengal</option>
            </div>
            <div class="logval">
                <a href="logout.php" value="">Logout</a>
                <hr>
            </div>
            <div class="menu">

                <a href="home.php">Home</a>
                <a href="#pag-2">Our services</a>
                <a href="costcalculator.php">Cost Calculator</a>
                <a href="#pag-3">About</a>
                <!-- <a href="login.php">Login</a> -->
                <div class="seccion" class="logout">
                    <?php

                    if (!isset($_SESSION['userName'])) {


                        echo "
                        <a class='login' href='#'>Login</a>";
                    } else {

                        echo $_SESSION['userName'];
                    }


                    ?></div>

            </div>

        </div>

        <div class="title">
            <h2>
                <font color="red">Online Truck Booking Made Easy</font>
            </h2><br>
            <h4>One Stop Solution For all Transport Needs</font>
                </h3>
        </div>

        <div class="book">
            <a class="one" href="Booking.php">
                Book Here...
            </a>
        </div>
        <!-- <form action="Booking.html" method="post">
            <div class="main-btn">
                <div class="btn">
                    <i class="fa-solid fa-truck-pickup" id="icons"></i>
                    <input type="text" placeholder="Enter your Pickup location" name="pickup" id="pickup"><br>
                    <i class="fa-solid fa-location-dot" id="icons"></i>
                    <input type="text" placeholder="Enter your Destination" name="destini" id="destini">
                </div>
                <div class="subm">
                    <input type="submit" placeholder="Check" onclick="check()">
                </div>
            </div>
        </form> -->
    </div>

    <!-- page 2 -->

    <div class="page-2" id="pag-2">
        <div class="title">
            <h2>
                <font color="red">Our Services</font>
            </h2><br>
            <h3>
                <font color="white">What We Can Do For You</font>
            </h3>


        </div>
        <div class="container">
            <div class="box">

                <img src="EQ1.jpg" alt="" height="190px" width="240px"><br>
                <h2>Ecommerce-Retail</h2><br>

                <p>Shipment cost is what acquires a major part of your costs in eCommerce.</p>
            </div>

            <div class="box">

                <img src="roadway_delivery.webp" alt="" height="190px" width="240px">
                <h2>Document Courier</h2><br>
                <p>Send papers and documents directly to your client with our courier services specialised in legal and
                    accountancy sectors.</p>
            </div>

            <div class="box">

                <img src="various_cars_icons_6833173.webp" alt="" height="190px" width="240px">
                <h2>Full Truck Load</h2><br>
                <p>Full truckload, or FTL, is a shipping mode where one truck is responsible for a single shipment from
                    one point to another.</p>
            </div>

            <div class="box">

                <img src="road_shipping_truck.webp" alt="" height="190px" width="240px">
                <h2>Part Truck Load</h2><br>
                <p>

                    A part load describes goods which only fills a truck partially. In essence, the quantity of the
                    shipment is bigger than the Less Than Truckload (LTL) shipment.</p>
            </div>

        </div>


    </div>

    <!-- page 3 -->

    <div class="page-3" id="pag-3">
        <div class="title">
            <h2>
                <font color="red">About Us</font>
            </h2><br>
        </div>
        <div class="root">
            <div class="cont-1">
                <p><br>
                    Our aim is to provide hassle-free and streamlined solutions to make your online presence a
                    smooth ride.
                    It offers innovative one-stop shop of all logistics Services right from the automatic allocation
                    of the
                    courier to dispatch to last mile delivery of packages.
                    <br><br>
                    TransIn is a notable logistics and transportation service provider in the market with
                    knowledge and
                    experience of decades. Providing worldwide transportation, Quickdeal brings a huge difference
                    with a
                    cost-effective and high-quality service as its renowned feats. Customer satisfaction is one
                    thing we
                    excel in with everything else being simply done right and just.
                </p>
            </div>

        </div>
    </div>
    <div class="page-4">
        <div class="content">
            <div class="box2">

                <h2>
                    <font color="red">TransIn</font>
                </h2><br>

                <p>
                    TransIn is a tech-enabled logistics shipping platform where customers can book shipments through
                    multiple courier companies to save their time and money. <br><br>

                    Working Hours: <br>

                    24 hours<br>
                    <br>
                </p>
            </div>
            <div class="box2">

                <h2>
                    <font color="red">Information</font>
                </h2><br>

                <p>
                    Register A Complaint <br><br>
                    FAQ<br><br>
                    Career<br><br>
                    Blog<br><br>
                    Contact Us<br><br>
                    Terms & Conditions</p>
            </div>
            <div class="box2">

                <h2>
                    <font color="red">Get In Touch</font>
                </h2><br>

                <p>
                    501, 5th Floor IT Tower,<br>
                    Near Infopark kakkanadu 686564<br>
                    support@TransIn.com
                    +91-9315033113</p>
            </div>


        </div>
        <div class="patners">
            <h2 style="text-align: center;">
                <font color="red">Our Patners</font>
            </h2>
            <marquee behavior="scroll" direction="left">
                <img src="dhl.png" alt="" height="190px" width="250px">
                <img src="delhivery.png" alt="" height="190px" width="250px">
                <img src="mahindra.png" alt="" height="190px" width="250px">
                <img src="volvo.webp" alt="" height="190px" width="250px">
                <img src="apollo-tyres--600.png" alt="" height="190px" width="250px">
                <img src="tata-logo-png.png" alt="" height="190px" width="250px">
            </marquee>
            <hr>
        </div>
    </div>
    </div>
    <div class="footer">
        <div class="copy">
            Copyright © 2022 TransIn. All rights reserved.
        </div>
        <div class="wrapper">

            <i class="fab fa-facebook-f"></i>

            <i class="fab fa-twitter"></i>

            <i class="fab fa-instagram"></i>

            <i class="fab fa-github"></i>

            <i class="fab fa-youtube"></i>

        </div>
    </div>
    </div>
</body>

</html>