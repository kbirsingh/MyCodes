<?php
session_start(); 
include("connection.php");

error_reporting(E_ALL ^ E_WARNING);

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from admin where username= '$username' AND password='$password' ";
    
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($username == null || $password == null)
    {
        header('Location: error_admlog.html'); 
    }
    else if ($row['username'] == $username && $row['password'] == $password)
    {
        $_SESSION['admname'] = $username;
        include("check_stockdate.php");
        include("check_stockquantity.php");
        header('Location: adm_mainpage.php'); 
    }
    else
    {
        header('Location: error_admlog.html'); 
    }
        

?>

