<!-- PHP code -->
<?php
require 'config.php';
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
                <li><a class="active" href="contact.php">Contact Us</a></li>

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

<!-- Header Contact -->
    <section id="pg-header-2" class="abt">
        <h2 data-aos="fade-up">#let's_talk</h2>
        <p data-aos="fade-left">LEAVE A MESSAGE, We love to hear from you</p>
    </section>

<!-- Contact Body -->
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span data-aos="fade-left">GET IN TOUCH</span>
            <h2 data-aos="fade-left">Visit one of our agency location or contact us today</h2>
            <h3 data-aos="fade-left">Head Office</h3>
            <div>
                <li data-aos="fade-up">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <p>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li data-aos="fade-up">
                    <i class="fa-solid fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li data-aos="fade-up">
                    <i class="fa-solid fa-phone"></i>
                    <p>contact@example.com</p>
                </li>
                <li data-aos="fade-up">
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 16.00pm</p>
                </li>
            </div>
        </div>
        <div class="map" data-aos="">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.3809145869723!2d72.5816734104669!3d23.04649257907007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e850c04a47bb9%3A0x3d21d124d52e1988!2sDiva%20ethnic!5e0!3m2!1sen!2sin!4v1732856132712!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

<!-- Details -->
    <section id="form-details">

        <form action="send.php" method="post">
            <span data-aos="fade-right">LEAVE A MESSAGE</span>
            <h2 data-aos="fade-right">We love to hear from you</h2>
            <input data-aos="fade-right" type="text" placeholder="your name">
            <input data-aos="fade-right" type="email" placeholder="email" name="email" value="">
            <input data-aos="fade-right" type="text" placeholder="subject" name="subject" value="">
            <textarea data-aos="fade-right" name="message" id="" cols="10" placeholder="your message" value=""></textarea>
            <button type="submit" name="send" class="normal" onclick="alert(`Message has been send!`);">Submit</button>
        </form>


        <div class="people">
            <div data-aos="fade-left">
                <img src="1.png" alt="">
                <p><span>Jhon Doe</span> Senior Marketing Manager <br>
                Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div data-aos="fade-left">
                <img src="2.png" alt="">
                <p><span>William Smith</span> Senior Marketing Manager <br>
                Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
            <div data-aos="fade-left">
                <img src="3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br>
                Phone: + 000 123 000 77 88 <br> Email: contact@example.com</p>
            </div>
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

<!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script
</body>
</html>