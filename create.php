<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Image Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .form-section {
            flex: 1;
            padding: 20px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-section form input,
        .form-section form select,
        .form-section form button {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-section form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        .form-section form button:hover {
            background-color: #0056b3;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
        }

        .image-section img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <form>
                <input type="text" name="first_name" placeholder="First name">
                <input type="text" name="last_name" placeholder="Last name">
                <input type="email" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <input type="text" name="address" placeholder="Address">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="image-section">
            <img src="./images/pic4.PNG" alt="Illustration">
        </div>
    </div>
    <?php
include("./include/footer.php")

   ?>
</body>
</html>
