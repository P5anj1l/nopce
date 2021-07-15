<?php
  session_start();

  if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit();
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
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome - <?php echo $_SESSION['rollno']?></h4>
        <p>Hai, welcome to Computer Engineering department. You are loggedin as 
        <?php echo $_SESSION['rollno']?></p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to <a href="logout.php">logout</a>
        using this link.</p>
      </div>
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