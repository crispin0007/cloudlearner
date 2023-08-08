<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Instructor | Cloud Learner</title>

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
    if (isset($_REQUEST['insSubmitBtn'])) {
        // checking for empty field  
        if (
            ($_REQUEST['insname'] == "") || ($_REQUEST['insemail'] == "") || ($_REQUEST['inspass'] == "") ||
            ($_REQUEST['inspos'] == "")
        ) {
            $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
        } else {
            $insname = $_REQUEST['insname'];
            $insemail = $_REQUEST['insemail'];
            $inspass = $_REQUEST['inspass'];
            $inspos = $_REQUEST['inspos'];


            $sql = "INSERT INTO instructor (instructor_name, instructor_email, instructor_pass, instructor_position, status) 
            VALUES ('$insname', '$insemail', '$inspass', '$inspos','1') ";
            if ($conn->query($sql) == TRUE) {
                $alert_msg = '<div class="alert alert-success">Instructor Added Successfully</div>';
            } else {
                $alert_msg = '<div class="alert alert-danger">Unable To add Instructor </div>';
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Instructor</h1>
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                        </span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- Instructor Nasme -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="insname" name="insname" class="form-control" />
                            <label class="form-label" for="insname">Instructor Name</label>
                        </div>

                        <div class="row mb-4">
                            <!-- Instructor email  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="insemail" name="insemail" class="form-control" />
                                    <label class="form-label" for="insemail">Instructor Email</label>
                                </div>
                            </div>
                            <!-- Instructor password  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="inspass" name="inspass" class="form-control" />
                                    <label class="form-label" for="inspass">Instructor Passsword</label>
                                </div>
                            </div>
                            <!-- Instructor occupation  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="inspos" name="inspos" class="form-control" />
                                    <label class="form-label" for="inspos">Instructor Occupation</label>
                                </div>
                            </div>
                        </div>
                        <!-- Instructor Occupation -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="insSubmitBtn"
                            name="insSubmitBtn">Add Instructor</button>
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