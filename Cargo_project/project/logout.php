<?php
    include_once('connection.php');
   session_destroy();
    header('Location:login.php');
?>