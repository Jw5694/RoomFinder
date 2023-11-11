<?php
session_start();
include("db.php");


$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn, $username);  
$password = mysqli_real_escape_string($conn, $password);  


if(!empty($username) && !empty($password)){
    $sql = "SELECT * FROM accounts WHERE username = '$username' And password = '$password'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if($count == 1){  
        //echo "<h1><center> Login successful </center></h1>";  
        header("Location: Table.php");
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }   
}else{
    echo"<h1> Please enter both username and password.</h1>";
}

?>