<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "svs_207";
 $con = mysqli_connect($servername, $username, $password, $dbname);
    if($con)
    {
       // echo"Connection ok";
    }
    else{
        echo "Conection fail".mysqli_connect_error();
    }