<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lessons Dashboard | Cloud Learner</title>

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

                    <?php
                    if (isset($_SESSION['lesson_alert_msg'])) {
                        echo $_SESSION['lesson_alert_msg'];
                    }

                    ?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Lessons</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                    </div>
                    <!-- content body Begin Here -->


                    <?php

                    if (isset($_REQUEST['viewlessons'])) {
                        $course_id = $_REQUEST['id'];
                        $sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo '<table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Lesson ID</th>
                                <th>Lesson Title</th>
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
                                    <span class="badge badge-success rounded-pill d-inline">' . $row["lesson_id"] .
                                    '</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["lesson_name"] . '</p>
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
                                            <p class="fw-bold mb-1">' . $row["course_name"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> Active </span>
                                </td>
                                <td>
                                    <form action="editlesson.php" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["lesson_id"] . ' ">
                                <button type="submit" name="viewlesson" value="Viewlesson" class="btn btn-primary btn-circle">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                            </form>
                            
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["lesson_id"] . '">
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
                                        <meta http-equiv="refresh" content=0; />';
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