<?php
include "connection.php";
$qry1 = "SELECT * FROM `employee`";
$run1 = mysqli_query($conn,$qry1);
?>

<html>
<head>
    <title>Alert Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/my-account.jpg);
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
              <h3 class="text-center">Select Employee You Want to Alert</h3>
                <center><hr style="width: 60%; color: red; height: 5px">
                </center>
                     <h6 class="mt-4">Select an employee and click submit. It will send alert email to employee.</h6>
            

                  <form action="alert_mail.php" method="post"> 
                    
                    <label style="font-size: 20px; color:red" class="mt-5 mb-3">Choose Employee:</label>
                    <select name="empemail" style="margin-left: 5%; font-size: 20px">
                        <?php while($data1 = mysqli_fetch_array($run1)):;?>                      
                        <option value="<?php echo $data1['2']; ?>"><?php echo $data1['1']; ?></option>
                        <?php endwhile;?>
                    </select>
                      <br>
                      
                      <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-outline-warning btn-block btn gradient-custom-4 text-body-white" style="border: solid red 3px; border-radius: 15px">Submit</button>
                    <a href="adm_mainpage.php" type="button" class="btn btn-outline-success btn-block btn gradient-custom-4 text-body-white" style="border: solid black 3px; margin-left: 12px; border-radius: 15px">Go Back</a>
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