<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Dashboard | Cloud Learner</title>

    <!-- Custom fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles -->
    <link href="../../css/admin/admin-dash.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
                include('../../database.php');
                include('../elements/sidebar.php');
                include('../elements/session.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Enrolled Course</h1>
                    </div>
                    <div class="row">
                        <?php
                if (isset($stuLogEmail)) {
                    // Assuming you have already established a valid database connection
                    
                    $sql = "SELECT py.order_id, c.course_id, c.course_title, c.duration, c.category, c.coursedescription, c.courseimage, c.author
                            FROM payment AS py
                            JOIN coursedetails AS c ON c.course_id = py.course_id
                            WHERE py.stu_email = '$stuLogEmail' AND py.status = 'success'";

                    $result = $conn->query($sql);

                    if ($result) {
                        if ($result->num_rows > 0) {
                            // Loop through the query results and display course information
                            while ($row = $result->fetch_assoc()) {
                                echo '
                                    
                                        <div class="col col-lg-6">
                                            <div class="card ml-2">
                                                <img src="' . $row['courseimage'] . '"
                                                    class="card-img-top" alt="Fissure in Sandstone" />
                                                <div class="card-body ">
                                                <h5 class="card-title">' . $row['course_title'] . '</h5>
                                                <p class="card-text text-truncate">' . $row['coursedescription'] . '</p>
                                                <a href="#" class="btn btn-outline-success">Author: ' . $row['author'] . '</a>
                                                <a href="#" class="btn btn-outline-danger">Category: ' . $row['category'] .'</a>
                                                <a href="#" class="btn btn-outline-warning">Duration: ' . $row['duration'] . '</a>
                                                <a href="mylearning.php?course_id=' . $row['course_id'] . '" class="btn btn-primary btn-lg">Go To My Learning</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                
                            ';
                        }
                    } else {
                        echo '<div class="container-fluid d-flex align-items-center justify-content-center" ">
                        <div class="card border-0 bg-light shadow animated-card">
                          <div class="card-body text-center">
                            <p class="h4 font-weight-bold">No Course is Enrolled</p>
                            <div>
                              <a href="../../courses.php" class="btn btn-danger btn-lg">Enroll Now</a>
                            </div>
                          </div>
                        </div>
                      </div>';
                    }
                } else {
                    echo 'Error executing the SQL query.';
                }
            }
        ?>
                    </div>

                    <!-- Content Row -->

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
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <?php include('../elements/jsfile.php')    ?>



</body>

</html>