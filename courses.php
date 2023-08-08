<!DOCTYPE html>
<html lang="en">

<head>
    <title>Courses | CloudLearner</title>
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


    <!-- Page info -->
    <div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="#">Home</a>
                <span>Courses</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- search section -->
    <section class="search-section ss-other-page">
        <div class="container">
            <div class="search-warp">
                <div class="section-title text-white">
                    <h2><span>Search your course</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!-- search form -->
                        <form class="course-search-form">
                            <input type="text" placeholder="Course">
                            <input type="text" class="last-m" placeholder="Category">
                            <button class="site-btn btn-dark">Search Couse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->


    <!-- course section -->
    <section class="course-section spad pb-0">
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
                $sql = "SELECT * FROM coursedetails WHERE status='1'"; 
                $result = $conn->query($sql);

                // Check if there are any courses in the database
                if ($result->num_rows > 0) {
                while ($course = $result->fetch_assoc()) {
                ?>
                <div class="mix col-lg-3 col-md-4 col-sm-6 aws <?php echo $course['category']; ?>">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="<?php echo $course['imagelocation']; ?>">
                            <div class="price">Rs. <?php echo $course['sprice']; ?></div>
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



            <div class="featured-courses">
                <div class="featured-course course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/f-1.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 pl-0">
                            <div class="course-info">
                                <div class="course-text">
                                    <div class="fet-note">Featured Course</div>
                                    <h5>HTNL5 & CSS For Begginers</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu
                                        efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum.
                                        Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut
                                        vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum.
                                        Nunc vulputate aliquet tristique. Integer et pellentesque urna</p>
                                    <div class="students">120 Students</div>
                                </div>
                                <div class="course-author">
                                    <div class="ca-pic set-bg" data-setbg="img/authors/1.jpg"></div>
                                    <p>William Parker, <span>Developer</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-course course-item">
                    <div class="course-thumb set-bg" data-setbg="img/courses/f-2.jpg">
                        <div class="price">Price: $15</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 pr-0">
                            <div class="course-info">
                                <div class="course-text">
                                    <div class="fet-note">Featured Course</div>
                                    <h5>HTNL5 & CSS For Begginers</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu
                                        efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum.
                                        Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut
                                        vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum.
                                        Nunc vulputate aliquet tristique. Integer et pellentesque urna</p>
                                    <div class="students">120 Students</div>
                                </div>
                                <div class="course-author">
                                    <div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
                                    <p>William Parker, <span>Developer</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course section end -->





    <?php 
	include 'elements/footer.php'
	?>
</body>

</html>
