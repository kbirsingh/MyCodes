<?php
session_start();
if(empty($_SESSION['empid']))
{
  header("Location:emp_update_profile");
}

include("connection.php");
$empid = $_SESSION['empid'];
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    
    $qry="UPDATE `employee` SET `fullname`='$fullname',`email`='$email', `pnumber`='$pnumber',`address`='$address',`dob`='$dob',`password`='$password' WHERE `id`='$empid'";
    mysqli_query($conn,$qry);

    echo "Account Updated Successfully.";
    echo "<br>";
    echo "<br>";
    header('Refresh: 3;url=emp_update_profile.php'); 

?>