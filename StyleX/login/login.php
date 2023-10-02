<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="navbar">
        <img src="../styleX.png" class="logo">
        <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="success/success.html">Our Sucess Story</a></li>
            <li><a href="#contact">contact us</a></li>
            <li><a href="./login.php">Login</a></li>
            <li><a href="register form/Register.php">Sign Up</a></li>
        </ul>
    </div>
    <form class="form-cl" method="post">
        <h1>Login Form</h1>
        <input type="text" name="text" id="text" placeholder="Enter your name" autocomplete="off">
        <input type="email" name="email" id="email" placeholder="Enter your Email" autocomplete="off">
        <input type="password" name="pass" id="pass" placeholder="Enter your password" autocomplete="off">
        <button type="submit" id="submit">Submit</button>
        <p class="reg"> New User Then <a href="../register form/Register.php">Register here -></a></p>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>