<?php

include "../dbConn.php";

$customerId = $_GET["customer_id"];

$query = "DELETE FROM customer WHERE Customer_id='" . $customerId . "'";

if(mysqli_query($db_connect,$query)){
    header("Location: index.php");
    exit;    
}
else{
    echo "Error". mysqli_error($db_connect);
}

?>