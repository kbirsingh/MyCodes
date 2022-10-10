<?php
session_start();
if(empty($_SESSION['gardname']))
{
  header("Location:gardener_login.html");
}

include("connection.php");
$gardname = $_SESSION['gardname'];

$qry1="SELECT * FROM `gardener` WHERE `username`='$gardname'";

$run=mysqli_query($conn,$qry1);
$data=mysqli_fetch_assoc($run);

$_SESSION['gardid'] = $data['id'];
?>


<html>
<head>
    <title>My Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
       body {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/my-account.jpg);
            background-size: cover;
            
        }
        label{
            color: #0037F9;
            font-weight: bold;
        }
    </style>
</head>
    
<body style="background-color: black;">
    
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 mt-3">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h3 class="text-center" style="color: blueviolet; font-weight: bolder">My Account</h3>
                <center><hr style="width: 60%; color: red; height: 5px"></center>
              <form method="post" action="gard_upd_success.php">

                <div class="form-outline mt-5 mb-4">
                    <label class="mb-2">Fullname:</label>
                  <input type="text" class="form-control form-control" name="fullname" value="<?php echo $data['fullname'] ?>">
                </div>

                <div class="form-outline mb-4">
                    <label class="mb-2">Email:</label>
                  <input type="text" class="form-control form-control" name="email" value="<?php echo $data['email'] ?>">
                </div>
                  
                  <div class="form-outline mb-4">
                      <label class="mb-2">Phone Number:</label>
                  <input type="text" class="form-control form-control" name="pnumber" value="<?php echo $data['pnumber'] ?>">
                </div>
                  
                  <div class="form-outline mb-4">
                      <label class="mb-2">Address:</label>
                  <input type="text" class="form-control form-control" name="address" value="<?php echo $data['address'] ?>">
                </div>
                  
                  <div class="form-outline mb-4">
                      <label class="mb-2">Date of Birth:</label>
                  <input type="date" class="form-control form-control" name="dob" value="<?php echo $data['dob'] ?>">
                </div>
                  
                  <div class="form-outline mb-4">
                      <label class="mb-2">Username:</label>
                  <input type="text" class="form-control form-control" name="username" value="<?php echo $data['username'] ?>" disabled>
                </div>

                <div class="form-outline mb-4">
                    <label class="mb-2">Password:</label>
                  <input type="text" class="form-control form-control" name="password" value="<?php echo $data['password'] ?>">
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-warning btn-block btn gradient-custom-4 text-body-white" style="border: solid red 3px; border-radius: 15px">Update</button>
                    <a href="gard_mainpage.php" type="button" class="btn btn-outline-success btn-block btn gradient-custom-4 text-body-white" style="border: solid black 3px; margin-left: 12px; border-radius: 15px">Go Back</a>
                </div>

              </form>

            </div>
          </div>
            <br>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
