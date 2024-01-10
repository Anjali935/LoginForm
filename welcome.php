<?php
session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
      header("location: login.php");
      exit;
    }

    ?>
    <!doctype html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

      <title>Welcome</title>
    </head>

    <body>
      <?php require 'Partials/_nav.php' ?>
      
      <div class="container my-4">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Welcome</h4>
          <p>Hey how are you doing?, Welcome to iSecure you are loggedin.</p>
          <hr>
          <p class="mb-0">Whenever you need to,be sure to logout <a href="./logout.php">Using this link</a></p>
        </div>

      </div>
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
    </body>

    </html>