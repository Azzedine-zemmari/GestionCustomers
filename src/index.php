<?php
//Read and display the data of customers
include '../dbConn.php';
$query = "select * from customer";
$result = mysqli_query($db_connect,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ain</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    <div class="flex bg-yellow-200 p-4">
        <p class="text-yellow-700">Customer added with success</p>
    </div>
    <div class="flex justify-between items-center mx-4 mt-2">
        <h2 class="font-bold text-xl">Customers List</h2>
        <a href="#" class="bg-green-400 text-white font-semibold p-2 rounded-sm">Add Customer</a>
    </div>
    <table class="w-full text-left ">
    <thead>
        <tr>
            <th class="px-2 md:px-6 py-3">#</th>
            <th class="px-2 md:px-6 py-3">Name</th>
            <th class="px-2 md:px-6 py-3">LastName</th>
            <th class="px-2 md:px-6 py-3">Email</th>
            <th class="px-2 md:px-6 py-3">Action</th>
        </tr>
    </thead>
    <tbody class="overflow-x-auto">
        <?php while($customer_data = mysqli_fetch_assoc($result)): ?>
            <tr class="border-b">
            <td class="px-2 md:px-6 py-3"><?php echo $customer_data['Customer_id'];?></td>
            <td class="px-2 md:px-6 py-3"><?php echo $customer_data['firstName'];?></td>
            <td class="px-2 md:px-6 py-3"><?php echo $customer_data['lastName'];?></td>
            <td class="px-2 md:px-6 py-3 overflow-hidden"><?php echo $customer_data['email'];?></td>
            <td class="px-2 md:px-6 py-3">act</td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

    <?php mysqli_free_result($result); ?>
</body>
</html>