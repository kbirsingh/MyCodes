<?php

    include("connection.php");
         
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $query1 = "INSERT INTO gardener(`fullname`, `email`, `pnumber`, `address`, `dob`, `username`, `password`) VALUES ('$fullname','$email','$pnumber','$address','$dob','$username','$password')";
    
    $run1 = mysqli_query($conn, $query1) or die(mysqli_error());
    
    echo "Gardener Account created successfully.";
    echo "<br>";
    echo "<br>";
    header('Refresh: 5;url=adm_mainpage.php'); 

?>
