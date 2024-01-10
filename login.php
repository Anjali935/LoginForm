<?php
session_start();

    $login = false;
    $showError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      include 'Partials/_dbConnect.php';
      $username = $_POST["username"];
      $Password = $_POST["Password"];
      

      $sql = "SELECT * from users where username='$username'";
      $result = mysqli_query($conn, $sql);
      $num=mysqli_num_rows($result);
      if ($num==1) {
        while($row=mysqli_fetch_assoc($result))
        {
          if(password_verify($Password,$row['password']))
          {
            $login=true;
            
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location: welcome.php");
    
          }
          else {
            $showError = "Invalid Credentials";
          }
        }
       
       
      } else {
        $showError = "Invalid Credentials";
      }
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

      <title>Login</title>
    </head>

    <body>
      <?php require 'Partials/_nav.php' ?>
      <?php
      if ($login) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong>you are login.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }

      if ($showError) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Error!</strong>'.$showError.'
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
      ?>

      <div class="container my-4">
        <h1 class="text-center">Login to our website </h1>
        <form action="./login.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="tel"  maxlength="14" minlength="9" size="20"class="form-control" id="username" name="username" placeholder="mobile no 123-4567-8901">

          </div>
          <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password" name="Password">
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
        </form>
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