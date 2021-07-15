<?php
    $login = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        include 'partials/_dbconnect.php';
        $rollno = $_POST['rollno'];
        $password = $_POST['password'];

        $sql = "select * from student where roll_no = '$rollno' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['rollno'] = $rollno;
            header("location: student_welcome.php");
        }
        else
            $showError = "Invalid Credentials";
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Manual CSS-->
    <style>
        html, body {
        background-color: #ffffcc;
        margin: 0px;
        padding: 0px;
        }
        .abouth {
        padding-top: 15px;
        }
        .hdr-1 {
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #FF251F;
        }

        footer {
        padding-top: 20px;
        margin: 0px;
        border: 0px;
        }

        footer > div > h3 {
        padding: 6px;
        font-size:15px;
        text-align: center;
        margin-bottom: 0px;
        background-color: #FFD51F;
        }

        div.ab1 {
        text-align: justify;
        }

        .ab1 h4 {
        color: red;
        }

        .susystem {
          padding-left: 200px;
        }

        .home {
          padding-left: 10px;
        }

    </style>

    <title>Department of Computer Engineering | NOWGONG POLYTECHNIC</title>
  </head>
  <body>

    <?php require 'partials/_nav.php'?>

    <!--Alert for signup-->    
    <?php
        if ($login) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> You are logged in.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
        if ($showError) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> '. $showError .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }
    ?>

    <div class="container my-2">
        <h1 class="text-center">Login to out website</h1>

        <form action="student_login.php" method="post">
            <div class="mb-3 col-md-6">
                <label for="rollno" class="form-label">Roll No:</label>
                <input type="text" class="form-control" id="rollno" name="rollno" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary col-md-6">Login</button>
        </form>    
    </div>    

    <footer>
      <div>
        <h3 class="fixed-bottom">Website Mase With Love</h3>
      </div>
    </footer>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>