<?php

$name = $_POST['uname'];
$password = $_POST['psw'];

if($name == "admin" && $password == "admin")
{
    header('Location: adminpanel.html');
}
else
{
    echo '<script>alert("Wrong Username and Password")</script>'; 
}

?>

<html>
<head>
</head>
    
<body style="font-size: 20px">
    <br>
    <a href="login.html">Go back.....</a>
</body>
</html>
