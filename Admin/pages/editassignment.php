<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Course Dashboard | Cloud Learner</title>

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

    if (isset($_REQUEST['viewassignment'])) {
        $assignment_id = $_REQUEST['id'];
        $sql = "SELECT * FROM assignment WHERE assignment_id=$assignment_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Now you can use $row to access the data from the fetched row.
        } else {
            echo "No course found with the given ID.";

            // Or handle the situation when no course is found with the given ID.
        }
    }



    if (isset($_REQUEST['assignmentEditBtn'])) {
        // checking for empty field  
        if (
            ($_REQUEST['assignment_name'] == "") || ($_REQUEST['assignment_description'] == "") ||
            ($_REQUEST['course_id'] == "") || ($_REQUEST['course_title'] == "")
        ) {
            $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
        } else {
            $assignment_id = $_REQUEST['assignment_id'];
            $assignment_name = $_REQUEST['assignment_name'];
            $assignment_description = $_REQUEST['assignment_description'];
            $course_id = $_REQUEST['course_id'];
            $course_title = $_REQUEST['course_title'];
            if (empty($_FILES['assignmentdoc']['name'])) {
                $doc_folder = $_REQUEST['documentlocation'];
                $doc_folder_location = str_replace('../../', '', '../../img/courseimg/' . $doc_folder);
            } else {
                $assignmentdoc = $_FILES['assignmentdoc']['name'];
                $assignmentlinktemp = $_FILES['assignmentdoc']['tmp_name'];
                $doc_folder = '../../img/assignment/' . $assignmentdoc;
                $doc_folder_location = str_replace('../../', '', '../../img/assignment/' . $assignmentdoc);
                move_uploaded_file($assignmentlinktemp, $doc_folder);

            }

            $sql = "UPDATE assignment SET assignment_name='$assignment_name', assignment_description='$assignment_description', 
            doc_location='$doc_folder', course_id='$course_id', course_title='$course_title' , doc_location_path='$doc_folder_location' WHERE assignment_id=$assignment_id";

            if ($conn->query($sql) == TRUE) {
                $alert_msg = '<div class="alert alert-success">Assignment Edited Successfully</div>';
            } else {
                $alert_msg = '<div class="alert alert-danger">Unable To Edit  assignment </div>';
            }
        }
    }

    ?>


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
                        <h1 class="h3 mb-0 text-gray-800">Edit Assignment</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                        </span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <!-- Course_ID -->
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="text" id="assignment_id" name="assignment_id" class="form-control"
                                        value="<?php if (isset($row['assignment_id']))
                                            echo $row['assignment_id']; ?>" readonly />
                                    <label class="form-label" for="course_id">Assignment ID </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="text" id="course_id" name="course_id" class="form-control" value="<?php if (isset($row['course_id']))
                                        echo $row['course_id']; ?>" readonly />
                                    <label class="form-label" for="course_id">Course ID </label>
                                </div>
                            </div>
                            <!-- Course Name -->
                            <div class="col-9">
                                <div class="form-outline">
                                    <input type="text" id="course_title" name="course_title" class="form-control" value="<?php if (isset($row['course_title']))
                                        echo $row['course_title']; ?>" readonly />
                                    <label class="form-label" for="course_title">Course Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- assignment Name -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="assignment_name" name="assignment_name" class="form-control" value="<?php if (isset($row['assignment_name']))
                                echo $row['assignment_name']; ?>" />
                            <label class="form-label" for="assignment_name">Assignment Name</label>
                        </div>


                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="assignment_description" name="assignment_description"
                                rows="4"><?php if (isset($row['assignment_description']))
                                    echo $row['assignment_description']; ?></textarea>
                            <label class="form-label" for="assignment_description">Assignment Description</label>
                        </div>
                        <!-- upload image file  -->

                        <div class="form-outline mb-5">
                            <input type="hidden" id="documentlocation" name="documentlocation" class="form-control"
                                value="<?php if (isset($row['doc_location']))
                                    echo $row['doc_location']; ?>" />
                            <a class="btn btn-outline-danger mb-2"
                                href="<?php if (isset($row['doc_location']))
                                    echo $row['doc_location']; ?>"
                                download>Download Task</a><br>
                            <label for="assignmentdoc">Upload Assignment Document</label>
                            <input type="file" class="form-control-file" id="assignmentdoc" name="assignmentdoc" accept="application/msword, application/vnd.ms-excel, 
                            application/vnd.ms-powerpoint, text/plain, application/pdf, image/*">
                        </div>
                        <hr class="hr hr-blurry">



                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="assignmentEditBtn"
                            name="assignmentEditBtn">Edit assignment</button>
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