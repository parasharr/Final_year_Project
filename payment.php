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
                        <input type="hidden" name="order_name" value="<?php echo $fetch_product['name']; ?>">  
                        <input type="hidden" name="order_price" value="<?php echo $fetch_product['price']; ?>">  
                        <input type="hidden" name="products_quantity" value="<?php echo $fetch_product['quantity']; ?>"> 
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
            <h3 class="address">Shipping to: <?php echo $fetch_details['fullname']?>, <?php echo$fetch_details['address']?>, <?php echo $fetch_details['city']?></h3>
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
    <p class="price">Items Price: ₹<?php echo $subtotal=number_format($all_total - 4000); ?></p>
    <p class="price">Delivery: <strong style="color: green;">Free</strong></p>
    <hr>
    <br>
    <div>
            <h3 class="price">Order Total: ₹<?php echo $subtotal=number_format($all_total-4000); ?></h3>
    </div>
        </div>
        <?php
    }
}
?>
    </section>
    
    <section class="section-p1">
        <div class="deli-date">
            <h3 class="chck">Expected Delivery Date: <span style="font-weight: 600;">10days after shipping.</span></h3>
            <input type="checkbox"> <span class="chck">Want all Products at the same Date?</span>
        </div>
    </section>


<section id="payment-methods">
    <div class="paycard">
        <div class=left>
            <p>Payment methods</p>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <div class="methods">
                <div onclick="doFun()" id="tColorA" style="color: green;"><i class="fa-solid fa-credit-card" style="color: green;"></i> Payment by card</div>
                <div onclick="doFunA()" id="tColorB"><i class="fa-solid fa-building-columns"></i> Internet banks</div>
                <div onclick="doFunB()" id="tColorC"><i class="fa-solid fa-wallet"></i> Apple/Google pay</div>
            </div>

            <hr style="border: 1px solid #ccc; margin:0 15px;">
        </div>
        <div class="center">
            <a href="https://www.shift4shop.com/credit-card-logos.html"><img src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250 hei
                auto" alt="Credit card logo" title="Credit card logos"></a>
            <hr style="border: 1px solid #ccc; margin: 0 15px;">
            <div class="card-details">
                <form action="">
                    <p>Card Number</p>
                    <div class="c-number" id="c-number">
                        <input type="text" id="number" class="cc-number" placeholder="Enter card number" maxlength="19" required>
                        <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                    </div>
                    <div class="c-details">
                        <div>
                            <p>Expiry date</p>
                            <input type="text" id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5" required>
                        </div>
                        <div>
                            <p>CVV</p>
                            <div class="cvv-box" id="cvv-box">
                                <input type="text" id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3"required>
                                <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="email">
                        <p>Email</p>
                        <input type="email" placeholder="example@gmail.com" id="email" required>
                    </div>

                    <button id="paypay" onclick="    
                    if(confirm('Are you sure you want to pay?')){
                        setTimeout(function(){
                            alert('Processing payment....');
                        }, 1000);

                        setTimeout(function(){
                            alert('Payment Done Successfully! Happy Shopping')
                            changeButtonText()
                        }, 2000);
                    }
                    ">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
   
<section class="cod">
    <div class="cash">
        <input type="checkbox"><span>Cash On Delivery</span>
    </div>
</section>

<input type="submit" name="add_to_cart" id="paypros" value="Place Order">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script>
    function changeButtonText(){
        var button = document.getElementById("paypay");
        button.innerText = "Paid";
        button.disabled = true;

        localStorage.setItem("buttonDisabled","true");
    }

    function checkButtonState(){
        var button = document.getElementById("paypay");
        var buttonDisabled = localStorage.getItem("buttonDisabled");

        if(buttonDisabled === "true"){
            button.innerText = "Paid";
            button.disabled = true;
        }
    }
    window.onload = checkButtonState;
</script>
</body>
</html>