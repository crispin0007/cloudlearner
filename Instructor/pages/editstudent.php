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

    if (isset($_REQUEST['viewstudent'])) {
        $stu_id = $_REQUEST['id'];
        $sql = "SELECT * FROM student WHERE stu_id=$stu_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Now you can use $row to access the data from the fetched row.
        } else {
            echo "No Student found with the given ID.";

            // Or handle the situation when no course is found with the given ID.
        }
    }

    if (isset($_REQUEST['stdEditBtn'])) {
        // checking for empty field  
        if (
            ($_REQUEST['stdname'] == "") || ($_REQUEST['stdemail'] == "") || ($_REQUEST['stdpass'] == "") ||
            ($_REQUEST['stdocc'] == "")
        ) {
            $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
        } else {
            $stu_id = $_REQUEST['stuid'];
            $stdname = $_REQUEST['stdname'];
            $stdemail = $_REQUEST['stdemail'];
            $stdpass = $_REQUEST['stdpass'];
            $stdocc = $_REQUEST['stdocc'];


            $sql = "UPDATE student SET stu_name='$stdname', stu_email='$stdemail', stu_pass='$stdpass', stu_occ='$stdocc' WHERE stu_id=$stu_id";

            if ($conn->query($sql) == TRUE) {
                $alert_msg = '<div class="alert alert-success">Student Edited Successfully</div>';
            } else {
                $alert_msg = '<div class="alert alert-danger">Unable To Edit Student </div>';
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Student</h1>
                        
                        <span>
                            <?php if (isset($alert_msg)) {
                                echo $alert_msg;
                            } ?>
                        </span>
                    </div>
                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- Student Nasme -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="stuid" name="stuid" class="form-control"
                                value="<?php if (isset($row['stu_id']))
                                echo $row['stu_id']; ?>" readonly />
                            <label class="form-label" for="stuid">Student ID</label>
                        </div>
                        <div class=" form-outline mb-4">
                            <input type="text" id="stdname" name="stdname" class="form-control"
                                value="<?php if(isset($row['stu_name'])) echo $row['stu_name']; ?>" />
                            <label class="form-label" for="stdname">Student Name</label>
                        </div>

                        <div class="row mb-4">
                            <!-- Student email  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="stdemail" name="stdemail" class="form-control"
                                        value="<?php if(isset($row['stu_email'])) echo $row['stu_email']; ?>" />
                                    <label class="form-label" for="stdemail">Student Email</label>
                                </div>
                            </div>
                            <!-- Student password  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="password" id="stdpass" name="stdpass" class="form-control"
                                        value="<?php if(isset($row['stu_pass'])) echo $row['stu_pass']; ?>" />
                                    <label class="form-label" for="stdpass">Student Passsword</label>
                                </div>
                            </div>
                            <!-- Student occupation  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="stdocc" name="stdocc" class="form-control"
                                        value="<?php if(isset($row['stu_occ'])) echo $row['stu_occ']; ?>" />
                                    <label class="form-label" for="stdocc">Student Occupation</label>
                                </div>
                            </div>
                        </div>
                        <!-- Student Occupation -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="stdEditBtn" name="stdEditBtn">Edit
                            Student</button>
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