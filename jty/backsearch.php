<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight_booking";

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$_SESSION['departure'] = $_POST['departure'];
$_SESSION['destination'] = $_POST['destination'];
$_SESSION['Tikit_no'] = $_POST['Tikit_no'];
$_SESSION['date'] = $_POST['date'];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$departure = $_POST['departure'];
$destination = $_POST['destination'];
$flight_date = $_POST['date'];
$Tikit_no =$_POST['Tikit_no'];


// Insert booking into the database
$sql = "INSERT INTO flights VALUES ( $departure, $destination,$flight_date,$Tikit_no)";


$conn->close();


?>