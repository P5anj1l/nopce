<?php
  session_start();

  //if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  //  header("location: login.php");
  //  exit();
  //}
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

    <!--Carousel-->
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Assets/poly-1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Assets/poly-1.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Assets/poly-1.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container ab1">
      <p><h4>About Computer Engineering Department</h2>
        Nowgong Polytechnic is the only TechnicalInstitute in the Middle Assam zone. It was established in the year 1960, in the Nowgong district of Assam, India whichis providing Diploma in Engineering under the Department of Technical Education, Govt. of Assam. Ithas four branches of engineering namely civil, mechanical electrical and computer engineeringand all the branches are approved by All India Council for Technical Education (AICTE), New Delhi.

        The Faculty & supporting staff have trainings along with requisite qualifications. Few have publications in referred journals with Ph.D and left are pursuing such higher qualification. The team spirit among the staff is one of the significant factors. Through their consorted effort the institute has performed numerous academic and non-academic events in fruitful manner.

        The in house campus interview is another beauty of this institute which has shown enough success for the placement of the students. Regular training & placement at different sectors have raised the prospect of the ongoing academic activities in this institute. Experienced senior faculty members are looking after this important matter keeping a close contact with the Principal. The institute has been maintaining consistently satisfactory performance in academic result. Majority of the student securing good academic performance usually take up the degree engineering as higher study.</p>
    </div>  


    <footer>
      <div>
        <h3>Website Mase With Love</h3>
      </div>
    </footer>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>