<?php
// process_form.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight_booking";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$tour_type = $_POST['tour_type'];

// Insert data into database
$sql = "INSERT INTO tours (name, email, tour_type) VALUES ('$name', '$email', '$tour_type')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

     
        h1{
            
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 30px;
            font-size: 4vw;
            font-family: "Roboto", sans-serif;
            
        }


        span{
            color: skyblue;
        }
        img{
            width: 50vw;
            height: 50vh;
            display: flex;
 float: right;
          
            
        }

        .suces{
            padding: 100px;
        }

    </style>
</head>
<body>
    <div class="sucse">
        <h1>Congrachulation your tour  has been <span>booked</span></h1>
        <img src="https://www.freepnglogos.com/uploads/paper-plane-png/paper-plane-making-hammer-paper-airplane-that-flies-far-emerging-11.png" alt="">

      </div>
      
</body>
</html>