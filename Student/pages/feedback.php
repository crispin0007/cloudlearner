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
                        <h1 class="h3 mb-0 text-gray-800">Feedback</h1>
                    </div>

                    <!-- Content Row -->

                    <?php include('../../database.php');
    include('../elements/session.php');
    if(isset($_REQUEST['feedSubmitBtn'])){
        // checking for empty field  
        if (isset($_REQUEST['feedSubmitBtn'])) {
            // checking for empty field  
            if (
                ($_REQUEST['stu_name'] == "") || ($_REQUEST['message'] == "") || ($_REQUEST['stu_id'] == "") )
             {
                $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
            } else {
                $stu_name = $_REQUEST['stu_name']; 
                $message = $_REQUEST['message']; 
                $stu_id = $_REQUEST['stu_id']; 
                
        
                $sql = "INSERT INTO feedback (stu_name, message, stu_id) 
                    VALUES ('$stu_name', '$message','$stu_id') ";
                if ($conn->query($sql) == TRUE) {
                    $alert_msg = '<div class="alert alert-success">Feedback Added Successfully</div>';
                } else {
                    $alert_msg = '<div class="alert alert-danger">Unable To add Feedback </div>';
                }
                }
                }
                }
                ?>
                    <!-- Page Wrapper -->
                    <div id="wrapper">


                        <!-- End of Sidebar -->

                        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

                            <!-- Main Content -->
                            <div id="content">



                                <!-- Begin Page Content -->
                                <div class="container-fluid">

                                    <!-- Page Heading -->
                                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                        <h1 class="h3 mb-0 text-gray-800">Write Feedback Post</h1>
                                        <span><?php if(isset($alert_msg)){ echo $alert_msg;} ?></span>
                                    </div>


                                    <!-- content body Begin Here -->
                                    <form method="post" enctype="multipart/form-data">

                                        <!-- blog title -->

                                        <div class=" form-outline mb-4">
                                            <input type="text" id="stu_name" name="stu_name" class="form-control"
                                                value="<?php echo $stu_name ?>" readonly />
                                            <label class="form-label" for="stu_name">Student Name</label>
                                        </div>
                                        <div class=" form-outline mb-4">
                                            <input type="text" id="stu_id" name="stu_id" class="form-control"
                                                value="<?php echo $stu_id ?>" readonly />
                                            <label class="form-label" for="stu_id">Student ID</label>
                                        </div>

                                        <!-- description input -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="message" name="message"
                                                rows="4"></textarea>
                                            <label class="form-label" for="message">Feedback</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="feedSubmitBtn"
                                            name="feedSubmitBtn">Add Feedback</button>
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
                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



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