<?php

date_default_timezone_set('America/Vancouver');
include("connection.php");
function show()
{
    $now = time();
    global $conn;
    $qry1 = "SELECT * FROM `seed`";
    $run1 = mysqli_query($conn,$qry1);
    
    $table1 = '<table  class="table table-bordered mb-3" style="width:85%; text-align: center; margin: auto; color: white; border: 5px solid white">
    <thead>
          <tr style="background-color: black">
            <th align="left">ID</th>
            <th align="left">Name</th>
            <th align="left">Category</th> 
            <th align="left">Quantity</th>
            <th align="left">Expiry Date</th>
            <th align="left">Mark As*</th>
          </tr>';

    while($data1=mysqli_fetch_assoc($run1))
    {
        $ddate = $data1['edate'];
        $date1 = strtotime("$ddate");
        $diff = ($date1 - $now)  / (60 * 60 * 24);

        if ($diff < 0)
        {
            $table1 .= '<tr  style="border: 5px solid">
                <td style="background-color: blue">'.$data1['id'].'</td>
                <td>'.$data1['name'].'</td>
                <td>'.$data1['category'].'</td> 
                <td>'.$data1['quantity'].'</td>
                <td>'.$data1['edate'].'</td>
                <td style="background-color: #838382">
                <a href="wasted.php?id='.$data1['id'].'">
                <input type="button" class="btn btn-danger btn-sm btn-outline-light" value="Wasted"></a>
                </tr>'; 
        }

    }
    $table1 .= '</table>';
    echo $table1;
}
?>

<html>
<head>
    <title>Expired Seeds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/view-emp.png);
            background-size: cover;
        }
    </style>
</head>
    
<body>
<h1 class="text-center mt-5" style="color: white">Expired Seeds</h1>
    <center><hr class = "mb-5" style="width: 30%; color: blue; height: 5px"></center>
<?php show(); ?> 
    <center>
  <a href="emp_mainpage.php" class="btn btn-primary btn-lg px-5 mt-5 w-30 btn-outline-light" role="button">Go Back</a>  
    </center>
</body>
</html>