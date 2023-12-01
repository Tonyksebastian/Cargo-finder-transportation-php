<?php
session_start();
ob_start();
     $db= new mysqli("localhost","root","","transin_cargo");
    if($db===false)
     {
         echo "Connection error ".$db->connect_error();
     }
    ?>
