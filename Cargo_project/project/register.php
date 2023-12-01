<?php
include "connection.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="logof.png">
    <link rel="stylesheet" href="register.css">
    <script>
        function valemail() {

            var email = document.getElementById("gmail").value;
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email) && email.length > 0) {
                document.getElementById("val1").innerHTML = 'Please enter valid gemail';
            } else {
                document.getElementById("val1").innerHTML = '';
            }
        }

        function valpass() {
            var pwd = document.getElementById("pass").value;
            var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
            if (!pwd_expression.test(pwd) && pwd.length > 0) {

                document.getElementById("val2").innerHTML = 'Upper case, Lower case,character and Numeric letter are required';
            } else {
                document.getElementById("val2").innerHTML = '';
            }
        }

        function valstate() {
            var state = document.getElementById("stat").value;
            var alp = /^[A-Za-z]+$/;

            if (!alp.test(state) && state > 0) {
                document.getElementById("val3").innerHTML = 'Invalid Entry';
            } else {
                document.getElementById("val3").innerHTML = '';
            }
        }

        function valphone() {
            var phone = document.getElementById("phon").value;
            var number = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

            if (!number.test(phone) && phone > 0) {
                document.getElementById("val4").innerHTML = 'Enter valid phone number';
            } else {
                document.getElementById("val4").innerHTML = '';
            }
        }

        function valusername() {
    
            var uname = document.getElementById("usernam").value;
            var letters = /^[A-Za-z]+$/;
            if (!letters.test(uname) && uname > 0) {
                document.getElementById("val5").innerHTML = 'Enter valid username';
            } else {
                document.getElementById("val5").innerHTML = '';
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

                <a href="login.php">Login</a>
            

               
            </div>

        </div>
        <div class="log">
            <div class="pic">

                <img src="register.gif" alt="" height="350px" width="500px">
            </div>


            <div class="box">
                <form method="post">
                    <div class="logo">
                        <img src="logof.png" alt="" height="70px" width="170px">
                    </div>
                    <br><br>
                    <span id="val1" style="color: red;"></span><br>
                    <label for="">Enter your E-mail Id</label><br>
                    <input type="email" placeholder="" id="gmail" name="mailid" autocomplete="off" onkeyup="valemail()"> <br>
                    <span id="val5" style="color: red;"></span><br>
                    <label for="">Enter your Username</label><br>
                    <input type="text" placeholder="" id="usernam" name="username" autocomplete="off" onkeyup="valusername()"> <br>
                    <span id="val2" style="color: red;"></span><br>
                    <label for="">Enter your Password</label><br>
                    <input type="password" placeholder="" id="pass" name="passw" onkeyup="valpass()"> <br>
                    <span id="val3" style="color: red;"></span><br>
                    <label for="">Enter your State</label><br>
                    <input type="text" placeholder="" id="stat" name="st" onkeyup="valstate()"> <br>
                    <span id="val4" style="color: red;"></span><br>
                    <label for="">Enter your Phone Number</label><br>
                    <input type="tel" placeholder="" id="phon" name="phne" onkeyup="valphone()"> <br>
                    <div class="subm">

                        <input type="submit" value="Register now" name="subm"><br>

                    </div>
                    <hr><br>



                </form>

            </div>

        </div>


        <br>
    </div>
    <?php


    if (isset($_POST['subm'])) {
        $m = $_POST['mailid'];
        $unm=$_POST['username'];
        $p = $_POST['passw'];
        $s = $_POST['st'];
        $ph = $_POST['phne'];

        $sql = "INSERT INTO `register`(`Email_Id`,`username`, `Password`, `State`, `Phone`) VALUES ('$m','$unm','$p','$s','$ph')";
        $log_check_sql = mysqli_query($db, $sql);

        echo "<script>document.location.href='login.php';</script>";
    }
    ?>
</body>

</html>