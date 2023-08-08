<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Password | Cloud Learner</title>

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
                <?php
                if (isset($_REQUEST['changePass'])) {
                    // checking for empty field  
                    if (($_REQUEST['insname'] == "") || ($_REQUEST['insemail'] == "") || ($_REQUEST['newpass'] == "")) {
                        $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
                    } else {
                        $insid = $_REQUEST['insid'];
                        $newpass = $_REQUEST['newpass'];
                        $confirmpass = $_REQUEST['confirmpass'];

                        if ($newpass === $confirmpass) {
                            $sql = "UPDATE instructor SET instructor_pass='$newpass' WHERE instructor_id='$instructor_id'";
                            if ($conn->query($sql) == TRUE) {
                                $alert_msg = '<div class="alert alert-success">Password Updated Successfully Updated Successfully</div>';
                                session_destroy();
                                echo "<script>location.href='../../index.php';</script>";
                                // echo'<meta http-equiv="refresh" content=0;>URL=?edited';
                            } else {
                                $alert_msg = '<div class="alert alert-danger">Unable To Update Password </div>';
                            }
                        } else {
                            $alert_msg = '<div class="alert alert-danger">Password Not Matched </div>';
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

                                        <div class="col-lg-8">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Instructoor ID</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="insid" name="insid"
                                                                class="form-control" value="<?php echo $instructor_id ?> "
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Instructor Name </p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="insname" name="insname"
                                                                class="form-control" value="<?php echo $instructor_name ?> "
                                                                readonly />
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Email</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p class="text-muted mb-0"><input type="text" id="insemail"
                                                                    name="insemail" class="form-control"
                                                                    value="<?php echo $insEmail ?> " readonly /></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">New Password</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p class="text-muted mb-0"><input type="password"
                                                                    id="newpass" name="newpass" class="form-control"
                                                                    placeholder="********" /></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Confirm Password</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <p class="text-muted mb-0"><input type="password"
                                                                    id="confirmpass" name="confirmpass"
                                                                    class="form-control" placeholder="********" /></p>
                                                        </div>
                                                    </div>
                                                    <hr>


                                                    <div class="row text-center mt-2">
                                                        <div class="d-flex justify-content-center mb-2 text-center">
                                                            <button type="submit" class="btn btn-danger btn-lg mb-4"
                                                                id="changePass" name="changePass">Change
                                                                Password</button>

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