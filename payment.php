<?php
require "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fontawesome.com/releases/v6.04.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <section id="header">
        <a href="home.php"><img src="logo.png" alt="logo" height="30px"></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                <?php
                require 'config.php';
                    $select_product = mysqli_query($conn,"Select * from `cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_product);
                    
                ?>

                <li id="lg-bag"><a class="active" href="cart.php"><i class='bx bx-shopping-bag bag' style='color:#000000; font-size: 20px;' ></i><span><sup><?php echo $row_count; ?></sup></span></a></li>
                <li class="user"><a href="register.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000; font-size: 25px;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container-1">
        <?php
                $select_cart = mysqli_query($conn, "Select * from `cart`");
                if(mysqli_num_rows($select_cart)>0){
                while($fetch_product = mysqli_fetch_assoc($select_cart)){
            ?>

        
            <div class="order">
            <form method="post" action="">
            <img class="img-5" src="images/<?php echo $fetch_product["image"]?>" alt="pro-img">
                    <div class="description">
                        <h3 class="one"><?php echo $fetch_product["name"]; ?></h3>
                        <span>₹<?php echo $fetch_product["price"] ?></span><br>
                        <span>Quantity: <?php echo $fetch_product["quantity"] ?></span><br><br>
                        <span>Seller: Glam Boutique</span>
                        <input type="hidden" name="products_name" value="<?php echo $fetch_product['name']; ?>"> 
                    </div>
            </form>
            </div>
<?php
    }
}
?>    
    </div>
</section>    


    <section id="custom-details" class="section-p1">
    <?php
$select_customer = mysqli_query($conn, "Select * from `customer`");

if(mysqli_num_rows($select_customer) > 0){
    while($fetch_details = mysqli_fetch_assoc($select_customer)){
        ?>
        <div class="custom-det">
            <h3 class="address">Shipping to:<?php echo $fetch_details['fullname'], $fetch_details['address'], $fetch_details['city']?></h3>
            <hr>
            <br>
            <?php
$select_cart = mysqli_query($conn, "Select * from `cart`");
$all_total = 0;
if(mysqli_num_rows($select_cart)>0){
    while($fetch_product = mysqli_fetch_assoc($select_cart)){
    
        $all_total = $all_total+($fetch_product['price']*$fetch_product['quantity']);
            
    }
}
?>  
    <p class="price">Discount: 40%</p>
    <p class="price">Items Price: ₹<?php echo $subtotal=number_format($all_total); ?></p>
    <p class="price">Delivery: <strong style="color: green;">Free</strong></p>
    <hr>
    <br>
    <div>
            <h3 class="price">Order Total: ₹<?php echo $subtotal=number_format($all_total); ?></h3>
    </div>
        </div>
        <?php
    }
}
?>
    </section>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>