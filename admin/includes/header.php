
<?php include("../php/config/db.connect.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/css/admin.css">
    <link rel="stylesheet" href="../public/dist/css/bootstrap.min.css">
    
</head>
<body>
        

    <ul class="nav d-flex justify-content-center align-items-center  pb-3 pt-4">
        <li>
            <a href="/admin/" class="text-danger ">Home</a>
        </li>
        <li>
            <a href="/admin/manage-admin.php" class="text-danger">Admin</a>
        </li>
        <li>
            <a href="/admin/manage-category.php" class="text-danger">Category</a>
        </li>
        <li>
            <a href="/admin/manage-product.php" class="text-danger">Product</a>
        </li>
        <li>
            <a href="/admin/" class="text-danger">Order</a>
        </li>
        <li>
            <a href="/admin/" class="text-danger">Logout</a>
        </li>
    </ul>