<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (fullname, email, phone, subject, message)
VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Thanks for contacting us.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head></head>
<body><p>We will reply soon.</p><br><a href="contact.html">Go Back...</a></body>
</html>