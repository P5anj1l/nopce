<?php 
  //session_start();

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
    $loggedin = true;
  }
  else {
    $loggedin = false;
  }

echo '<div class="header-body">
        <div class="container">
          <h1>Department of Computer Engineering</h1>
          <h4>NOWGONG POLYTECHNIC</h4>
        </div>  
    </div>
	
    <!--Nav Bar-->
    <nav class="sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">   
        <a class="home navbar-brand" href="\ce_department/student/1.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
              <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="\ce_department/student/about.php">Mission & Vision</a>
                <!--<a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>-->
              </div>
            </li>
            <!--<li class="nav-item">
              <a class="navbar-brand" href="#">Link</a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CE Department
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="\ce_department/student/people.php">People</a>
                <a class="dropdown-item" href="\ce_department/student/studymaterial.php">Study Material</a>
                <a class="dropdown-item" href="\ce_department/student/syllabus.php">Syllabus</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="navbar-brand disabled" href="#">Notice</a>
              <a class="navbar-brand disabled" href="\ce_department/student/importantlink.php">Important Link</a>
              <a class="navbar-brand disabled" href="#">Contact Us</a>
            </li>
            <div class="susystem">';
            
            if (!$loggedin) {
              echo '<a class="navbar-brand disabled" href="\ce_department/student/signup_student.php">Sign Up</a>
              <a class="navbar-brand disabled" href="\ce_department/student/login.php">Login</a>';
            }  
            
            if($loggedin) {
              echo '<a class="navbar-brand disabled" href="\ce_department/student/logout.php">Logout</a>';
            }  
            echo '</div>
          </ul>';

          //<form class="form-inline my-2 my-lg-0">
          //  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          //  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          //</form>
    echo '</div>
      </div>    
    </nav>';  
?>    