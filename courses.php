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





    <!-- course section -->
    <section class="course-section spad pb-0">
        <div class="course-warp">
            <ul class="course-filter controls">
                <li class="control active" data-filter="all">All</li>
                <li class="control" data-filter=".AWS">AWS</li>
                <li class="control" data-filter=".Azure">AZURE</li>
                <li class="control" data-filter=".GCP">GCP</li>
                <li class="control" data-filter=".cloudcomputing">Cloud Computing</li>
            </ul>
            <div class="row course-items-area">

                <!-- course -->

                <?php
                // Fetch course data from the database
                $sql = "SELECT * FROM coursedetails  WHERE status='1' ORDER BY course_id DESC";
                $result = $conn->query($sql);

                // Check if there are any courses in the database
                if ($result->num_rows > 0) {
                    while ($course = $result->fetch_assoc()) {
                        ?>
                        <div class="mix col-lg-3 col-md-4 col-sm-6 aws <?php echo $course['category']; ?>">
                            <div class="course-item">
                                <div class="course-thumb set-bg" data-setbg="<?php echo $course['imagelocation']; ?>">
                                    <div class="price">Rs.
                                        <?php echo $course['sprice']; ?>
                                    </div>
                                    <div class="price">
                                        <?php echo $course['category']; ?>
                                    </div>
                                </div>
                                <div class="course-info">
                                    <div class="course-text">
                                        <h5>
                                            <?php echo $course['course_title']; ?>
                                        </h5>
                                        <p class="text-truncate">
                                            <?php echo $course['coursedescription']; ?>
                                        </p>
                                        <div class="students">
                                            <?php echo $course['duration']; ?>
                                        </div>
                                    </div>
                                    <div class="course-author">
                                        <div class="ca-pic set-bg" data-setbg=""></div>
                                        <p>
                                            <?php echo $course['author']; ?>
                                        </p>
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





    <?php
    include 'elements/footer.php'
        ?>
</body>

</html>