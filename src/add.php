<?php
session_start();
include "../dbConn.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName = trim(htmlspecialchars(htmlentities($_POST['name'])));//snitizing the input 
    $lastName = trim(htmlspecialchars(htmlentities($_POST['lastName'])));
    $email = $_POST['email'];
    $created = date("Y-m-d");
    //test the validation;
    if(strlen($firstName)<3){
        $_SESSION['error']="must be greater then 3";
        header("Location: index.php");
        exit;
    }
    $query = "INSERT INTO customer (firstName,lastName,email,created) VALUES ('$firstName','$lastName','$email','$created')";
}

mysqli_query($db_connect,$query);//execute the query
// redirect to the index page
header("Location: index.php");