<?php 
    // Connection Wit mysql

    $host ="localhost";
    $user ="root";
    $pass = "";
    $db = "pwad73db";
    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die("Database connection failed :" . mysqli_connect_error());
        
    }

?>