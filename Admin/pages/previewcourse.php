<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog | Cloud Learner</title>

    <!-- Custom fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles -->
    <link href="../../css/admin/admin-dash.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php include('../../database.php');
    include('../elements/session.php');
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include('../elements/sidebar.php')
            ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include('../elements/topnavbar.php')
                    ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Preview Course</h1>

                    </div>
                    <?php
                    if (isset($_REQUEST['previewcourse'])) {
                        $course_id = $_REQUEST['id'];
                        $sql = "SELECT * FROM coursedetails WHERE course_id='$course_id'";
                        $result = $conn->query($sql);
                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '
                            <section class="single-course spad pb-0">
                            <div class="container">
                            <div class="course-meta-area">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="course-note badge badge-warning rounded-pill d-inline">Pending... </div>
                                        <h3>
                                            ' . $row['course_title'] . '
                                        </h3>
                                        <form action="" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="' . $row["course_id"] . '">
                                    <button type="submit" name="approvecourse" value="approvecourse" class="btn btn-success btn-lg btn-circle" style="position: fixed;bottom: 10px;right: 20px;margin-bottom: 150px;">
                                        <i class="fa-solid fa-check"></i>
                                    </button>
                                    <a  href ="approvecourse.php"class="btn btn-danger btn-lg btn-circle" style="position: fixed;bottom: 10px;right: 20px;margin-bottom: 80px;">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                        <div class="course-metas">
                                            <div class="course-meta">
                                                <div class="course-author">
                                                    <div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
                                                    
                                                    <p>
                                                    ' . $row['author'] . '  , <span>Developer</span>
                                                    </p>
                                                </div>
                                            </div>
                                           
                                            <div class="course-meta">
                                                <div class="cm-info">
                                                    <h6>
                                                    ' . $row['category'] . '
                                                    </h6>
                                                    <p>Development</p>
                                                </div>
                                            </div>
                                            <img src="' . $row['courseimage'] . '" height="500px" width="100%"/>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <img src="<?php echo $row?>" alt="" class="course-preview" width="100%">
                            <div class="row">

                                <div class="">
                                    <div class="h1">Description</div>
                                    <p>
                                    ' . $row['coursedescription'] . '
                                    </p>
                                </div>

                            </div>
                    </section>
                            ';

                            // Now you can use $row to access the data from the fetched row.
                        } else {
                            echo "No Student found with the given ID.";

                            // Or handle the situation when no course is found with the given ID.
                        }
                    }
                    if (isset($_REQUEST['approvecourse'])) {
                        $sql = "UPDATE coursedetails SET  status='1' WHERE course_id={$_REQUEST['id']}";
                        if ($conn->query($sql) == TRUE) {
                            echo '<div class="alert alert-success">Course Approved</div>';
                            echo '<meta http-equiv="refresh" content=0;URL=?approved />';
                        } else {
                            echo "Unable to Approve Course";
                        }
                    }
                    ?>

                    <!-- ========================================================= -->




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include('../elements/footer.php')
                ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=" scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <?php include('../elements/jsfile.php') ?>


</body>

</html>