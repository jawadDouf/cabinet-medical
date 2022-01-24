<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName ="cabinetPro";
$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}

?>