<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include("./include/header.php");
   ?>
    <section class="login-section">
        <div class="login-container">
    
            <div class="login-form">
                <h2>Login form</h2>
                <form action="#" method="post">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="cedrick@gmail.com" required>
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" required>
                    
                    <a href="#" class="forgot-password">Forgot password</a>
                    <a href="home.html">
                    <button type="submit" class="login-btn">Login</button> </a>
                </form>
            </div>
            
            <div class="login-image">
               <img src="./images/logpic.PNG" alt="Login Illustration">
            </div>
        </div>
    </section>
    <?php
include("./include/footer.php");

   ?>
</body>
</html>
