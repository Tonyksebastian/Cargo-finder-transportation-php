<?php

require_once('./connection.php');
if(!isset($_SESSION['userName']))
{
    header('location:login.php');
}

    
       if(isset($_POST['sub'])){

          $truckName = $_POST['truck'];
           
          if(empty($truckName)){

             echo "Insert First";

          }else{

              $_SESSION['truckName'] = $truckName;

          }


       }

        $name=$_SESSION['userName'];
        $sql = "SELECT * FROM `register` WHERE userName='$name'";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result))
        {
            while($rows=mysqli_fetch_assoc($result))
            {
                $_SESSION['user_id']=$rows['User_Id'];
                $_SESSION['user_name']=$rows['username'];
            }
        }
    

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="icon" href="logof.png">
    <link rel="stylesheet" href="Booking.css">
</head>
<!-- <script>
                var f1 = document.getElementById("truck");
                var field1 = f1.options[f1.selectedIndex].value;

</script> -->

<body>
    <div class="page-1">

        <div class="navbar">

            <div class="logo">
                <img src="logofn.png" alt="" height="70px" width="170px">
            </div>
            <div class="menu">

                <a href="home.php">Home</a>
                
                <a href="login.php">Login</a>




                <a href="costcalculator.php">Cost Calculator</a>

                <div class="seccion" style="margin-top: 10px;">
                    <?php

                    if (!isset($_SESSION['userName'])) {


                        echo "<a href='#'>Login</a>";
                    } else {

                        echo $_SESSION['userName'];
                    }


                    ?></div>
                    
            </div>

        </div>
        <div class="log">
            <div class="box">
                <form action="final.php" method="post">
                    <div class="logo">
                        <img src="logof.png" alt="" height="70px" width="170px">
                    </div>
                    
                    <br><br>
                    <label for="">Truck type</label><br>
                    <select name="truck" id="" required>
                        <option value=""></option>
                        <option value="" name="s">ACE / DOST / PICKUP (1.5 TON)</option>
                        <option value="" name="m">TATA 407 / EICHER 14FT (4 TON) </option>
                        <option value="" name="l">20FT CONTAINER (6.5 TON)</option>
                        <option value="" name="xl">TAURUS (18 TON) N.P</option>

                    </select>
                    <br><br>
                    <!-- <label for="">Choose your good categary</label><br>
                    <select name="" id="">
                        <option value="">Industrial Machinery</option>
                        <option value="">Fresh Fruits / Vegetables (N.P)</option>
                        <option value="">Electronic Goods / Home Appliances</option>
                        <option value="">  Textile / Garments</option>
                    </select>
                    <br><br> -->
                    <label for="">Select weight(in tons)</label><br>
                    <select name="" id="" required>
                        <option value=""></option>
                        <option value="">1 TONS</option>
                        <option value="">5 TONS</option>
                        <option value="">10 TONS</option>
                        <option value="">20 TONS</option>
                    </select>
                    <br>
                    <div class="subm">
                        <input type="submit" name="sub" placeholder="Check">
                    </div><br>
                    <hr><br>
                </form>

            </div>

        </div>
        
        <br>
    </div>
</body>

</html>