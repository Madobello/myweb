<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Smart Meal Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

include("./include/header.php");
   ?>
    
    <main class="contact-page">
        <div class="contact-info">
            <div class="info-box">
                <p><strong>Location:</strong></p>
                <p>Huye KK501, 101 near gare huye innovation hub</p>
            </div>
            <div class="info-box">
                <p><strong>Email:</strong></p>
                <p>cedrickhakuzimana@gmail.com</p>
            </div>
            <div class="info-box">
                <p><strong>Call:</strong></p>
                <p>+250 784366616</p>
            </div>
        </div>
        <div class="contact-form">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required><br>
                    <br>
                    <input type="email" name="email" placeholder="Your Email" required><br>
                </div><br>
                <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <br>
                <div class="form-group">
                    <textarea name="message" placeholder="Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </main>
    <footer>
        <div class="quick-access">
            <p>Quick Access:</p>
            <ul>
                <li><a href="#">Help</a></li>
                <li><a href="#">More</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
        <div class="footer-info">
            <p>Info. Support. About</p>
            <p>Terms of Use . Privacy Policy</p>
        </div>
        <div>
            <p>Tel: 0784366616</p>
            <p>Instagram: mealcard</p>
        </div>
    </footer>
</body>
</html>
