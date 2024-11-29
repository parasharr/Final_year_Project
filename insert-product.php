<?php 
require 'config.php';

// Insertimg Products to the table
if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_description = $_POST['p_description'];
    $p_ft = $_POST['p_ft'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder='images/'.$p_image;

// Checking condition  
    $insert_query = mysqli_query($conn,"insert into `products` (name,description,key_ft,price,image) values('$p_name','$p_description','$p_ft','$p_price','$p_image')") or die("Insert query failed");
    if($insert_query){
        move_uploaded_file($p_image_tmp_name,$p_image_folder);
        $display_message = "Product inserted successfully";
    }else{
        $display_message = "Error during inserting";
    }
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                <li><a href="custom_details.php">Orders</a></li>
            </ul>
        </div>
    </section>

    <div class="container">
        <?php
            if(isset($display_message)){
                echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        </div>";
            }
        ?>
        
        <section class="add-form">
            <h3 class="heading">Add Products</h3>
            <form action="" class="add_product" method="post" enctype="multipart/form-data">
                        <label>Product Name</label>
                        <input type="text" name="p_name" placeholder="Enter Product Name" class="input_fields" required><br>
                        
                        <label>Product Description</label>
                        <textarea name="p_description" placeholder="Enter Product Description" class="input_fields" required></textarea>
                        
                        <label>Product Key Feature</label>
                        <textarea type="text" name="p_ft" placeholder="Enter Product Key Feature" class="input_fields" required></textarea>
                    
                        <label>Product Price</label>
                        <input type="number" name="p_price" min="0" placeholder="Enter Product Price" class="input_fields" required><br>
                    
                        <label>Product Image</label>
                        <input type="file" name="p_image" class="input_fields" required accept="image/png, image/jpg, image/jpeg"><br>
                    
                <input type="submit" name="add_product" class="submit_btn normal" value="Add Product">
            </form>
        </section>
    </div>
    
<script src="script.js"></script>
</body>
</html>





