<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

$membname = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO members (name, email, address, city, state, country, zip, phone, dob, gender)
VALUES ('$membname', '$email', '$address', '$city', '$state', '$country', '$zip', '$phone', '$bdate', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "Thank You for joining our family";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head></head>
<body><br><br><a href="membership-form.html">Go Back...</a></body>
</html>