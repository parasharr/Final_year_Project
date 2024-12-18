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
                <li><a class="active" href="order.php">Orders</a></li>
            </ul>
        </div>
    </section>

    <h3 class="heading">Customer Details</h3>
    <div class="container">
        <section class="display_product">
            
                    <?php 
                        $display_details = mysqli_query($conn,"Select * from `customer`");
                        $id=1;
                        if(mysqli_num_rows($display_details) > 0){
                        echo "<table>
                            <thead>
                                <th>Id</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Pincode</th>
                                <th>MobileNo.</th>
                                <th>action</th>
                            </thead>
                            <tbody>";

                            while($row = mysqli_fetch_assoc($display_details)){
                                
                    ?>
                    
                    <tr>
                        <td><strong><?php echo $id; ?></strong></td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><strong><?php echo $row['pincode']; ?></strong></td>
                        <td><strong><?php echo $row['mobileno']; ?></strong></td>
                        <td style="text-align:center;"><a href="view_order.php"><button class="">View Order</button></a></td>
                    </tr>
                    <?php
                    $id++;
                            }
                        }else{
                            echo "<div class='empty_text'>No Products Available!!</div>";
                        }
                    ?>

                </tbody>
            </table>
        </section>
    </div>
</body>
</html>