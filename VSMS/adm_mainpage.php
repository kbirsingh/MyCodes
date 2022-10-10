<?php
session_start();
if(empty($_SESSION['admname']))
{
  header("Location:admin_login.html");
}
?>

<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        body {
            background: #e8cbc0;
            background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
            background: linear-gradient(to right, #e8cbc0, #636fa4);
            min-height: 100vh;
        }
        
        .bg-white:hover {
            color: red;
        }
    </style>
</head>

<body style="background-color: #b3ecff">
    
    
<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">
            <h1 class="display2" style="font-family: cursive; margin-top: 30px; color: white; margin-left: 5%">Welcome Admin: 
        <?php
            include("connection.php");
        
            $admin = $_SESSION['admname'];
            $qry1 = "SELECT * FROM `admin`";
            $run = mysqli_query($conn,$qry1);
            $data=mysqli_fetch_assoc($run);
            echo $data['fullname'];
        ?>   
    </h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row text-center">

        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "adm_search_seed.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/search-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Search Seeds</h5>
                </div></a>
        </div>


        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "create_employee.html" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/emp-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Create Employee Account</h5>
                </div></a>
        </div>

        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "create_gardener.html" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/gard-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Create Gardener Account</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "alert_emp.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/alert.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Alert Employee About Stock</h5>
                </div></a>
        </div>

        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "monthly_report.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/monthly-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Generate Monthly Report</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "yearly_report.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/yearly-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Generate Yearly report</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "view_employee.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/view-employee.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">View Employee Accounts</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "view_gardener.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/view-gardener.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">View Gardener Accounts</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "view_wasted.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/new-seed.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">View Expired Seeds</h5>
                </div></a>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-5">
            <a href = "index.php" style="text-decoration: none; color: black">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images/logout-icon.png" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Logout</h5>
            </div></a>
        </div>
        
    </div>
</div>
    
</body>
</html>