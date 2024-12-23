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
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>

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

<!-- Header Blog -->
    <section id="pg-header" class="blog">
        <h2 data-aos="fade-up">#readmore</h2>
        <p data-aos="fade-left">Read all case studies about our products! </p><br>
    </section>

<!-- Blog body -->
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img" data-aos="fade-up">
                <img src="blog-1.jpg.jpeg" alt="">
            </div>
            <div class="blog-details" data-aos="fade-left">
                <h4>The Silk Cloths</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1 data-aos="fade-right">13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img" data-aos="fade-up">
                <img src="blog-2.jpg.jpg" alt="">
            </div>
            <div class="blog-details" data-aos="fade-left">
                <h4>How to Style a Quiff</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1 data-aos="fade-right">13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img" data-aos="fade-up">
                <img src="blog-3.jpg.jpg" alt="">
            </div>
            <div class="blog-details" data-aos="fade-left">
                <h4>Must-Have Skater Girl Items</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1 data-aos="fade-right">13/09</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img" data-aos="fade-up">
                <img src="blog-4.jpg.jpg" alt="">
            </div>
            <div class="blog-details" data-aos="fade-left">
                <h4>Runway-Inspired Trends</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1 data-aos="fade-right">16/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img" data-aos="fade-up">
                <img src="blog-5.jpg.jpg" alt="">
            </div>
            <div class="blog-details" data-aos="fade-left">
                <h4>AW20 Menswear Trends</h4>
                <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf chartreuse hexagon irony, godard...</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1 data-aos="fade-right">16/05</h1>
        </div>
    </section>


    <section id="pagination" class="section-p1">
        <a href="blog.php">1</a>
        <a href="blog2.php">2</a>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
<!-- Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>