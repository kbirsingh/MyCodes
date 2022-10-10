<?php

date_default_timezone_set('America/Vancouver');
include("connection.php");

$delqry = "DELETE FROM `nearexpiry` WHERE NOT id = '1'";
mysqli_query($conn, $delqry);

$now = time();

$qry1 = "SELECT * FROM `seed`";
$run1 = mysqli_query($conn,$qry1);

while($data1=mysqli_fetch_assoc($run1))
{
    $ddate = $data1['edate'];
    $date1 = strtotime("$ddate");
    $diff = ($date1 - $now)  / (60 * 60 * 24);
    
    if ($diff < 365 && $diff > 0)
    {
        $name = $data1['name'];
        $cat = $data1['category'];
        $quan = $data1['quantity'];
        $edate = $data1['edate'];
        $qry2 = "INSERT INTO `nearexpiry`(`sname`, `scat`, `squan`, `expdate`) VALUES ('$name','$cat','$quan','$edate')";
        mysqli_query($conn,$qry2);
    }
    
   
}

$qry3 = "SELECT * FROM `admin`";
$run3 = mysqli_query($conn,$qry3);
$data3 = mysqli_fetch_assoc($run3);

$adminmail = $data3['email'];
$to = $adminmail;

$subject = "Alert for seed having expiry date less than year";

$qry4 = "SELECT * FROM `nearexpiry`";
$run4 = mysqli_query($conn,$qry4);
$data4 = mysqli_fetch_assoc($run4);
$table1 = '<table style="width:100%">
          <tr>
            <th align="left">Name</th>
            <th align="left">Category</th> 
            <th align="left">Quantity(In gram)</th>
            <th align="left">Expiry Date</th>
          </tr>';

while($data4=mysqli_fetch_assoc($run4))
{
    $table1 .= '<tr>
                <td>'.$data4['sname'].'</td>
                <td>'.$data4['scat'].'</td> 
                <td>'.$data4['squan'].'</td>
                <td>'.$data4['expdate'].'</td>
              </tr>';
}

$table1 .= '</table>';

$message = "Hi admin, <br><br>Following seeds have expiry date less than a year:<br><br>".$table1."<br><br>Thanks";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <example@gmail.com>' . "\r\n";

$mail_sent = mail($to, $subject, $message, $headers);
?>