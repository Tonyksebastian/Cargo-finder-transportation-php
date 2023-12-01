<?php
   include("connection.php");

   $name = $_SESSION['userName'];
   $booking_id = $_SESSION['bookid'];

   $sql= "SELECT * FROM register where username='$name'";
   $result=mysqli_query($db,$sql);

   $booksql= "SELECT * FROM freights where id='$booking_id'";
   $bookresult=mysqli_query($db,$booksql);

   while ($row = mysqli_fetch_assoc($result)){

    $uid=$row['User_Id'];
    $name=$row['username'];
    $email=$row['Email_Id'];

    
   }

   while ($row = mysqli_fetch_assoc($bookresult)){
   
    $id=$row['id'];
    $pick=$row['pickup'];
    $desti=$row['destination'];
    $material=$row['type'];


}

$fsql="INSERT INTO `confirmbooking`(`user_id`, `email`, `username`, `freight_id`, `pickup`, `destination`, `material`) VALUES ('$uid', '$email', '$name','$id','$pick','$desti','$material')";

if(mysqli_query($db,$fsql))
{
    echo "success";
    echo "<script>document.location.href='home.php';</script>";
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>