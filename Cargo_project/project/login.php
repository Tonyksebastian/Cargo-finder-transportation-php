<?php
include "connection.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="logof.png">
    <link rel="stylesheet" href="login.css">
</head>

<script>
    var email = document.getElementById("gmail").value;
    var pwd = document.getElementById("pass").value;

    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number = /^[0-9]^/;
    var alp = /^[A-Z]+[a-z]^/;

    function valemail() {
        var email = document.getElementById("gmail").value;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email) && email.length > 0) {
            document.getElementById("val1").innerHTML = 'Please enter valid gmail';
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

    // document.getElementById("alert").innerHTML="No account Exist..";
</script>

<body>
    <div class="page-1">

        <div class="navbar">

            <div class="logo">
                <img src="logof.png" alt="" height="70px" width="170px">
            </div>
            <div class="menu">

                <!-- <a href="home.php">Home</a> -->                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
                <!-- <a href="costcalculator.html">Cost Calculator</a> -->
            </div>

        </div>
        <div class="log">
            <div class="pic">

                <img src="who.gif" alt="" srcset="">
            </div>


            <div class="box">
                <form method="POST">
                    <div class="logo">
                        <img src="logof.png" alt="" height="70px" width="170px">
                    </div>
                    <br><br>
                    <span id="val1"></span><br>
                    <label for="">Enter your E-mail Id</label><br>
                    <input type="email" value="" placeholder="" id="gmail" name="gm" autocomplete="off" onkeydown="valemail()"> <br>
                    <span id="val2"></span><br>
                    <label for="">Enter your Password</label><br>
                    <input type="password" value="" placeholder="" id="pass" name="ps" onkeydown="valpass()"><br>
                    <!-- <label for="">Keep me signed in </label> -->
                    <div class="subm">
                        <span id="alert"></span>
                        <input type="submit" placeholder="Check" name="sub">
                    </div>
                    <hr><br>
                    <span>Don't have an account <a href="register.php">
                            <font style="color: brown;">Sign up here</font>
                        </a></span>



                </form>

            </div>

        </div>

        <br>
    </div>

    <?php

    if (isset($_POST['sub'])) {
        if (!empty($_POST['gm']) && !empty($_POST['ps'])) {
            $log_username = $_POST['gm'];
            $log_password = $_POST['ps'];
            
            $log_check = "SELECT * FROM `register` WHERE Email_Id='$log_username' AND Password='$log_password'";
            $log_check_sql = mysqli_query($db, $log_check);
            if (mysqli_num_rows($log_check_sql) === 1) {
                $row = mysqli_fetch_assoc($log_check_sql);
                $_SESSION['EmailId'] = $row['Email_Id'];
                $_SESSION['userName'] = $row['username'];
              
                if ($log_username === $row["Email_Id"]) {
                  
                    header('Location: Booking.php');
                }
              
            }
        }
    }
    ?>
</body>

</html>