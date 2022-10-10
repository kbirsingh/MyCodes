<?php

    $id=$_GET['id'];
    global $id;

	include "connection.php";
        
	$qry="DELETE FROM `employee` WHERE id='$id'";
	mysqli_query($conn,$qry);
    header('location: view_employee.php');
?>