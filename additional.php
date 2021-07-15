(!--    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        //<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        //  <span class="navbar-toggler-icon"></span>
        //</button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="navbar-brand" href="/ce_department/student/welcome.php">Home</a>
            </li>';

            if (!$loggedin) {
              echo '<li class="nav-item">
                <a class="navbar-brand disabled" href="/ce_department/student/signup_student.php">Signup</a>
              </li>
              <li class="nav-item">  
                <a class="navbar-brand disabled" href="/ce_department/student/login.php">Login</a>
              </li>';
            }

            if($loggedin) {
              echo '<li class="nav-item">  
                <a class="navbar-brand disabled" href="/ce_department/student/logout.php">Logout</a>
              </li>
              <li class="nav-item">  
                <a class="navbar-brand disabled" href="/ce_department/student/study_material.php">Study Material</a>
              </li>';
            }