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
                <li><a class="active" href="view.php">View Products</a></li>
                <li><a href="shop.php">Preview</a></li>
            </ul>
        </div>
    </section>

    <h3 class="heading">View Products</h3>
    <div class="container">
        <section class="display_product">
            
                    <?php 
                        $display_product = mysqli_query($conn,"Select * from `products`");
                        $num=1;
                        if(mysqli_num_rows($display_product) > 0){
                        echo "<table>
                            <thead>
                                <th>Sl No</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Action</th>
                            </thead>
                            <tbody>";

                            while($row = mysqli_fetch_assoc($display_product)){
                                
                    ?>
                    
                    <tr>
                        <td><strong><?php echo $num; ?></strong></td>
                        <td><img class="pro-img" src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><strong>₹<?php echo $row['price']; ?></strong></td>
                        <td>
                            <a href="delete.php?delete=<?php echo $row['id']; ?>" class="delete_product_btn" onclick="return confirm('Are you sure to delete this product');"><i class="fas fa-trash"></i></a>
                            <a href="update.php?edit=<?php echo $row['id']; ?>" class="update_product_btn"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                    $num++;
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