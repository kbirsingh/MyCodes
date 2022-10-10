<?php
session_start(); 
include("connection.php");

error_reporting(E_ALL ^ E_WARNING);

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from employee where username= '$username' AND password='$password' ";
    
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($username == null || $password == null)
    {
        header('Location: error_emplog.php'); 
    }
    else if ($row['username'] == $username && $row['password'] == $password)
    {
        $_SESSION['empname'] = $username; 
        header('Location: emp_mainpage.php'); 
    }
    else
    {
        header('Location: error_emplog.html'); 
    }
        

?>

