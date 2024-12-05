<?php 
require 'config.php';

if(isset($_POST['update_product'])){
    $update_product_id=$_POST['update_product_id'];
    $update_product_name=$_POST['update_product_name'];
    $update_product_price=$_POST['update_product_price'];
    $update_product_image=$_FILES['update_product_image']['name'];
    $update_product_image_tmp_name=$_FILES['update_product_image'] ['tmp_name'];
    $update_product_image_folder='images/'.$update_product_image;

    $update_products=mysqli_query($conn, "Update `products` set name='$update_product_name', price='$update_product_price',
    image='$update_product_image' where id=$update_product_id");
    if($update_products) {
    move_uploaded_file($update_product_image_tmp_name, $update_product_image_folder);
        header('location: view.php');
    }else{
        $display_message ="Error occurs during updating the product";
}
}
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
    
    <div class="container">
        <?php
            if(isset($display_message)){
                echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        </div>";
            }
        ?>

    <section class="edit_container">
    <?php
        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];
            $edit_query = mysqli_query($conn,"Select * from `products` where id=$edit_id");
            if(mysqli_num_rows($edit_query)>0){
                $fetch_data = mysqli_fetch_assoc($edit_query);
    ?>
    <h3 class="heading">Update Product</h3>
    <form action="" method="post" enctype="multipart/form-data" class="update_product product_container_box">
        <img class="pro-img-1" src="images/<?php echo $fetch_data['image']?>" alt="">
        <input type="hidden" value="<?php echo $fetch_data['id']?>" name="update_product_id">
        <input type="text" class="input_fields fields" required value="<?php echo $fetch_data['name']?>" name="update_product_name">
        <input type="number" class="input_fields fields" required value="<?php echo $fetch_data['price']?>" name="update_product_price">
        <input type="file" class="input_fields fields" required accept="image/png, image/jpg, image/jpeg" name="update_product_image">
    <div class="btns">
        <input type="submit" class="edit_btn" value="Update Product" name="update_product">
        <input type="reset" id="close-edit" value="Cancel" class="cancel_btn">
    </div>
    </form>

    <?php
            }
        }
    
    ?>
    </section>
</body>
</html>