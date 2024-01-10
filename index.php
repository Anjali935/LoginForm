<?php
session_start();
 if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
  {
     header("location:welcome.php");
     exit();
 }

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .content-wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin: 10px 0;
        }

        .btn-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <div class="header">
        Welcome to Our Website
    </div>

    <div class="content">
        <h1>Revolutionize Your Business with Cutting-Edge IT Solutions</h1>
        <p>Empower your business with state-of-the-art technology. Our comprehensive IT services are designed to streamline your operations, enhance security, and drive innovation. Experience the future of IT.</p>
        <div class="btn-container">
            <a href="/loginsystem/login.php" class="btn btn-primary mx-2">Login</a>
            <a href="/loginsystem/signup.php" class="btn btn-primary mx-2">Create account</a>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>Contact Us:</p>
            <p>Email: info@example.com</p>
            <p>Phone: +1 234 567 8900</p>
            <p>Address: 123 Business Rd, Business City, BC 12345</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
