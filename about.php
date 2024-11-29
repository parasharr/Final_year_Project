<!-- PHP code -->
<?php
require 'config.php';
?>

<!-- HTML start -->
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
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                    <!-- To increase the Number of the cart icon -->
                    <?php
                    require 'config.php';
                        $select_product = mysqli_query($conn,"Select * from `cart`") or die('query failed');
                        $row_count = mysqli_num_rows($select_product);
                        
                    ?>

                <li id="lg-bag"><a href="cart.php"><i class='bx bx-shopping-bag bag' style='color:#000000; font-size: 20px;' ></i><span><sup><?php echo $row_count; ?></sup></span></a></li>
                <li class="user"><a href="register.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000; font-size: 25px;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

<!-- HEADER about -->
    <section id="pg-header-2" class="abt">
        <h2 data-aos="fade-up">#KnowUs</h2>
        <p data-aos="fade-left">All about our Boutique.</p>
    </section>

<!-- About head -->
    <section id="about-head" class="section-p1">
        <img data-aos="fade-up" src="a6.jpg" alt="">
        <div data-aos="fade-left">
            <h2>Who We Are?</h2>
            <p style="color: #000000;">Welcome to <strong>Glam Boutique</strong>, where fashion meets elegance and style knows no bounds. We are an online store dedicated to bring you the latest trends and timeless pieces that makes you feel confident, beautiful, and glamorous.
            </p><br>
            <abbr title="">Our Boutique offers a wide selection of clothing, accessories, and beauty products that cater to all your fashion needs</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Thank you for choosing Glam Boutique.We can't wait to help you find your next favorite piece</marquee>
        </div>
    </section>
   
<!-- Video tag -->
    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay loop="-1" muted  src="1.mp4"></video>
        </div>
    </section>

<!-- Features -->
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="f1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="f2.png">
            <h6>Order Online</h6>
        </div>
        <div class="fe-box">
            <img src="f3.png">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="f4.png">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="f5.png">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="f6.png">
            <h6>24x7 Support</h6>
        </div>
    </section>

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

<!-- Script tags -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

<!-- Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>