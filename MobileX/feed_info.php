<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

$name = $_POST['name'];
$rate = $_POST['rate'];
$satisfied = $_POST['satisfied'];
$prices = $_POST['prices'];
$timeliness = $_POST['timeliness'];
$support = $_POST['support'];
$message = $_POST['message'];
$email = $_POST['email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO feedback (name, experience, satisfied, price, delivery, support, message, email)
VALUES ('$name', '$rate', '$satisfied', '$prices', '$timeliness', '$support', '$message', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Thank You for Giving your valuable feedback";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head></head>
<body><br><br><a href="feedback.html">Go Back...</a></body>
</html>