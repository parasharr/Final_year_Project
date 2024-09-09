<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Deshboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fontawesome.com/releases/v6.04.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<section id="header">
       <h3>Admin Panel</h3>

        <div>
            <ul id="navbar">
                <li><a class="active" href="insert-product.php">Add Products</a></li>
                <li><a href="view.php">View Products</a></li>
                <li><a href="shop.php">Preview</a></li>
            </ul>
        </div>
    </section>

    <section class="edit_container">
        <h3 class="heading">Update Product</h3>
        <form action="" class="update_product product_container_box">
            <img src="" alt="">
            <input type="hidden">

            <label>Product Name</label>
            <input type="text" class="input_fields fields" placeholder="Enter Product Name" required>

            <label>Product Price</label>
            <input type="number" class="input_fields fields" placeholder="Enter Product Price" required>

            <label>Upload Image</label>
            <input type="file" class="input_fields fields" name="" required accept="image/jpg, image/png, image/jpeg">
            <div class="btns">
                <input type="submit" class="edit_btn">
                <input type="reset" id="close-edit" value="Cancel" class="cancel_btn">
            </div>
        </form>
    </section>
</body>
</html>