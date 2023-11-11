<?php
session_start();
include("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  

if(!empty($username) && !empty($password)){
    $sql = "INSERT INTO accounts(username,password)
              VALUES('$username','$password')";

    try{mysqli_query($conn, $sql);
     }
     catch(mysqli_sql_exception){
        echo"This username is already taken";
     }
     mysqli_refresh($conn, MYSQLI_REFRESH_TABLES);
     header("Location: homepage.html");

}
$conn->close();
?>