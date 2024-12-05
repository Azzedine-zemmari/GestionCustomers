<?php

include "../dbConn.php";

$customer_Id = $_POST["customer_id"];
$firstName = $_POST["name"];
$LastName = $_POST["lastName"];
$email = $_POST["email"];

$query = "UPDATE customer set Customer_id ='"
.$customer_Id . 
"',firstName='".$firstName.
"',lastName ='".$LastName.
"',email='".$email.
"'WHERE Customer_id= '".$customer_Id
."'";

if(mysqli_query($db_connect,$query)){
    header("Location: index.php");
}
else{
    echo "Error : " . mysqli_error($db_connect);
}