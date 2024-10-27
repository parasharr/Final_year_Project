<?php 
require 'config.php';

if(isset($_POST['sub_details'])){
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_address = $_POST['c_address'];
    $c_city = $_POST['c_city'];
    $c_pincode = $_POST['c_pincode'];
    $c_mobileno = $_POST['c_mobileno'];
    $orderid = $_POST['orderid'];


    $insert_query = mysqli_query($conn,"insert into `customer` (fullname,email,address,city,pincode,mobileno) values('$c_name','$c_email','$c_address','$c_city','$c_pincode','$c_mobileno')") or die("Insert query failed");
    if($insert_query){
        header('location: payment.php');
        echo"<script> alert('Submitted Successfully!'); </script>";

    }else{
        $display_message = "Error during inserting";
    }
}

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

    <div class="container">
        <?php
            if(isset($display_message)){
                echo "<div class='display_message'>
            <span>$display_message</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
        </div>";
            }
        ?>
        
        <section class="add-form">
            <h3 class="heading">Details</h3>
            <form action="" class="add_product" method="post">
                        
                        <input type="text" name="c_name" placeholder="Enter Your FullName" class="input_fields" required><br>

                        <input type="text" name="c_email" placeholder="Enter Your Email" class="input_fields" required><br>

                        <input type="text" name="c_address" placeholder="Enter Your Address" class="input_fields" required><br>

                        <input type="text" name="c_city" placeholder="Enter Your City" class="input_fields" required><br>

                        <input type="text" name="c_pincode" class="input_fields" placeholder="Enter Your Pincode" required><br>

                        <input type="text" name="c_mobileno" class="input_fields" placeholder="Enter Your PhoneNumber" required><br>
                        <input type="hidden" value="<?php echo 'OID'.rand(100,1000); ?>" name="orderid">
                    
                <input type="submit" name="sub_details" class="submit_btn normal" value="Submit">
            </form>
        </section>
    </div>
    
<script src="script.js"></script>
</body>
</html>