<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "modul12user";
    $conn = mysqli_connect($host,$user,$pass,$database);
    if(!$conn){
        die("Error".mysqli_connect_error());
    }
?>