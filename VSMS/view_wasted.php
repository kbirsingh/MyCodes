<?php
include "connection.php";
function show()
{
    global $conn;
    $qry="SELECT * FROM `wastedseed`";
    $run=mysqli_query($conn,$qry);
?>


<div class="table-responsive">
<table class="table table-bordered mb-3" style="width:85%; text-align: center; margin: auto; color: white; border: 5px solid white">
  <thead>
      <tr style="background-color: black">
          <th>ID</th>
          <th>Name</th>
          <th>Category</th>
          <th>Quantity</th>
          <th>Expired Date</th>

      </tr>
  </thead>
  <tbody>
<?php
	if($run==true)
	{
        while($data=mysqli_fetch_assoc($run))
		{
			?><tr style="border: 5px solid"><td style="background-color: blue"><?php echo $data['id']; ?></td>
			<td><?php echo $data['name']; ?></td>
            <td><?php echo $data['category']; ?></td>
            <td><?php echo $data['quantity']; ?></td>
            <td><?php echo $data['date']; ?></td>
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
    <title>Expired Seeds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/mickey-mouse.jpg);
            background-size: cover;
        }
        
        td {
            background-color: #F900E9;
        }
    </style>
</head>
    
<body>
<h1 class="text-center mt-5" style="color: white">Expired Seeds</h1>
    <center><hr class = "mb-5" style="width: 30%; color: blue; height: 5px"></center>
<?php show(); ?> 
    <center>
  <a href="adm_mainpage.php" class="btn btn-primary btn-lg px-5 mt-5 w-30 btn-outline-light" role="button">Go Back</a>  
    </center>
</body>
</html>
