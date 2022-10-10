<?php

    include("connection.php");
         
    $gardname = $_POST['gname'];
    $seedname = $_POST['sname'];
    $quantity = $_POST['quantity'];
        
    $query1 = "INSERT INTO `sentseed`(`gardname`, `seedname`, `quantity`) VALUES ('$gardname','$seedname','$quantity')";
    
    $run1 = mysqli_query($conn, $query1) or die(mysqli_error());

    $qry1 = "SELECT * FROM `gardener` WHERE `username` = '$gardname'";
    $run1 = mysqli_query($conn,$qry1);
    $data1 = mysqli_fetch_assoc($run1);

    $gardmail = $data1['email'];

    $to = $gardmail;
    
    $subject = "Pick Seeds from Employee Office";

    $message = "Hi " .$gardname. ", \n\nThis is a reminder that " . $seedname . " seeds are ready for you to pick up from employee office \n\nThanks";

    $mail_sent = mail($to, $subject, $message);

    echo "Mail sent successfully to " .$gardname;
    echo "<br>";
    echo "<br>";
    header('Refresh: 5;url=send_seeds.php'); 

?>
