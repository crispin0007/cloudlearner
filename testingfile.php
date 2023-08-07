<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
	include 'elements/topheader.php';
	include 'database.php';
	?>

    
    <title>Admin Dashboard | Cloud Learner</title>


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

\


    <!-- single course section -->
    <section class="single-course spad pb-0">
        <div class="container">
            <div class="course-meta-area">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="course-note">Featured Course</div>
                        <h3>
                            <?php echo "$course_name"; ?>
                        </h3>
                        <div class="course-metas">
                            <div class="course-meta">
                                <div class="course-author">
                                    <div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
                                    <h6>Teacher</h6>
                                    <p><?php echo $row['author'] ?>, <span>Developer</span></p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6><?php echo $row['category'] ?></h6>
                                    <p>Development</p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6>Students</h6>
                                    <p>120 Registered Students</p>
                                </div>
                            </div>
                            <div class="course-meta">
                                <div class="cm-info">
                                    <h6>Reviews</h6>
                                    <p>2 Reviews <span class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star is-fade"></i>
                                        </span></p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="site-btn price-btn"><del><sup> Rs. <?php echo $row['oprice'] ?></sup></del>
                            Rs.
                            <?php echo $row['sprice'] ?></a>
                        <a href="checkout.php?course_id=<?php echo $course_id; ?>" class="site-btn buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <img src="<?php echo $row['imagelocation'] ?>" alt="" class="course-preview" width="100%">
            <div class="row">

                <div class="">
                    <div class="h1">Description</div>
                    <p><?php echo $row['coursedescription'] ?></p>
                </div>



                <div class="">
                   
                <?php 
                       
                        if($result1 ->num_rows > 0){
                            echo '<table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                <th>Status</th>
                                    <th>Course Title</th>
                                </tr>
                            </thead>
                            <tbody>';
            
                    while ($row1 = $result1->fetch_assoc()) {
                        echo '<tr>
                        <td>
                        <span class="badge badge-success rounded-pill d-inline"> ' . $row1["lesson_name"] . ' </span>
                    </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row1["lesson_descrip"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                
                                
                                
                            </tr>';
                    }
            
                    echo '</tbody>
                        </table>';
                        }else{
                            echo "0 results";
                        }; ?>
                </div>

            </div>
    </section>
    <!-- single course section end -->


    

    <!-- footer section -->
    <?php 
	include 'elements/footer.php'
	?>
</body>

</html>