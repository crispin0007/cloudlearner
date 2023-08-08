<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Lesson Dashboard | Cloud Learner</title>

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

    if (isset($_REQUEST['viewlesson'])) {
        $lesson_id = $_REQUEST['id'];
        $sql = "SELECT * FROM lesson WHERE lesson_id=$lesson_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Now you can use $row to access the data from the fetched row.
        } else {
            echo "No lesson found with the given ID.";

            // Or handle the situation when no course is found with the given ID.
        }
    }



    if (isset($_REQUEST['lessonEditBtn'])) {
        // checking for empty field  
        if (
            ($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_descrip'] == "") ||
            ($_REQUEST['lesson_id'] == "") || ($_REQUEST['course_title'] == "")
        ) {
            $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
        } else {
            $lesson_id = $_REQUEST['lesson_id'];
            $lesson_name = $_REQUEST['lesson_name'];
            $lesson_descrip = $_REQUEST['lesson_descrip'];
            $course_id = $_REQUEST['course_id'];
            $course_name = $_REQUEST['course_title'];
            if (empty($_FILES['lessonvideo']['name'])) {

                $vid_folder = $_REQUEST['videolocation1'];
                $vlocation = str_replace('../../', '', '../../img/courseimg/' . $vid_folder);
            } else {
                $lessonvideo = $_FILES['lessonvideo']['name'];
                $lessonlinktemp = $_FILES['lessonvideo']['tmp_name'];
                $vid_folder = '../../img/videoes/' . $lessonvideo;
                $video_folder_location = str_replace('../../', '', '../../img/videoes/' . $lessonvideo);
                move_uploaded_file($lessonlinktemp, $vid_folder);

            }


            $sql = "UPDATE lesson SET lesson_name='$lesson_name', lesson_link='$vid_folder', lesson_descrip='$lesson_descrip', 
            vlocation='$vlocation', course_name='$course_name' WHERE lesson_id=$lesson_id";

            if ($conn->query($sql) == TRUE) {
                $lesson_alert_msg = '<div class="alert alert-success"> Lesson Edited Successfully</div>';
                $_SESSION['lesson_alert_msg'] = $lesson_alert_msg;
                header('Location: lessons.php');
            } else {
                $lesson_alert_msg = '<div class="alert alert-danger">Unable To Edit New Lesson </div>';
                $_SESSION['lesson_alert_msg'] = $lesson_alert_msg;
                header('Location: lessons.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Courses</h1>
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
                                    <input type="text" id="lesson_id" name="lesson_id" class="form-control"
                                        value="<?php if (isset($row['lesson_id']))
                                echo $row['lesson_id']; ?>" readonly />
                                    <label class="form-label" for="course_id">Lesson ID </label>
                                </div>
                            </div>
                            <!-- Course Name -->
                            <div class="col-9">
                                <div class="form-outline">
                                    <input type="text" id="course_title" name="course_title" class="form-control"
                                        value="<?php if (isset($row['course_name']))
                                            echo $row['course_name']; ?>"
                                        readonly />
                                    <label class="form-label" for="course_name">Course Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- lesson Name -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="lesson_name" name="lesson_name" class="form-control"
                                value="<?php if (isset($row['lesson_name']))
                                    echo $row['lesson_name']; ?>" />
                            <label class="form-label" for="lesson_name">Lesson Name</label>
                        </div>


                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="lesson_descrip" name="lesson_descrip"
                                rows="4"><?php if (isset($row['lesson_descrip']))
                                    echo $row['lesson_descrip']; ?></textarea>
                            <label class="form-label" for="lesson_descrip">Lesson Description</label>
                        </div>
                        <!-- upload image file  -->

                        <div class="form-outline mb-5">
                            <input type="text" id="videolocation1" name="videolocation1" class="form-control"
                                value="<?php if (isset($row['lesson_link']))
                                    echo $row['lesson_link']; ?>" />

                            <label for="lessonvideo">Upload Lesson Video</label>
                            <input type="file" class="form-control-file" id="lessonvideo" name="lessonvideo"
                                accept="video/*">
                        </div>


                        <!--Submit Button -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="lessonEditBtn"
                            name="lessonEditBtn">Edit Lesson</button>
                        <a class=" btn btn-danger btn-lg mb-4" href="dashboard.php">Close</a>


                </div>



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