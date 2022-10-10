<?php
session_start();
date_default_timezone_set('America/Vancouver');
include("connection.php");

$empname = $_SESSION['empname'];
$qry1 = "SELECT * FROM `employee` WHERE `username` = '$empname'";
$run1 = mysqli_query($conn,$qry1);
$data1=mysqli_fetch_assoc($run1);

$empmail = $data1['email'];

$to = $empmail;

$subject = "Monthly Vegetable List";

$datenow = getdate();
$month = $datenow['mon'];

$qry2 = "SELECT * FROM `monthlylist` WHERE `id` = '$month'";
$run2 = mysqli_query($conn,$qry2);
$data2=mysqli_fetch_assoc($run2);

$monthname = $data2['month'];
$seedname = $data2['seedname'];

$message = "Hi " .$empname. ", \n\nThis is " . $monthname . "\n\n So, Vegetable to be planted this month: " . $seedname;

    
$mail_sent = mail($to, $subject, $message);
echo "Vegetable List Sent Successfully to your Gmail";
header('Refresh: 3;url=emp_mainpage.php');
    
?>