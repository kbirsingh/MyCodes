<?php
    $id=$_GET['id'];

    $con1=mysqli_connect('localhost','root','','vsms');
    $qry1="SELECT * FROM `sentseed` WHERE `id`='$id'";
    $run1=mysqli_query($con1,$qry1);
    $data1=mysqli_fetch_assoc($run1);
    $seedquan = $data1['quantity'];
    $seedname = $data1['seedname'];
    $gardname = $data1['gardname'];


    $qry2="SELECT * FROM `seed` WHERE `name`='$seedname'";
    $run2=mysqli_query($con1,$qry2);
    $data2=mysqli_fetch_assoc($run2);
    $totalquan = $data2['quantity'];
    $newquan = $totalquan - $seedquan;
    

    $qry3 = "UPDATE `seed` SET `quantity`='$newquan' WHERE `name`='$seedname'";
    mysqli_query($con1,$qry3);
    

    $qry4 = "INSERT INTO `plantedseed`(`gname`, `sname`, `squan`) VALUES ('$gardname','$seedname','$seedquan')";
    mysqli_query($con1,$qry4);
    

    $qry5 = "DELETE FROM `sentseed` WHERE id='$id'";
	mysqli_query($con1,$qry5);

    echo "<h2>Thanks for Confirming seed are planted</h2>";
    echo "<h1>\n\nInventory Updated Successfully</h1>";

    header('Refresh: 5;url=seed_planted.php'); 
?>



