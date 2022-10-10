<?php

session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
?>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body style="background-color: #b3ecff">
    <h1 style="color: black; margin-left: 4%; margin-top: 2%; font-family: Cursive">Login As...............</h1>
    <div class="card-group" style="margin-top: 4%; margin-left: 10%; margin-right: 10%">
  <div class="card">
    <img src="images/admin-logo.png" class="card-img-top" height="400px" style="padding: 10%;padding-bottom: 5%; ">
    <div class="card-body">
    <br><center>
        <a href="admin_login.html" style="text-decoration: none">
        <button type="button" class="btn btn-outline-danger">Administrator</button></a>
            </center>
    </div>
  </div>
  <div class="card">
    <img src="images/employee.jpg" class="card-img-top"  height="400px" style="padding: 10%;padding-top: 15%; padding-bottom: 5%">
    <div class="card-body">
      <br><center>
        <a href="employee_login.html" style="text-decoration: none">
            <button type="button" class="btn btn-outline-warning">Employee</button></a>
            </center>
    </div>
  </div>
  <div class="card">
    <img src="images/gardener.jpg" class="card-img-top"  height="400px" style="padding: 5%; padding-top: 15%; padding-bottom: 0%">
    <div class="card-body">
      <br><center>
        <a href="gardener_login.html" style="text-decoration: none">
        <button type="button" class="btn btn-outline-primary">Gardener</button></a>
            </center>
    </div>
  </div>
</div>
</body>
</html>