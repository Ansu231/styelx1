<?php
include 'registerconn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="registerstyle.css"> 
</head>
<body>
    <div class="navbar">
        <img src="../styleX.png" class="logo">
        <ul>
            <li><a href="main.html">Home</a></li>
            <li><a href="success/success.html">Our Sucess Story</a></li>
            <li><a href="#contact">contact us</a></li>
            <li><a href="login/login.php">Login</a></li>
            <li><a href="./Register.php">Sign Up</a></li>
        </ul>
    </div>
    <form class="form-reg" method="post">
        <h1>Registration form</h1>
        <input type="text" name="fname" id="fname" placeholder="First Name" autocomplete="off">
        <input type="text" name="lname" id="lname" placeholder="Last Name" autocomplete="off">
        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
        <input type="password" name="pass" id="pass" placeholder="password" autocomplete="off">
        <button type="submit" class="reg">Register</button>
        <p class="form-reg1">Already a User <a href="../login/login.php">Login -></a></p>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</body>

</html>