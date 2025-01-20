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
include("./include/header.php")

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

    <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-container">
        
            <div class="service-card">
                <img src="./images/pic1.PNG" alt="Service 1">
                <h3>Our First Service</h3>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            </div>
            <!-- Second Service -->
            <div class="service-card">
                <img src="./images/pic2.PNG" alt="Service 2">
                <h3>Our Service Second</h3>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            </div>
            <!-- Third Service -->
            <div class="service-card">
                <img src="./images/pic3.PNG" alt="Service 3">
                <h3>Our Third Service</h3>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            </div>
        </div>
    </section>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <section class="system-section">
    <div class="container">
      <h1>How our system work?</h1>
      <div class="content">
        <div class="image-container">
          <img src="./images/pic5.PNG" alt="Person at desk" />
        </div>
      
          <p>
          Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat. Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.
          </p>
         <a href="https://youtu.be/LXb3EKWsInQ?si=SN5rxJ-f0rNVIZZG"> <button class="view-more">View more</button></a>
        </div>
      </div>
    </div>
  </section>

   


  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    .section {
      text-align: center;
      padding: 50px 20px;
    }
    .section h2 {
      font-size: 24px;
      margin-bottom: 30px;
      color: #e57373;
      text-transform: uppercase;
      letter-spacing: 2px;
    }
    .cards {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .card {
      width: 200px;
      text-align: center;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-icon {
      font-size: 40px;
      color: #e57373;
      margin-bottom: 15px;
    }
    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .card-text {
      font-size: 14px;
      color: #666;
    }
  </style>



  <div class="section">
    <h2>How Our System Works</h2>
    <div class="cards">
      <!-- Card 1 -->
      <div class="card">
        <div class="card-icon">👤</div>
        <div class="card-title">Create Account</div>
        <div class="card-text">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet.</div>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <div class="card-icon">🔑</div>
        <div class="card-title">Get Authentication</div>
        <div class="card-text">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet.</div>
      </div>
      <!-- Card 3 -->
      <div class="card">
        <div class="card-icon">🔓</div>
        <div class="card-title">Get Authentication</div>
        <div class="card-text">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet.</div>
      </div>
      <!-- Card 4 -->
      <div class="card">
        <div class="card-icon">😊</div>
        <div class="card-title">Enjoy App</div>
        <div class="card-text">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet.</div>
      </div>
    </div>
  </div>
  <?php
include("./include/footer.php")

   ?>
</body>
</html>
