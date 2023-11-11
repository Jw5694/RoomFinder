<?php
session_start();

// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "building");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["save"])) {
    $name = mysqli_real_escape_string($conn, $_POST['room']);
    $weekday = mysqli_real_escape_string($conn, $_POST['weekday']); // Sanitize input to prevent SQL injection
    $startR = date('H:i', strtotime($_POST['startdate']));
    $endR = date('H:i', strtotime($_POST['enddate']));

    $sql = "UPDATE binfo SET `weekday` = '$weekday', `startR` = '$startR', `endR` = '$endR' WHERE `room` = '$name'";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['status'] = "Data values updated";
        } else {
            $_SESSION['status'] = "No rows updated. Data values remain the same.";
        }
        header("Location: Table.php");
    } else {
        $_SESSION["status"] = "Data value update failed: " . mysqli_error($conn);
        header("Location: Table.php");
    }
}

// Close the database connection
$conn->close();
?>
