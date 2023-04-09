<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

$a=$_REQUEST['Name'];
$b=$_REQUEST['mobile'];
$c=$_REQUEST['course'];
$d=$_REQUEST['event'];
$e=$_REQUEST['roll'];
$_SESSION['Name']=$a;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO e VALUES ('".$a."',".$b.",'".$c."','".$d."',".$e.")";

if ($conn->query($sql) === TRUE) {
    header("location:success.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>