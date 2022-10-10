<?php

    include("connection.php");
    $id=$_GET['id'];
    $qry1 = "SELECT * FROM `seed` WHERE id = $id";
    $run1 = mysqli_query($conn, $qry1);
    
    $data1 = mysqli_fetch_assoc($run1);

    
    $name = $data1['name'];
    $cat = $data1['category'];
    $quan = $data1['quantity'];
    $edate = $data1['edate'];

    $qry2 = "INSERT INTO `wastedseed`(`name`, `category`, `quantity`, `date`) VALUES ('$name','$cat',' $quan','$edate ')";
    mysqli_query($conn, $qry2);

    $qry3="DELETE FROM `seed` WHERE id='$id'";
	mysqli_query($conn,$qry3);
    header('location: expired_seed.php');
?>