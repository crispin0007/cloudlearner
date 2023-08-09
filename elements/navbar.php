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
                <?php

                session_start();
                if (isset($_SESSION['stu_is_login']) || isset($_SESSION['ins_is_login'])) {
                    echo '
                   <a href="logout.php" class="bg-white site-btn header-btn text-danger">Logout </a> ';
                    if (isset($_SESSION['stu_is_login'])) {
                        echo '
                       <a href="Student/pages/dashboard.php" class="site-btn header-btn">My Profile</a>
                   ';
                    } elseif (isset($_SESSION['ins_is_login'])) {
                        echo '
                         <a href="Instructor/pages/dashboard.php" class="site-btn header-btn">My Profile</a>
                       ';
                    }
                } else {
                    echo '
                    <a href="login.php" class="bg-white site-btn header-btn text-danger" >Login </a>
                     <a href="signup.php" class="site-btn header-btn">Sign Up</a>                    
                   ';
                }
                ;

                ?>
                <nav class="main-menu">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="aboutus.php">ABOUT Us</a></li>
                        <li><a href="courses.php">COURSE</a></li>
                        <li><a href="blog.php">BLOGS</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>