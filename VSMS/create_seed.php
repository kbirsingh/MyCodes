<?php
error_reporting(0);
?>
<?php

    $msg = "";
    include("connection.php");
 if (isset($_POST['upload'])) {
    
     $name = $_POST['name'];
    $cat = $_POST['category'];
    $ptime = $_POST['ptime'];
    $quan = $_POST['quan'];
    $edate = $_POST['edate'];
    
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    move_uploaded_file($tempname,"../vsms/seedimg/$filename");
        
    $query1 = "INSERT INTO `seed`(`name`, `category`, `ptime`, `quantity`, `edate`, `simage`) VALUES ('$name','$cat','$ptime','$quan','$edate','$filename')";
    
    $run1 = mysqli_query($conn, $query1) or die(mysqli_error());

    echo $msg;
    echo "Seed added successfully.";
    echo "<br>";
    echo "<br>";
    header('Refresh: 5;url=create_seed.html');
 }
?>
