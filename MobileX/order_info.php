<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

$product = $_POST['product'];
$fullname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$company = $_POST['cn'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$paymethod = $_POST['paymethod'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO orders (product, firstname, lastname, email, company, address, city, state, country, zip, phone, paymethod)
VALUES ('$product', '$fullname', '$lastname', '$email', '$company', '$address', '$city', '$state', '$country', '$zip', '$phone', '$paymethod')";

if (mysqli_query($conn, $sql)) {
    echo "Your order has been placed";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head></head>
<body><br><br><a href="order-form.html">Go Back...</a></body>
</html>