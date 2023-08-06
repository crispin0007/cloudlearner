<div class="container mt-4">
        <div class="row">
            
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls class="embed-responsive-item" id="videoPlayer">
                        <source src="your_video_url.mp4" type="video/mp4">
                       
                    </video>
                </div>
            </div>
            
            <div class="col-md-4 mt-3 mt-md-0">
                <div class="list-group" id="playlist">
                    
                    <a href="#" class="list-group-item list-group-item-action active" data-video-url="your_video_url.mp4">
                        Video 1
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" data-video-url="your_video_url2.mp4">
                        Video 2
                    </a>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // When a playlist item is clicked, change the video source and play it
            $("#playlist a").on("click", function (e) {
                e.preventDefault();
                $("#playlist a").removeClass("active");
                $(this).addClass("active");
                var videoUrl = $(this).data("video-url");
                $("#videoPlayer source").attr("src", videoUrl);
                $("#videoPlayer")[0].load();
                $("#videoPlayer")[0].play();
            });
        });
    </script>


<!-- =========================================================== -->

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
                <?php
                if (isset($_REQUEST['changePass'])) {
                    // checking for empty field  
                    if (($_REQUEST['newpass'] == "") || ($_REQUEST['confirmpass'] == "")) {
                        $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
                    } else {
                        $newpass = $_REQUEST['newpass'];
                        $confirmpass = $_REQUEST['confirmpass'];
                        $stu_id = $_REQUEST['stuid'];
                        if (($_REQUEST['newpass'] == $_REQUEST['confirmpass'])) {
                            $sql = "UPDATE student SET stu_pass='$newpass' WHERE stu_id='$stu_id'";
                            if ($conn->query($sql) == TRUE) {
                                $alert_msg = '<div class="alert alert-success">Password Updated Successfully</div>';
                                session_destroy();
                                echo "<script>location.href='../../index.php';</script>";
                            } else {
                                $alert_msg = '<div class="alert alert-danger">Incorrect Password </div>';
                            }
                        }
                    }
                }
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Pasword</h1>
                    </div>

                    <!-- Content Row -->
            </form action="" method="POST">
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Student ID </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="stuid" name="stuid" class="form-control"
                                            value="<?php echo $stu_id ?> " readonly />
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Name </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="text" id="stdname" name="stdname" class="form-control"
                                            value="<?php echo $stu_name ?> " readonly />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="text" id="stdemail" name="stdemail"
                                                class="form-control" value="<?php echo $stu_email ?> " readonly /></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">New Password<span class="text-danger">*</span></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="password" id="newpass" name="newpass"
                                                class="form-control" placeholder="********" required /></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Confirm Password<span class="text-danger">*</span></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><input type="password" id="confirmpass"
                                                name="confirmpass" class="form-control" placeholder="********"
                                                required /></p>
                                    </div>
                                </div>
                                <hr>


                                <div class="row text-center mt-2">
                                    <div class="d-flex justify-content-center mb-2 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="changePass"
                                            name="changePass">Change Password</button>

                                    </div>
                                </div>
            </form>
                            </div>

                        </div>
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


    <?php include('../elements/jsfile.php') ?>



</body>

</html>