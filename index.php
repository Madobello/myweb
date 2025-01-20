<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Smart Meal Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<?php

include("./include/header.php");
   ?>
    <main>
        <div class="welcome-section">
            <h1>Welcome to meal card</h1>
            <p>
                Welcome to our innovative dining experience! Securely enjoy meals with your personalized card.
                Our automated system ensures convenience and effortless reporting. Bon appétit!
            </p>
            <div class="buttons">
               <a href="create.php"><button class="get-started">Get Started</button> </a> 
               <a href="create.php"> <button class="restaurant">Restaurant</button></a>
            </div>
        </div>
        <div class="illustration">
            <img src="./images/first.PNG" alt="Illustration of two people dining">
        </div>
    </main>
    <?php
include("./include/footer.php")

   ?>
</body>
</html>
