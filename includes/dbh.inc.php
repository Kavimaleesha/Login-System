<?php
$serverName = "localhost";
$dbUsername = "userKavindu";
$dbPassword  = "Kavindu123";
$dbName = "users_login";

$conn = mysqli_connect($serverName,$dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed : " .mysqli_connect_error());
}else{
    echo 'its working';
}