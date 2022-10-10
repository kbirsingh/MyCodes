<html>
<head>
    <title>Search Seed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style type="text/css">
        tr {
            text-align: center;
            border: 5px solid black;
        }
        
        th {
            font-weight: bolder;
            color: white;
        }
        
        table{
            font-family: Verdana, Geneva, sans-serif;
            font-size: 15px;
            letter-spacing: 2px;
            word-spacing: 2px;
            color: #000000;
            font-weight: 400;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: normal;
            font-variant: normal;
            text-transform: uppercase;
        }
        
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(images/seed-bg2.jpg);
            background-size: cover;   
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-bottom: 5%;">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header" style="background-color: #FE8232">
                        <h2 style="font-family: cursive; font-weight: bolder; color: white">Search Seeds</h2>
                    </div>
                    <div class="card-body" style="background-color: #67FE32">
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 40px; padding-right: 40px">

                                <form action="" method="GET">
                                    <div class="input-group mb-3" style="width: 60%">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <a class="btn btn-danger" href="adm_mainpage.php" role="button" style="margin-left: 5%">Go back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered" style="border: 3px solid black">
                            <thead>
                                <tr style="background-color: red">
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Planting Time</th>
                                    <th>Quantity(In gram)</th>
                                    <th>Expiry Date</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include("connection.php");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM seed WHERE CONCAT(name,category,ptime,quantity,edate) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_fetch_array($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['category']; ?></td>
                                                    <td><?= $items['ptime']; ?></td>
                                                    <td><?= $items['quantity']; ?></td>
                                                    <td><?= $items['edate']; ?></td>
                                                    <td><?php
                                                        ?>
                                                            <img src="seedimg/<?php echo $items['simage']; ?>" style="height: 200px; width: 350px; ">
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="6">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>