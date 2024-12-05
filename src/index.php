<?php
//Read and display the data of customers
session_start();
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
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="relative h-screen">
<?php if(isset($_SESSION['error'])):?>
    <div class="flex bg-yellow-200 p-4">
        <p class="text-yellow-700"><?php echo $_SESSION['error']?></p>
    </div>
    <?php endif ?>
    <div class="flex justify-between items-center mx-4 mt-2">
        <h2 class="font-bold text-xl">Customers List</h2>
        <a href="#" id="add" class="bg-green-400 text-white font-semibold p-2 rounded-sm">Add Customer</a>
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
            <td class="px-2 md:px-6 py-3">
                <a href="edit.php?customer_id=<?php echo $customer_data['Customer_id'];?>" class="bg-blue-500 text-white px-5 py-2 rounded-lg">Edit</a>
                <a href="delete.php?customer_id=<?php echo $customer_data['Customer_id'];?>" class="bg-red-500 text-white px-5 py-2 rounded-lg">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
    <?php mysqli_free_result($result); ?>
    <div id="insertForm" class="hidden w-52 h-52 bg-slate-50 absolute inset-0 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
        <form action="add.php" method="post" class="border border-slate-700 shadow-md rounded-lg flex flex-col px-8">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="w-32 border border-slate-400 mb-2">
            <label for="lastName">LastName:</label>
            <input type="text" id="lastName" name="lastName" class="w-32 border border-slate-400 mb-2">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="w-32 border border-slate-400 mb-2">
            <button  class="bg-green-400 text-white px-2 my-2">submit</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>
</html>