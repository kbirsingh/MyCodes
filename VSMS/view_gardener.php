<?php
include "connection.php";
function show()
{
    global $conn;
    $qry="SELECT * FROM `gardener`";
    $run=mysqli_query($conn,$qry);
?>


<div class="table-responsive">
<table class="table table-bordered mb-3" style="width:85%; text-align: center; margin: auto; color: white; border: 5px solid white">
  <thead>
      <tr style="background-color: black">
          <th>ID</th>
          <th>Fullname</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Date Of Birth</th>
          <th>Username</th>
          <th>Password</th>
          <th>Change Data*</th> 
      </tr>
  </thead>
  <tbody>
<?php
	if($run==true)
	{
        while($data=mysqli_fetch_assoc($run))
		{
			?><tr style="border: 5px solid"><td style="background-color: blue"><?php echo $data['id']; ?></td>
			<td><?php echo $data['fullname']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['pnumber']; ?></td>
            <td><?php echo $data['address']; ?></td>
			<td><?php echo $data['dob']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
      
            <td style="background-color: #838382">
            <a href="adm_upd_gard.php?id=<?php echo $data['id']; ?>">
            <input type="button" class="btn btn-success btn-sm btn-outline-light" value="Update"></a>

            <a href="del_gard_acc.php?id=<?php echo $data['id']; ?>">
            <input type="button" class="btn btn-danger btn-sm btn-outline-light" value="Delete"></a>
            </td>
    </tr></tbody>
			<?php
		}
	} 
?>
</table>
</div>
<?php
}
?>

<html>
<head>
    <title>Gardener Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/view-gard.jpg);
            background-size: cover;
        }
        
        td {
            background-color: #F900E9;
        }
    </style>
</head>
    
<body>
<h1 class="text-center mt-5" style="color: white">Gardener Accounts</h1>
    <center><hr class = "mb-5" style="width: 30%; color: blue; height: 5px"></center>
<?php show(); ?> 
    <center>
  <a href="adm_mainpage.php" class="btn btn-primary btn-lg px-5 mt-5 w-30 btn-outline-light" role="button">Go Back</a>  
    </center>
</body>
</html>
