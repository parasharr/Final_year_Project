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
        <a href="home.html"><img src="logo.png" alt="logo" height="30px"></a>

        <div>
            <ul id="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
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
            <a href="cart.php"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="pg-header-2" class="abt">
        <h2>#Cart</h2>
        <p>Check your cart details here!</p>
    </section>

    <div class="cart">
        <table>
            <thead>
                <tr>
                    <th>Remove</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <!-- Cart items will be inserted here -->
            </tbody>
        </table>
    </div>


    <div class="cart-totals">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><Strong><p>$<span id="total-amount">0</span></p></Strong></td>
                </tr>
                <tr>
                    <td>Tex Rate%</td>
                    <td></td>
                </tr>
                <tr>
                    <td>GST</td>
                    <td></td>
                </tr>
            </table>
            <button class="normal">Proceed To Checkout</button>
        </div>

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
         document.addEventListener('DOMContentLoaded', () => {
            const cartItems = document.getElementById('cart-items');
            const totalAmount = document.getElementById('total-amount');
            let total = 0;

            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            const updateCart = () => {
                cartItems.innerHTML = '';
                total = 0;

                cart.forEach((item, index) => {
                    const row = document.createElement('tr');

                    const removeCell = document.createElement('td');
                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'Remove';
                    removeButton.addEventListener('click', () => {
                        cart.splice(index, 1);
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    });
                    removeCell.appendChild(removeButton);
                    row.appendChild(removeCell);

                    const nameCell = document.createElement('td');
                    nameCell.textContent = item.name;
                    row.appendChild(nameCell);

                    const priceCell = document.createElement('td');
                    priceCell.textContent = `$${item.price}`;
                    row.appendChild(priceCell);

                    const quantityCell = document.createElement('td');
                    const quantityInput = document.createElement('input');
                    quantityInput.type = 'number';
                    quantityInput.value = item.quantity;
                    quantityInput.addEventListener('change', () => {
                        item.quantity = parseInt(quantityInput.value);
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCart();
                    });
                    quantityCell.appendChild(quantityInput);
                    row.appendChild(quantityCell);

                    const subtotalCell = document.createElement('td');
                    subtotalCell.textContent = `$${(item.price * item.quantity).toFixed(2)}`;
                    row.appendChild(subtotalCell);

                    cartItems.appendChild(row);

                    total += item.price * item.quantity;
                });

                totalAmount.textContent = total.toFixed(2);
            };

            function updateSubtotal() {
  let subtotal = 0;
  document.querySelectorAll('#cart .total').forEach(totalCell => {
    subtotal += parseFloat(totalCell.textContent.replace('$', ''));
  });
  document.getElementById('cart-subtotal').textContent = subtotal.toFixed(2);
  document.getElementById('total-amount').textContent = subtotal.toFixed(2);
}

            updateCart();
        });
    </script>
</body>
</html>