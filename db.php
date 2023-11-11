<?php
    $host = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "student";
    
    $conn = mysqli_connect($host, $username, $dbpassword, $dbname);
    
    if (mysqli_connect_errno()) {
        echo'Failed to connect to MySQL: ' . mysqli_connect_error();
    }
?>