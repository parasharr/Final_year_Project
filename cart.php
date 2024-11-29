<!-- PHP code -->
<?php
require 'config.php';

// Updating The cart
if(isset($_POST['update_cart_qty'])){
 $update_value=$_POST['update_qty'];
 $update_id = $_POST['update_qty_id'];
 $update_qty = mysqli_query($conn,"update `cart` set quantity=$update_value where id=$update_id");
 if($update_qty){
    header('location: cart.php');
}
}

// Remove item functionality 
if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "Delete from `cart` where id = $remove_id");
    header('location: cart.php');
}
?>

<!-- HTML Start -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Ethnic Diva - An Ecommerce Clothing Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fontawesome.com/releases/v6.04.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<!-- NAVBAR -->
    <section id="header">
        <a href="home.php"><img src="logo.png" alt="logo" height="50px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
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

<!-- Header Cart -->
    <section id="pg-header-2" class="abt">
        <h2 data-aos="fade-up">#Cart</h2>
        <p data-aos="fade-left">Check your cart details here!</p>
    </section>

<!-- Body Cart -->
    <div class="cart">
        <table>
            <!-- Fetching data from the database -->
            <?php
                $select_cart_products = mysqli_query($conn,"Select * from `cart`");
                $grand_total = 0;

                if(mysqli_num_rows($select_cart_products) > 0){
                    echo "
                        <thead>
                            <tr>
                                <th>Remove</th>
                                <th>Product Name</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                    ";

                while($fetch_cart_products = mysqli_fetch_assoc($select_cart_products)){
            ?>
            <tbody id="cart-items">
                <td><a href="cart.php?remove=<?php echo $fetch_cart_products['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?')">
                    <i class="fa-solid fa-trash" style="color: #be1313;font-size:20px;"></i>
                </a></td>
                <td><?php echo $fetch_cart_products["name"]?></td>
                <td><img class="pro-img" src="images/<?php echo $fetch_cart_products["image"]?> " alt=""></td>
                <td><strong>₹<?php echo $subtotal=number_format($fetch_cart_products['price']) ?></strong></td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="update_qty_id" value="<?php echo $fetch_cart_products["id"] ?>">
                        <div class="quantity_box">
                            <input type="number" min="1" name="update_qty" max="10" value="<?php echo $fetch_cart_products["quantity"]?>">
                            <input type="submit" class="qty_box" name="update_cart_qty" value="Update">
                        </div>
                    </form>    
                </td>
                <td><strong>₹<?php echo $subtotal=number_format($fetch_cart_products['price']*$fetch_cart_products['quantity']); ?></strong></td>
            </tbody>
            <?php
                $grand_total = $grand_total+($fetch_cart_products['price']*$fetch_cart_products['quantity']);
                }
            }else{
                echo "No Products";
            }
            ?>
        </table>
    </div>

<!-- Cart Total -->
    <div class="cart-totals">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Grand Total</strong></td>
                <td><Strong><p>₹<span id="total-amount"><?php echo $subtotal=number_format($grand_total); ?></span></p></Strong></td>
            </tr>
        </table>
        <a href="shop.php"><button class="normal">Continue Shopping</button></a>
        <a href="check.php"><button class="normal">Proceed To Checkout</button></a>
    </div>

<!-- Footer -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="logo.png" alt="logo" height="30"><br>
            <h4>Contact</h4>
            <p><b>Address:</b> 562 Wellington Road, Street 32, San Francisco</p>
            <p><b>Phone:</b>+01 2222 365/(+91)60035 16672</p>
            <p><b>Hours:</b>10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a herf="#"><i class="fab fa-pinterest-p"></i></a>
                    <a herf="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About Us</a>
            <a href="delivery.php">Delivery Information</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="terms.php">Terms & Conditions</a>
            <a href="contact.php">Contact Us</a>
        </div>
        <div class="col">
        <h4>My Account</h4>
        <a href="login.php">Sign In</a>
        <a href="cart.php">View Cart</a>
        <a href="orders.php">Track My Order</a>
        <a href="help.php">Help</a>
        </div>
        <div class="col-install">
            <h4>Install App</h4>
            <p>From App Store or Google PlayStore</p>
            <div class="row">
                <img src="app.jpg">
                <img src="play.jpg">
            </div>
            <p>Secure Payment Gateways</p>
            <img src="pay.png">
        </div>
        <div class="copyright">
            <p>2024, Pranjeet etc - HTML CSS Ecommerce Tamplate</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script
</body>
</html>