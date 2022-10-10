<?php

include("connection.php");
function show()
{
    global $conn;
    $qry1 = "SELECT * FROM `seed` WHERE category = 'harvested' order by quantity desc LIMIT 5 ";
    $run1 = mysqli_query($conn,$qry1);
?>
<div class="table-responsive">
<table class="table table-bordered mb-3" style="width:85%; text-align: center; margin: auto; color: white; border: 5px solid white">
  <thead>
      <tr style="background-color: black">
          <th>Seed</th>
          <th>Harvested Seeds</th>
      </tr>
  </thead>
  <tbody>
<?php
	if($run1==true)
	{
        while($data1 = mysqli_fetch_assoc($run1))
		{
			?><tr style="border: 5px solid"><td style="background-color: blue"><?php echo $data1['name']; ?></td>
			<td style="background-color: orange"><?php echo $data1['quantity']; ?></td>
    </tr></tbody>
			<?php
		}
	} 
?>
</table>
</div>

<?php
}

function show2()
{
    global $conn;
    $qry3 = "SELECT * FROM `wastedseed` order by quantity desc LIMIT 5";
    $run3 = mysqli_query($conn,$qry3);
?>
<div class="table-responsive">
<table class="table table-bordered mb-3" style="width:85%; text-align: center; margin: auto; color: white; border: 5px solid white">
  <thead>
      <tr style="background-color: black">
          <th>Seed</th>
          <th>Wasted Seeds</th>
      </tr>
  </thead>
  <tbody>
<?php
	if($run3==true)
	{
        while($data3 = mysqli_fetch_assoc($run3))
		{
			?><tr style="border: 5px solid"><td style="background-color: blue"><?php echo $data3['name']; ?></td>
			<td style="background-color: orange"><?php echo $data3['quantity']; ?></td>
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
    <title>Yearly Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/gardener-bg.jpg);
            background-size: cover;
            
        }
    </style>
</head>
    
<body>

  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 mt-3">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h3 class="text-center">Yearly Report</h3>
                <center><hr style="width: 60%; color: red; height: 5px"></center><br>
              <h5 class="text-center">Top 5 Harvested seeds</h5><br>
<?php show(); ?> 
<br><br>
<h5 class="text-center">Top 5 Wasted seeds</h5><br>
<?php show2(); ?> 
<center>
  <a href="adm_mainpage.php" class="btn btn-primary btn-lg px-5 mt-5 w-30 btn-outline-dark" role="button">Go Back</a>  
    </center>
            </div>
          </div>
            <br>
        </div>
      </div>
    </div>
  </div>
</body>
</html>