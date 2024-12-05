<?php
    include "../dbConn.php";

    $query = "SELECT * FROM customer where Customer_id ='" . $_GET['customer_id'] . "'";
    $result = mysqli_query($db_connect,$query);
    $customer = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
<div id="updateForm" class="w-52 h-52 bg-slate-50 absolute inset-0 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
        <form action="update.php" method="POST" class="border border-slate-700 shadow-md rounded-lg flex flex-col px-8">
            <input type="hidden" name="customer_id" value="<?php echo $_GET['customer_id'];?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $customer['firstName']?>" class="w-32 border border-slate-400 mb-2">
            <label for="lastName">LastName:</label>
            <input type="text" id="lastName" name="lastName"  value="<?php echo $customer['lastName']?>" class="w-32 border border-slate-400 mb-2">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $customer['email'];?>" class="w-32 border border-slate-400 mb-2">
            <button  class="bg-green-400 text-white px-2 my-2">submit</button>
        </form>
    </div>
</body>
</html>