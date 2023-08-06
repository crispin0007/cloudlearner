<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assignment | Cloud Learner</title>

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

        include('../elements/sidebar.php');

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
                        <h1 class="h3 mb-0 text-gray-800">Assignments</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                    </div>
                    <!-- content body Begin Here -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 border border-primary rounded">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small border border-primary "
                                placeholder="EnterCourse ID" aria-label="Search" id="checkid" name="checkid">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php

                    // Check if the 'checkid' parameter is set and not empty
                    if (isset($_REQUEST['checkid']) && !empty($_REQUEST['checkid'])) {
                        $checkid = $_REQUEST['checkid'];

                        // Sanitize the input to prevent SQL injection
                        $checkid = mysqli_real_escape_string($conn, $checkid);

                        // Fetch the specific course details from the database using prepared statement
                        $sql = "SELECT * FROM coursedetails WHERE course_id = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("s", $checkid);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result && $result->num_rows > 0) {
                            $row = $result->fetch_assoc();

                            // Save the course details to session variables
                            $_SESSION['course_id'] = $row['course_id'];
                            $_SESSION['course_title'] = $row['course_title'];
                        } else {
                            // Handle the case when the course_id is not found in the database
                            $_SESSION['course_id'] = null;
                            $_SESSION['course_title'] = null;
                        }
                    }
                    ?>


                    <?php if (isset($_SESSION['course_id']) && isset($_SESSION['course_title'])): ?>
                        <h3 class="text-center pt-2 text-black">Course ID:
                            <?php echo $_SESSION['course_id']; ?>
                        </h3>
                        <div class="bg-gradient-primary text-white p-2 mt-2 rounded text-center">
                            <h2>
                                <?php echo $_SESSION['course_title']; ?>
                            </h2>
                        </div>
                    <?php endif; ?>

                    <?php
                    if (isset($_SESSION['course_id'])) {

                    }
                    if (isset($_SESSION['course_id']) && isset($_SESSION['course_title'])) {
                        $course_id = $_SESSION['course_id'];
                        $course_title = $_SESSION['course_title'];
                        echo '
            <div>
                <a href="addassignment.php" class="btn btn-primary btn-circle btn-lg "
                    style="position: fixed;bottom: 10px;right: 20px;margin-bottom: 30px;">
                    <i class="fas fa-plus fa-2x"></i>
                </a>
            </div>
            ';
                    }
                    ?>
                    <?php
                    if (isset($_REQUEST['checkid']) && ($_REQUEST['checkid'] != '')) {
                        $sql = "SELECT * FROM assignment WHERE course_id= {$_REQUEST['checkid']}";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Assignment ID</th>
                                <th>Assignment Title</th>
                                <th>Course ID</th>
                                <th>Course Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>';

                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">' . $row["assignment_id"] .
                                    '</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["assignment_name"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["course_id"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["course_title"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                 
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> Active </span>
                                </td>
                                <td>
                                    <form action="editassignment.php" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["assignment_id"] . ' ">
                                <button type="submit" name="viewassignment" value="Viewassignment" class="btn btn-primary btn-circle">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </form>
                            
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["assignment_id"] . '">
                                        <button type="submit" name="delete" value="Delete" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td> 
                            </tr>';
                            }
                            echo '</tbody>
                        </table>';
                        } else {
                            echo "No Lesons found. Add Lesson to The Course";
                        }
                        ; // delete course 
                        if (isset($_REQUEST['delete'])) {
                            $sql = "DELETE FROM lesson WHERE lesson_id={$_REQUEST['id']}";
                            if ($conn->query($sql) == TRUE) {
                                echo '
                                        <meta http-equiv="refresh" content=0;URL=?deleted />';
                            } else {
                                echo "Unable to delete data";
                            }


                        }
                    } else {
                        $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
                    }
                    ?>


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



    <?php include('../elements/jsfile.php') ?>


</body>

</html>