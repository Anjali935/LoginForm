    <?php
    $showAlert = false;
    $showError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        include 'Partials/_dbConnect.php';
        $name = $_POST["name"];
        $designation = $_POST["designation"];
        $username = $_POST["username"];
        $Password = $_POST["password"];
        $ConfirmPassword = $_POST["ConfirmPassword"];
        $email = $_POST["email"];
        // check where the username exist or not
        $existsql = "SELECT * FROM users Where username ='$username'";
        $result = mysqli_query($conn, $existsql);
        $numexist = mysqli_num_rows($result);
        if ($numexist > 0) {
            // $exist =true;
            $showError = "Username already exist.";
        } else {
            //$exist=false;
            if (($Password == $ConfirmPassword)) {
                $hash = password_hash($Password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(name,designation,username,password,email,dt) VALUES ('$name','$designation','$username','$hash','$email',current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                }
            } else {
                $showError = "Password do not match.";
            }
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

        <title>Signup</title>
    </head>

    <body>
        <?php require 'Partials/_nav.php' ?>
        <?php
        if ($showAlert) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Success!</strong>Your account is now created and you can login.
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
            <h1 class="text-center">Signup to our website </h1>
            <form action="./signup.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"placeholder="your name">
                </div>
                <div class="mb-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation"placeholder="e.g., Senior Developer">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="tel" maxlength="14" minlength="9" size="20" class="form-control" id="username" name="username" placeholder="mobile no 123-4567-8901">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" maxlength="20" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">
                    <small id="ConfirmPassword" class="form-text text-muted">Make sure to type the same password.</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"placeholder="example@gmail.com">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <button type="submit" class="btn btn-primary">Signup</button>
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