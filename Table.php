<?php
session_start();?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
        rel='stylesheet'>

</head>
    <body class = "main">
        <div class = "wrapper" align = "center">
    <h1 style="color: black;"> Room List</h1>
    <?php
        if(isset($_SESSION['status']))
        {
            echo"<h4>" . "". $_SESSION["status"] ."</h4>";
            unset($_SESSION['status']);
        }
    ?>
    <form action = "Test.php" method = "POST"> 
        <table>
        <tr>
            <td>    
                <label for = ""> Room </label>
                <input type = "text"  name = "room">
            </td>
        </tr>
        <tr>
            <td>    
                <label for = ""> Weekday </label>
                <select name = "weekday">
                    <option value = "Monday"> Monday</option>
                    <option value = "Tuesday"> Tuesday</option>
                    <option value = "Wednesday"> Wednesday</option>
                    <option value = "Thursday"> Thursday</option>
                    <option value = "Friday"> Friday</option>
                </select>
            </td>
        </tr>
        <tr>
             <td>
                <label for = ""> Start </label>
                <input type = "time" name = "startdate">
             </td>
        </tr>
        <tr>
             <td>
                <label for = ""> End </label>
                <input type = "time" name = "enddate">
             </td>
        </tr>
        <tr>
            <td>
                <button type = "submit" name = "save">Confirm</button>
            </td>
        </tr>
</table>
    </form>
        <table>
            <tr>
                <th>Room</th>
                <th>Weekday</th>
                <th>Start</th>
                <th>End</th>
    </tr>  
            <?php
                $conn = mysqli_connect("localhost", "root", "", "building");
                $sql = "SELECT * FROM building.binfo";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["room"] . 
                            "</td><td>" . $row["weekday"] . 
                            "</td><td>" . $row["startR"] . 
                            "</td><td>" . $row["endR"] . "</td></tr>";
                    }
                    
                }
                else {
                    echo "No Results";
                }
                $conn->close();
            ?>
        </table>
        </div>
    </body>
</html>
