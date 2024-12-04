<?php
include "../dbConn.php";
$firstName = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$created = date("Y-m-d");

$query = "INSERT INTO customer (firstName,lastName,email,created) VALUES ('$firstName','$lastName','$email','$created')";

mysqli_query($db_connect,$query);
// redirect to the index page
header("Location: index.php");