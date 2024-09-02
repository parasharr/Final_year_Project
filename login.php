<?php
require 'config.php';

if(!empty($_SESSION["id"])){
    header("Location: user-mng.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: user-mng.php");
        }
        else{
            echo
            "<script>alert('Wrong Password')</script>";
        }
    }
    else{
        echo
        "<script> alert('User not Found'); </script>";
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
                <li class="user"><a class="active" href="#"><i class="fa-solid fa-circle-user"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark" style="color: #000000; font-size: 25px;"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class='bx bx-shopping-bag' style='color:#000000' ></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form class="" action="" method="post" autocomplete="off">
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="usernameemail" id="usernameemail" require value="" placeholder="Username or Email"><br>
                </div>
                <div class="input-field" id="namefield">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password" id="password" require value="" placeholder="Password"><br>
                </div>
                <p>Already Have an Account?<a href="login.php">Login</a></p> 
                <button class="btn" type="submit" name="submit">Submit</button>
            </div>
    </form>
    </div>
 

    <footer class="section-p1">
        <div class="copyright">
            <p>2024, Pranjeet etc - HTML CSS Ecommerce Tamplate</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>