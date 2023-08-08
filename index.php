<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | CLoudLearner</title>
    <?php 
	include 'elements/topheader.php';
	include 'database.php';
	?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <?php 
    
		include 'elements/navbar.php'
	?>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg.jpg">
        <div class="container">
            <div class="hero-text text-white">
                <h2>Get The Best Free Online Courses</h2>
                <p>Discover top-tier free online courses from leading platforms. Enhance your skills with a diverse range of subjects, 
                    including programming, business, arts, and more. Access high-quality learning materials, expert instructors, and interactive 
                    assignments to advance your knowledge and career—all without any cost.  <br> Elevate your learning journey today.
                </p>
            </div>
            
        </div>
    </section>
    <!-- Hero section end -->


    <!-- categories section -->
    <section class="categories-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Our Course Categories</h2>
                
            </div>
            <div class="row">
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/1.jpg"></div>
                        <div class="ci-text">
                            <h5>IT Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>120 Courses</span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/2.jpg"></div>
                        <div class="ci-text">
                            <h5>Web Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>70 Courses</span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/3.jpg"></div>
                        <div class="ci-text">
                            <h5>Illustration & Drawing</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>55 Courses</span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/4.jpg"></div>
                        <div class="ci-text">
                            <h5>Social Media</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>40 Courses</span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/5.jpg"></div>
                        <div class="ci-text">
                            <h5>Photoshop</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>220 Courses</span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" data-setbg="img/categories/6.jpg"></div>
                        <div class="ci-text">
                            <h5>Cryptocurrencies</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                            <span>25 Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories section end -->



  

    <!-- course section -->
    <section class="course-section spad">
        <div class="course-warp">
            <ul class="course-filter controls">
                <li class="control active" data-filter="all">All</li>
                <li class="control" data-filter=".AWS">AWS</li>
                <li class="control" data-filter=".Azure">AZURE</li>
                <li class="control" data-filter=".GCP">GCP</li>
                <li class="control" data-filter=".cloud-computing">Cloud Computing</li>
            </ul>
            <div class="row course-items-area">
                <!-- course -->
                <?php 
                // Fetch course data from the database
                $sql = "SELECT * FROM coursedetails WHERE status='1' LIMIT 6"; // Replace 'your_table_name' with your actual table name.
                $result = $conn->query($sql);

                // Check if there are any courses in the database
                if ($result->num_rows > 0) {
                while ($course = $result->fetch_assoc()) {
                // Dynamically generate the course items using the fetched data
                ?>
                <div class="mix col-lg-3 col-md-4 col-sm-6 aws <?php echo $course['category']; ?>">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="<?php echo $course['imagelocation']; ?>">
                            <div class="price">Price: <?php  echo $course['sprice'];?></div>
                            <div class="price"><?php echo $course['category']; ?></div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5><?php echo $course['course_title']; ?></h5>
                                <p class="text-truncate"><?php echo $course['coursedescription']; ?></p>
                                <div class="students"><?php echo $course['duration']; ?></div>
                            </div>
                            <div class="course-author">
                                <div class="ca-pic set-bg" data-setbg=""></div>
                                <p><?php echo $course['author']; ?></p>
                                <a href="single-course.php?course_id=<?php echo $course['course_id']; ?>"
                                    class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Enroll Now</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
                }
                } else {
                    echo "No courses found in the database.";
                }
                ?>
            </div>
        </div>
    </section>
    <!-- course section end -->



    <!-- footer section -->
    <?php 
	include 'elements/footer.php'
	?>
    <!-- footer section end -->




</html>