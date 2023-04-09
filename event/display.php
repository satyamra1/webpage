<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM e";
$result = $conn->query($sql);
echo"<body bgcolor=lightgreen><center><h1 style=color:black><u>Details of the participants</u></h1><center>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $a=$row["roll"];
        $b=$row["Name"];
        $c=$row["event"];
        $d=$row["mobile"];
        echo "
        
        <table border=1 align=center bgcolor=black height=200 width=200>
        <tr><td><b style=color:white>ID</b></td>
        <td><b style=color:white>$a</b></td><tr>
        <tr><td><b style=color:white>Name</b></td>
        <td><b style=color:white>$b</b></td></tr>
        <tr><td><b style=color:white>Event</b></td>
        <td><b style=color:white>$c</td><b></tr>
        <tr><td><b style=color:white>Mobile</b></td>
        <td><b style=color:white>$d</b></td></tr>
        </table><br><br>
        ";
        
    

    }
} else {
    echo "0 results";
}
$conn->close();
?>