<?php
session_start();
if(empty($_SESSION['gardid']))
{
  header("Location:gard_update_profile");
}

include("connection.php");
$gardid = $_SESSION['gardid'];
    
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    
    $qry="UPDATE `gardener` SET `fullname`='$fullname',`email`='$email', `pnumber`='$pnumber',`address`='$address',`dob`='$dob',`password`='$password' WHERE `id`='$gardid'";
    mysqli_query($conn,$qry);

    echo "Account Updated Successfully.";
    echo "<br>";
    echo "<br>";
    header('Refresh: 3;url=gard_update_profile.php'); 

?>