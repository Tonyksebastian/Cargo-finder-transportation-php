<?php

require_once('./connection.php');
if (isset($_GET['book_id'])) {

    $bookingdata_id = $_GET['book_id'];
    $sql = "SELECT * from freights WHERE id='$bookingdata_id'";

    $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['pickup'];
        $_SESSION['bookid'] = $row['id'];
    }
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
<style>
    a{
        text-decoration: none;
    }
</style>

    <center>
        <h1>Confimration Booking </h1>

        <a href="save.php">Click here to go to Booking page</a>
    </center>
</body>

</html>