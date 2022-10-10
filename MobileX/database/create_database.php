<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE test5";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

mysqli_close($conn);
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql2 to create table
$sql2 = "CREATE TABLE feedback (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
experience VARCHAR(30) NOT NULL,
satisfied VARCHAR(30) NOT NULL,
price VARCHAR(30) NOT NULL,
delivery VARCHAR(30) NOT NULL,
support VARCHAR(30) NOT NULL,
message VARCHAR(1000) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql2) === TRUE) {
  echo "\nTable feedback created successfully";
} else {
  echo "\nError creating table: " . $conn->error;
}

// sql3 to create table
$sql3 = "CREATE TABLE members (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
address VARCHAR(100) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL,
zip VARCHAR(10) NOT NULL,
phone VARCHAR(15) NOT NULL,
dob VARCHAR(15) NOT NULL,
gender VARCHAR(10) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql3) === TRUE) {
  echo "\nTable Members created successfully";
} else {
  echo "\nError creating table: " . $conn->error;
}

// sql to create table
$sql4 = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
product VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
company VARCHAR(50) NOT NULL,
address VARCHAR(100) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL,
zip VARCHAR(10) NOT NULL,
phone VARCHAR(15) NOT NULL,
paymethod VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql4) === TRUE) {
  echo "\nTable Orders created successfully";
} else {
  echo "\nError creating table: " . $conn->error;
}

// sql5 to create table
$sql5 = "CREATE TABLE contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fullname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
phone VARCHAR(15) NOT NULL,
subject VARCHAR(100) NOT NULL,
message VARCHAR(1000) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql5) === TRUE) {
  echo "\nTable Contact created successfully";
} else {
  echo "\nError creating table: " . $conn->error;
}

mysqli_close($conn);
?>

