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

    <section id="pg-header-2" class="abt">
        <h2>#Our Privacy & Policy</h2>
        <p>Take time and read our privacy and policy </p>
    </section>

    <div class="section-p1">
        <h1 class="privacy">Privacy Policy</h1>
        <h1 class="date">Effective Till: 2025</h1>
        <h2 class="normal-heading">Introduction</h2>
        <p>Welcome to The Ethinic Diva. We value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and share your information when you visit our website.
        </p>
        <h2 class="normal-heading">Information We Collect</h2>
        <ul class="listing">
            <li>Personal Information : <p>When you make a purchase or attempt to make a purchase through the Site, we collect certain information from you, including your name, billing address, shipping address, payment information (including credit card numbers), email address, and phone number.
            </p></li>
            <li>Device Information : <p>We automatically collect information about your device, including information about your web browser, IP address, time zone, and some of the cookies that are installed on your device.
            </p></li>
            <li>Order Information : <p> When you place an order, we collect information about the items you purchase, the date and time of your purchase, and any special instructions you provide.
            </p></li>
        </ul>
        <h2 class="normal-heading">How we Use Your Information</h2>
        <ul class="listing">
            <ul>We Use the information we collect to:</ul>
            <li> Process and fulfill your orders, including sending you emails to confirm your order status and shipment.
            </li>
            <li>Communicate with you and provide customer support.
            </li>
            <li>Screen our orders for potential risk or fraud.
            </li>
            <li>Improve and optimize our Site, including generating analytics about how our customers browse and interact with the Site.
            </li>
        </ul>
        <h2 class="normal-heading">Sharing Your Information</h2>
        <p>We share your Personal Information with third parties to help us use your Personal Information as described above. For example, we use Shopify to power our online store. You can read more about how Shopify uses your Personal Information here: [https://www.shopify.com/legal/privacy](https://www.shopify.com/legal/privacy).
            </p>
        <p>We may also share your information to comply with applicable laws and regulations, to respond to a subpoena, search warrant, or other lawful request for information we receive, or to otherwise protect our rights.
            </p>
        <h2 class="normal-heading">Your Right</h2>
        <p>If you are a resident of the European Economic Area (EEA), you have the right to access the personal information we hold about you and to ask that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us through the contact information below.
        </p>
        <h2 class="normal-heading">Data Retention</h2>
        <p>When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us to delete this information.</p>
        <h2 class="normal-heading">Changes</h2>
        <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons.</p>
        <h2 class="normal-heading">Contact Us</h2>
        <p>For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please contact us by email at [support@glamboutique.com] or by mail using the details provided below:</p>
        <div class="info">
            <h5>Glam Boutique</h5>
            <h5></h5>
            <h5></h5>
            <h5></h5>
        </div>
        
    </div>   
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>