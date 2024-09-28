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
                <li><a href="insert-product.php">Add Products</a></li>
                <li><a href="view.php">View Products</a></li>
                <li><a href="shop.php">Preview</a></li>
                <li><a class="active" href="custom_details.php">Orders</a></li>
            </ul>
        </div>
    </section>

    <h3 class="heading">Order Details</h3>
    <div class="container">
        <section class="display_product">
            
                    
                       
                        <table>
                            <thead>
                                <th>Product Image</th>
                                <th>Id</th>
                                <th>Order Id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Payment</th>
                            </thead>
                            <tbody>

                            
                                

                    
                    <tr>
                        <td>image</td>
                        <td>id</td>
                        <td>order id</td>
                        <td>name</td>
                        <td>price</td>
                        <td>quantity</td>
                        <td>payment</td>
                    </tr>
                    

                </tbody>
            </table>
        </section>
    </div>
</body>
</html>