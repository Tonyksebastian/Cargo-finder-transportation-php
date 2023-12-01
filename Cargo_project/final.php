<?php
include("connection.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
    <link rel="stylesheet" href="final.css">
</head>

<body>
    <style>
        .flex {

            display: flex;
            width: 50%;
            justify-content: space-around;

        }
        button{
            width: 100px;
            height: 30px;
            background-color: brown;
            border-radius: 15px;
            color: white;
        }

    </style>
    <div class="page-1">

        <div class="navbar">

            <div class="logo">
                <img src="logof.png" alt="" height="70px" width="170px">
            </div>
            <div class="menu">

                <a href="home.php">Home</a>
                <a href="costcalculator.php">Cost Calculator</a>

            </div>

        </div>

        <div class="freights">
            <?php

            $sql = "SELECT * FROM freights";
            $result = mysqli_query($db, $sql);

            ?>


            <?php

            while ($row = mysqli_fetch_assoc($result)) {  ?>


                <div class="flex">

                    

                    <p><?php echo $row['pickup'];  ?></p>
                    <p><?php echo $row['destination'];  ?></p>
                    <p><?php echo $row['type'];  ?></p>
                    <p><?php echo $row['distance'];  ?></p>
                    
                    <a href="Travel.php?book_id=<?php echo $row['id']; ?>"><button class="">Book here</button></a>

                    <br><br><br>
                </div>

            <?php  }  ?>


        </div>
</body>

</html>