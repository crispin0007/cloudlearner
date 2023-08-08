<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Assignment | Cloud Learner</title>

    <!-- Custom fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles -->
    <link href="../../css/admin/admin-dash.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php
    include('../../database.php');
    include('../elements/session.php');
    if (isset($_REQUEST['assignSumBtn'])) {
        // checking for empty field  
        if ( 
            ($_REQUEST['assignment_name'] == "") || ($_REQUEST['assignment_description'] == "") ||
            ($_REQUEST['course_id'] == "") || ($_REQUEST['course_title'] == "")
        ) {
            $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
        } else {
            $assignment_name = $_REQUEST['assignment_name'];
            $assignment_description = $_REQUEST['assignment_description'];
            $course_id = $_REQUEST['course_id'];
            $course_title = $_REQUEST['course_title'];
            $assignmentdoc = $_FILES['assignmentdoc']['name'];
            $assignmentlinktemp = $_FILES['assignmentdoc']['tmp_name'];
            $doc_folder = '../../img/assignment/' . $assignmentdoc;
            $doc_folder_location = str_replace('../../', '', '../../img/assignment/' . $assignmentdoc);
            move_uploaded_file($assignmentlinktemp, $doc_folder);


            $sql = "INSERT INTO assignment (assignment_name, assignment_description, doc_location, course_id, course_title, doc_location_path) 
                                VALUES ('$assignment_name', '$assignment_description', '$doc_folder','$course_id','$course_title', '$doc_folder_location') ";
            if ($conn->query($sql) == TRUE) {
                $alert_msg = '<div class="alert alert-success">New assignment Added Successfully</div>';
            } else {
                $alert_msg = '<div class="alert alert-danger">Unable To Add New assignment </div>';
            }
        }
    }
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
                        <h1 class="h3 mb-0 text-gray-800">Add New assignment</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                        </span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">
                        <?php
                        // Access the session data here
                        if (isset($_SESSION['course_id']) && isset($_SESSION['course_title'])) {
                            $course_id = $_SESSION['course_id'];
                            $course_title = $_SESSION['course_title'];
                        } else {
                            // Handle the case when the session data is not available
                            echo "Session data not found.";
                        }
                        ?>


                        <div class="row mb-4">
                            <!-- Course_ID -->
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="text" id="course_id" name="course_id" class="form-control"
                                        value="<?php echo "$course_id" ?>" readonly />
                                    <label class="form-label" for="course_id">Course ID </label>
                                </div>
                            </div>
                            <!-- Course Name -->
                            <div class="col-9">
                                <div class="form-outline">
                                    <input type="text" id="course_title" name="course_title" class="form-control"
                                        value="<?php echo "$course_title" ?>" readonly />
                                    <label class="form-label" for="course_title">Course Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- assignment Name -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="assignment_name" name="assignment_name" class="form-control" />
                            <label class="form-label" for="assignment_name">Assignment Name</label>
                        </div>


                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="assignment_description" name="assignment_description"
                                rows="4"></textarea>
                            <label class="form-label" for="assignment_description">Assignment Description</label>
                        </div>
                        <!-- upload image file  -->

                        <div class="form-outline mb-5">
                            
                            <label for="courseimage">Upload assignment Document</label>
                            <input type="file" class="form-control-file" id="assignmentdoc" name="assignmentdoc" accept="application/msword, application/vnd.ms-excel, 
                            application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
                        </div>


                        <!--Submit Button -->
                        <button type=" submit" class="btn btn-primary btn-lg mb-4" id="assignSumBtn"
                                name="assignSumBtn">Add Assignment</button>
                            <a class=" btn btn-danger btn-lg mb-4" href="dashboard.php">Close</a>
                    </form>

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