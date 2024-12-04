<?php

$hostname = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "crud";

$db_connect = mysqli_connect($hostname,$database_username,$database_password,$database_name);
if(!$db_connect){
    die('could not connect to database: ' . mysql_error());
}
else{
    echo "db connected success";
}