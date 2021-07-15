<?php
    $showAlert = false;
    $showError = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {        
        require 'partials/_dbconnect.php';
        $username = $_POST["username"];
        $name = $_POST["name"];
        $phoneno = $_POST["phoneno"];
        $address = $_POST["address"];
        $yearofjoining = $_POST["yearofjoining"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        //$exists = false;

        //Check where this username exist
        $existSql = "SELECT * FROM `faculty` WHERE username = '$username'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        if ($numExistRows > 0) {
            //$exist = true;
            $showError = "Username Already exist.";
        }

        else {
            //$exist = false;
            if ($password == $cpassword) {
                $sql = "INSERT INTO `faculty` (`username`, `name`, `ph_no`, `add`, 
                `y_of_joining`, `password`, `date`) VALUES ('$username', '$name', '$phoneno',
                '$address', '$yearofjoining', '$password', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                }
            }
            else {
                $showError = "Password do not match";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup</title>

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
        
        footer > h3 {
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

        .flex-container {
        display: flex;        
        flex-wrap: nowrap;
        background-color: DodgerBlue;
        }

        .flex-container > div {
        background-color: #f1f1f1;
        width: 100%;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
        }
    </style>
  </head>
  <body>

    <?php require 'partials/_nav.php'?>

    <!--Alert for signup-->    
    <?php
        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> You acount is created and now you can login.
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

    <div class="text-center container my-2">
        <div class="text-center flex-container">    
            <div>
                <h1>Faculty Signup</h1>
                    <form action="/ce_department/student/faculty_signup.php" method="post">
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="phoneno" class="form-label">Phone No:</label>
                            <input type="number" class="form-control" id="phoneno" name="phoneno" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="yearofjoining" class="form-label">Year of Join:</label>
                            <input type="number" class="form-control" id="yearofjoining" name="yearofjoining" aria-describedby="emailHelp">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="text-center" class="mb-3 col-md-6">
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>

                        <button type="submit" class="btn btn-primary col-md-6">Signup</button>
                    </form>
            </div>    
        </div>        
    </div>    

    <footer>
      <h3>Website made with love</h3> 
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>