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
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" alt="logo" height="30px"></a>

        <div>
            <ul id="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a class="active" href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>

                <?php
                require 'config.php';
                    $select_product = mysqli_query($conn,"Select * from `cart`") or die('query failed');
                    $row_count = mysqli_num_rows($select_product);
                    
                ?>
                <li id="lg-bag"><a href="cart.html"><i class='bx bx-shopping-bag bag' style='color:#000000; font-size: 20px;' ></i><span><sup><?php echo $row_count; ?></sup></span></a></li>
                <li class="user"><a href="register.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000; font-size: 25px;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-img">
            <img src="y-dress-1.jpeg" width="100%" id="mainImg" alt="">

            <div class="small-img-grp">
                <div class="small-img-col">
                    <img src="y-smdress-1.jpeg" width="100%" class="smallImg" alt="">
                </div>
                <div id="sm-sec-img">
                    <img src="y-smdress-2.jpeg" width="100%" class="smallImg" alt="">
                </div>
                <div id="sm-sec-img">
                    <img src="y-smdress-3.jpeg" width="100%" class="smallImg" alt="">
                </div>
                <div id="sm-sec-img">
                    <img src="y-dress-1.jpeg" width="100%" class="smallImg" alt="">
                </div>
            </div>
        </div>


        
            <div class="single-pro-details">
                <img src="disposal.png" alt="Printed Gym T-Shirts Men's" style="height: 1px;">
                <h1>White Embroidered Kurti Set</h1>
                <h2>$78.00</h2>
                <h5>In Stock</h5>
                <select>
                    <option>Select size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1">
                <h4>Product details</h4>
                <span>
                    <b>Material composition:</b> Dot knit polyester<br>
                    <b>Pattern:</b> Printed<br>
                    <b>Fit type:</b> Regular Fit<br>
                    <b>Sleeve type:</b> Half Sleeve<br>
                    <b>Collar style:</b> Collarless<br>
                    <b>Length:</b> Standard Length<br>
                    <b>Country of Origin:</b> US
                </span>
                <h4>About this item</h4>
                <ul>
                    <li>Mens Gym T-Shirt - Active wear - Dry Fit - Pack of 3 Pieces</li>
                    <li>Regular fit - round neck - half sleeve</li>
                    <li>Quick Dry - Absorbs and dries fast</li>
                    <li>Anti Static - Stain & Dust Resistant</li>
                    <li>Soft & Smooth - For Natural Feel</li>
                </ul>
                <button class="normal" id="add-to-cart">Add to Cart</button>
                <button class="normal" id="buy-now">Buy Now</button>
            </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="fashion-adda-high-resolution-logo-transparent.png" alt="logo" height="25"><br>
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
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
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
        var mainImg = document.getElementById("mainImg");
        var smallImg = document.getElementsByClassName("smallImg");

        smallImg[0].onclick = function(){
            mainImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            mainImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            mainImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            mainImg.src = smallImg[3].src;
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            const addToCartButton = document.getElementById('add-to-cart');
            const buyNowButton = document.getElementById('buy-now');

            addToCartButton.addEventListener('click', () => {
                const productName = document.querySelector('.single-pro-details h1').innerText;
                const price = parseFloat(document.querySelector('.single-pro-details h2').innerText.replace('$', ''));
                const quantity = parseInt(document.querySelector('.single-pro-details input[type="number"]').value);
                const productImage = document.querySelector('.single-pro-details img').src;

                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                const existingProduct = cart.find(item => item.name === productName);

                if (existingProduct) {
                    existingProduct.quantity += quantity;
                } else {
                    cart.push({ name: productName, price: price, quantity: quantity, image: productImage });
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                alert(`${productName} has been added to your cart.`);
            });

            buyNowButton.addEventListener('click', () => {
                alert('Proceeding to checkout...');
                setTimeout(() => {
                    // Implement the checkout functionality here
                    alert('Checkout process initiated.');
                }, 3000); // Wait for 3 seconds
            });
        });
    </script>
</body>
</html>