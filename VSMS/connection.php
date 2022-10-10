<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vsms";
    
    //create connection
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if($conn==false)
    {
        die("Connection Error");
    }

?>