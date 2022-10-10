<?php

$id=$_GET['id'];

global $id;

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

// sql to delete a record
$sql = "DELETE FROM members WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header('location: members_data.php');
} 
else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>