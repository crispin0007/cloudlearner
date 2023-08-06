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
        <?php

        if (isset($_SESSION['stu_name'])) {
            $student_name = $_SESSION['stu_name'];
        }
        
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
                <?php
                if (isset($_REQUEST['stdUpdateBtn'])) {
                    // checking for empty field  
                    if (($_REQUEST['stdname'] == "") || ($_REQUEST['stdemail'] == "") || ($_REQUEST['stdocc'] == "")) {
                        $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
                    } else {
                        $stdname = $_REQUEST['stdname'];
                        $stdemail = $_REQUEST['stdemail'];
                        $stdocc = $_REQUEST['stdocc'];
                        if (empty($_FILES['profilepic']['name'])) {

                            $img_folder = $_REQUEST['profilepic1'];
                            $_SESSION['img_folder'] = $img_folder;
                            $img_folder_location = str_replace('../../', '', '../../img/courseimg/' . $img_folder);
                        } else {
                            $profilepic = $_FILES['profilepic']['name'];
                            $profilepictemp = $_FILES['profilepic']['tmp_name'];
                            $img_folder = '../../img/profilepic/' . $profilepic;
                            $img_folder_location = str_replace('../../', '', '../../img/profilepic/' . $profilepic);
                            move_uploaded_file($profilepictemp, $img_folder);


                        }


                        $sql = "UPDATE student SET stu_name='$stdname', stu_email='$stdemail', stu_occ='$stdocc', stu_img='$img_folder',stu_img_path='$img_folder_location'
                        WHERE stu_id='$stu_id'";
                        if ($conn->query($sql) == TRUE) {
                            $alert_msg = '<div class="alert alert-success">Student Updated Successfully</div>';
                            // echo'<meta http-equiv="refresh" content=0;>URL=?edited';
                        } else {
                            $alert_msg = '<div class="alert alert-danger">Unable To Update Student </div>';
                        }
                    }
                }
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile Setting</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                        </span>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <section style="background-color: #eee;">
                            <div class="container py-5">

                                <form>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card mb-4">
                                                <div class="card-body text-center">
                                                    <img src="<?php if (isset($row['stu_img']))
                                                        echo $row['stu_img']; ?>"
                                                        alt="avatar" class="rounded-circle img-fluid"
                                                        style="width: 300px; height:300px;">
                                                    <h5 class="my-3">
                                                        <?php echo $stu_name ?>
                                                    </h5>
                                                    <h5 class="my-3">
                                                        <?php echo $stu_email ?>
                                                    </h5>
                                                    <p class="text-muted mb-1">
                                                        <?php echo $stu_occ ?>
                                                    </p>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Student ID</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="stdid" name="stdid"
                                                                class="form-control" value="<?php echo $stu_id ?> "
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Name </p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="stdname" name="stdname"
                                                                class="form-control" value="<?php echo $stu_name ?> " />
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Email</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p class="text-muted mb-0"><input type="text" id="stdemail"
                                                                    name="stdemail" class="form-control"
                                                                    value="<?php echo $stu_email ?> " /></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Occupation</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p class="text-muted mb-0"><input type="text" id="stdocc"
                                                                    name="stdocc" class="form-control"
                                                                    value="<?php echo $stu_occ ?> " /></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Change Profile Picture</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="hidden" id="profilepic1" name="profilepic1"
                                                                class="form-control"
                                                                value="<?php if (isset($row['stu_img']))
                                                                    echo $row['stu_img']; ?>" />
                                                            <input type="file" class="form-control-file" id="profilepic"
                                                                name="profilepic"
                                                                accept="image/png, image/gif, image/jpeg">
                                                        </div>
                                                    </div>

                                                    <div class="row text-center mt-2">
                                                        <div class="d-flex justify-content-center mb-2 text-center">
                                                            <button type="submit" class="btn btn-primary btn-lg mb-4"
                                                                id="stdUpdateBtn" name="stdUpdateBtn">Edit
                                                                Proffile</button>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <form>
                        </section>
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