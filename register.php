<?php
require 'config.php';

if(!empty($_SESSION["id"])){
    header("Location: user-mng.php");
}
if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('', '$fullname', '$username', '$email', '$password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('SignUp successful!')</script>";
        }
        else{
            echo
            "<script> alert('Password Doesn't Match');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <link rel="stylesheet" href="style-reg.css">
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
                <li id="lg-bag"><a href="cart.html"><i class='bx bx-shopping-bag bag' style='color:#000000; font-size: 20px;' ></i></a></li>
                <li class="user"><a class="active" href="register.php"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000; font-size: 25px;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

<section id="form-bg">
<div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form class="" action="" method="post" autocomplete="off">
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="fullname" id="fullname" require value="" placeholder="Fullname"><br>
                </div>
                <div class="input-field" id="namefield">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="username" id="username" require value="" placeholder="Username"><br>
                </div>
                <div class="input-field" id="namefield">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="email" id="email" require value="" placeholder="Email"><br>
                </div>
                <div class="input-field" id="namefield">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password" id="password" require value="" placeholder="Password"><br>
                </div>
                <div class="input-field" id="namefield">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="confirmpassword" id="confirmpassword" require value="" placeholder="Confirm Password"><br>
                </div>
                <p>Already Have an Account?<a href="login.php">Login</a></p> 
                <button class="btn" type="submit" name="submit">Submit</button>
            </div>
    </form>
    </div>
</section>
    
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>