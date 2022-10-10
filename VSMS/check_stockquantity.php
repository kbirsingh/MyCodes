<?php

date_default_timezone_set('America/Vancouver');
include("connection.php");

$delqry = "DELETE FROM `lessquantity` WHERE NOT id = '1'";
mysqli_query($conn, $delqry);

$quanarr = array();
$scat = array();
$snamearr = array();
$sdate = array();

$qry1 = "SELECT * FROM `seed` WHERE quantity < '500'";
$run1 = mysqli_query($conn,$qry1);

while($data1=mysqli_fetch_array($run1))
{
    array_push($quanarr, $data1['4']);
    array_push($snamearr,$data1['1']);
    array_push($sdate,$data1['5']);
    array_push($scat,$data1['2']);
}

$length = count($quanarr);

for ($i=0; $i < $length; $i++)
{
    $name = $snamearr[$i];
    $cat = $scat[$i];
    $quan = $quanarr[$i];
    $edate = $sdate[$i];
    
    $qry2 = "INSERT INTO `lessquantity`(`sname`, `scat`, `squan`, `edate`) VALUES ('$name','$cat','$quan','$edate')";
    
    mysqli_query($conn,$qry2);
}

$qry3 = "SELECT * FROM `admin`";
$run3 = mysqli_query($conn,$qry3);
$data3 = mysqli_fetch_assoc($run3);

$adminmail = $data3['email'];
$to = $adminmail;

$subject = "Alert for less quantity seed";

$qry4 = "SELECT * FROM `lessquantity`";
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
                <td>'.$data4['edate'].'</td>
              </tr>';
}

$table1 .= '</table>';

$message = "Hi admin, <br><br>Following seeds have low quantity:<br><br>".$table1."<br><br>Thanks";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <example@gmail.com>' . "\r\n";

$mail_sent = mail($to, $subject, $message, $headers);
                          
?>