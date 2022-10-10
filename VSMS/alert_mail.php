<?php
include("connection.php");
$qry3 = "SELECT * FROM `admin`";
$run3 = mysqli_query($conn,$qry3);
$data3 = mysqli_fetch_assoc($run3);

$empmail = $_POST['empemail'];
$to = $empmail;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <example@gmail.com>' . "\r\n";

$subject = "Alert Regarding Stock";

$qry4 = "SELECT * FROM `lessquantity`";
$run4 = mysqli_query($conn,$qry4);
$data4 = mysqli_fetch_assoc($run4);
$table1 = '<table style="width:100%">
          <tr>
            <th align="left">Name</th>
            <th align="left">Category</th> 
            <th align="left">Quantity</th>
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

$qry5 = "SELECT * FROM `nearexpiry`";
$run5 = mysqli_query($conn,$qry5);
$data5 = mysqli_fetch_assoc($run5);
$table2 = '<table style="width:100%">
          <tr>
            <th align="left">Name</th>
            <th align="left">Category</th> 
            <th align="left">Quantity</th>
            <th align="left">Expiry Date</th>
          </tr>';

while($data5=mysqli_fetch_assoc($run5))
{
    $table2 .= '<tr>
                <td>'.$data5['sname'].'</td>
                <td>'.$data5['scat'].'</td> 
                <td>'.$data5['squan'].'</td>
                <td>'.$data5['expdate'].'</td>
              </tr>';
}

$table2 .= '</table>';

$message = "Hi employee, <br><br>Following seeds have low quantity:<br>".$table1."<br><br>Following seeds have expiry date less than a year:<br>".$table2."<br><br>Kindly, plant those close to expire date seeds or order more seeds that have low quantity from other providers.<br><br> Thanks";

$mail_sent = mail($to, $subject, $message, $headers);

echo "Alert Email Sent Successfully";
header('Refresh: 3;url=alert_emp.php'); 
?>



