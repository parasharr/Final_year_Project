<?php
require 'config.php';

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
        <a href="index.php"><img src="logo.png" alt="logo" height="30px"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
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
    
    <section id="hero">
        <h4 data-aos="fade-up">Best-offers</h4>
        <h2 data-aos="fade-up">Valuable deals</h2>
        <h1 data-aos="fade-up">On all Fashion Products</h1>
        <p data-aos="fade-up">save more by using coupons & up to 40% off!</p><br>
        <button>Shop Now</button>
    </section>

    <div class="title-home">
        <h1>Best Ethnic Wears</h1>
        <h2>For all Festive seasons</h2>
    </div>

    <section id="banner-1" class="section-m1">
        <div class="banner-txt" data-aos="fade-up">
            <div class="brighter-text">
                <h2>Upto <span>40%</span> Off</h2>
                <h1>On All Products</h1>
                <h4>Go Grab Your's</h4>
            </div>
            <button class="btn-bnr">Shop Now</button>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Product</h2>
        <p>Festive Collection New & Modern Design</p>
        <div class="pro-container">
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-32.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Chikankari Long Kurta</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹5,999</h4>
                </div>
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-30.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Cream Kurta Jacket Set</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹6,599</h4>
                </div>
               
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-31.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Off-white Embroidered Indo-western</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹5,599</h4>
                </div>
                
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-29.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Pale Lilac Lucknowi Resham Kurta Set</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹4,999</h4>
                </div>
                
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-14.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Banarasi Styled Lehenga</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹7,999</h4>
                </div>
                
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-13.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Pink Banarasi Lehenga</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹5,699</h4>
                </div>
                
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-12.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Alluring Embroidery with Palazo</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹5,999</h4>
                </div>
                
            </div>
            <div class="product" onclick="window.location.href='shop.php'" data-aos="fade-up">
                <img src="y-dress-11.jpeg" alt="">
                <div class="description">
                    <span>Glam boutique</span>
                    <h5>Chanya Choli</h5>
                    <div class="star">
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                        <i class='bx bxs-star' style='color:#b3b318' ></i>
                    </div>
                    <h4>₹6,799</h4>
                </div>
                
            </div>
        </div>
    </section>
    
    <div class="vm">
        <a href="shop.php">View More</a>
    </div>
    
    
    <section id="sm-banner" class="section-p1" data-aos="fade-right">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>Buy Matching Sets of Cloths</h2>
            <span>The best classic dress in on sale at Glam Boutique</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2" data-aos="fade-right">
            <h4>Festive/Wedding</h4>
            <h2>Upcoming season</h2>
            <span>The best clothing collection at Glam Boutique</span>
            <button class="white">Collection</button>
        </div>
    </section>
    

    <div class="font">
        <h4>Featured Wears</h4>
    </div>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">&#10094;</button>
                <div class="image-list">
                    <div class="gallery-container">
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Kurta.jpeg" alt="" width="500" height="300">
                            </div> 
                            <h3>Kurta's for men</h3>
                        </div>
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Longkurti.jpeg" alt="" width="600" height="400">
                            </div>
                            <h3>Kurti's for women</h3>
                        </div>
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Sherwani.jpeg" alt="">
                            </div>
                            <h3>Sherwani</h3>
                        </div>
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Plazo.jpeg" alt="">
                            </div>
                            <h3>Palazo</h3>
                        </div>
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Lehenga.jpeg" alt="">
                            </div>
                            <h3>Lehenga</h3>
                        </div>
                        <div class="image-card" data-aos="fade-left">
                            <div class="zoom-effect">
                                <img class="shoe" src="Img/Brands/dc/dc-1.jpg" alt="">
                            </div>
                            <h3>DC</h3>
                        </div>
                    </div>
                </div>
                <button id="next-slide" class="slide-button material-symbols-rounded">&#10095;</button>
            </div>
        </div>
    </section>


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

    
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="logo.png" alt="logo" height="25"><br>
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
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>