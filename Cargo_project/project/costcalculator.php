<?php

require_once('./connection.php');
if(!isset($_SESSION['userName']))
{
    header('Location:login.php');
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <link rel="icon" href="logof.png">
    <link rel="stylesheet" href="costcalculator.css">

    <script>

        document.querySelector(".box").style.display = "none";

        function calculate() {

           
            var start = document.getElementById("pickup-feild").value;
            var dest = document.getElementById("destination-feild").value;
            var dist = document.getElementById("distance-feild").value;

            //email id expression code
            var number = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            var letters = /^[A-Za-z]+$/;
            var filter = /^([a-zA-Z0-9_\ nj1\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var alp = /^[A-Za-z]+$/;
            if (start == '') {
                alert('Please enter your pickup');
                return false;
            }
            else if (!letters.test(start)) {
                alert('Invalid pickup entry');
                return false;
            }
            else if (dest == '') {
                alert('Please enter your destination');
                return false;
            }
            else if (!alp.test(dest)) {
                alert('Invalid destination entry');
                return false;
            }

            else if (dist == '') {
                alert('Please enter your distance');
                return false;
            }
            else 
            {
               
                document.querySelector('.box').style.display = "block";

                var f1 = document.getElementById("productselection");
                var field1 = f1.options[f1.selectedIndex].value;
                var distance = document.getElementById('distance-feild').value;
                var mileage = 0;
                var rent = 0;
                var result = 0;
                var fuel = parseInt(document.getElementById('fuel').value);
                if (field1 == 'pickup') {
                    mileage = 13;
                    rent = 150;
                } else if (field1 == 'mini') {
                    mileage = 7;
                    rent = 250;
                } else if (field1 == 'container') {
                    mileage = 4;
                    rent = 350;
                } else {
                    mileage = 3;
                    rent = 450;
                }
               
                result = rent + (distance / mileage) * fuel;
                document.getElementById('pickup').innerHTML = document.getElementById('pickup-feild').value;
                document.getElementById('destination').innerHTML = document.getElementById('destination-feild').value;
                document.getElementById('distance').innerHTML = distance;
                document.getElementById('cost').innerHTML = '&#8377 ' + Math.floor(result);
                return true;

            }


        }
    </script>

</head>

<body>
    <div class="page-1">

        <div class="navbar">

            <div class="logo">
                <img src="logof.png" alt="" height="70px" width="170px">
            </div>
            <div class="menu">

                <a href="home.php">Home</a>
                <a href="login.php">Login</a>

            </div>

        </div>
        <div class="side">
            <div class="pic">

                <form>

                    <br><br>
                    <label for="">Enter your pickup</label><br>
                    <input type="text" id="pickup-feild"><br>
                    <label for="">Enter your destination</label><br>
                    <input type="text" id="destination-feild"><br>
                    <label for="">Truck type</label><br>
                    <select name="" id="productselection">
                        <option value="pickup" id="a">ACE / DOST / PICKUP (1.5 TON)</option>
                        <option value="mini" id="b">TATA 407 / EICHER 14FT (4 TON) </option>
                        <option value="container" id="c">20FT CONTAINER (6.5 TON)</option>
                        <option value="taurus" id="d">TAURUS (18 TON) N.P</option>
                    </select><br>
                    <label for="">Enter the Distance(KM)</label><br>
                    <input type="number" id="distance-feild"> <br>
                    <label for="">Enter the fuel price</label><br>
                    <input type="number" id="fuel">
                    <div class="subm">
                        <input type="button" value="Calculate" onclick="calculate()">
                    </div>
                    <hr><br>

                </form>
            </div>


            <div class="box">
                <br><br>
                <h3>Approx Travel Cost</h3>
                <br>
                <table width="100%" class="calc-tbl">
                    <tr>
                        <td>Pickup</td>
                        <td id="pickup"></td>
                    </tr>
                    <tr>
                        <td>Destination</td>
                        <td id="destination"></td>
                    </tr>
                    <tr>
                        <td>Distance</td>
                        <td id="distance"></td>
                    </tr>
                    <hr>
                    <tr>
                        <td>
                            <h3>Total cost</h3>
                        </td>
                        <td>
                            <h3 id="cost"></h3>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
        </div>

    </div>
    
</body>

</html>