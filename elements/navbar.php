<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="site-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="nav-switch">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                
                <nav class="main-menu">
               
                    <ul>
                    <?php
                session_start();
                if (isset($_SESSION['stu_is_login']) || isset($_SESSION['ins_is_login'])) {
                    echo '
                    <li><a href="logout.php" class="bg-white site-btn header-btn text-danger">Logout </a> </li>';
                    if (isset($_SESSION['stu_is_login'])) {
                        echo '
                        <li><a href="Student/pages/dashboard.php" class="site-btn header-btn">My Profile</a></li>
                    ';
                    } elseif (isset($_SESSION['ins_is_login'])) {
                        echo '
                        <li>  <a href="Instructor/pages/dashboard.php" class="site-btn header-btn">My Profile</a></li>
                        ';
                    }
                } else {
                    echo '
                    <li> <a href="login.php" class="bg-white site-btn header-btn text-danger" >Login </a></li>
                    <li>  <a href="signup.php" class="site-btn header-btn">Sign Up</a>  </li>                  
                    ';
                }
                ;
                ?>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About us</a></li>
                        <li><a href="courses.php">Courses</a></li>
                        <li><a href="blog.php">News</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>