<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Courses Dashboard | Cloud Learner</title>

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
    if(isset($_REQUEST['courseSubmitBtn'])){
        // checking for empty field  
        if(($_REQUEST['coursetitle'] == "") || ($_REQUEST['authorname'] == "") || ($_REQUEST['courseduration'] == "") || 
        ($_REQUEST['originalprice'] == "") || ($_REQUEST['sellingprice'] == "") || ($_REQUEST['category'] == "") || 
        ($_REQUEST['coursetitle'] == "") || ($_REQUEST['description'] == "")){
            $alert_msg ='<div class="alert alert-danger">Fill All Fields</div>';
        }else{
            $coursetitle =$_REQUEST['coursetitle']; 
            $authorname =$_REQUEST['authorname']; 
            $courseduration =$_REQUEST['courseduration']; 
            $originalprice =$_REQUEST['originalprice'];
            $sellingprice =$_REQUEST['sellingprice'];
            $category =$_REQUEST['category']; 
            $coursetitle =$_REQUEST['coursetitle']; 
            $description =$_REQUEST['description'];
            $courseimage =$_FILES['courseimage']['name'];
            $courseimagetemp =$_FILES['courseimage']['tmp_name'];
            $img_folder = '../../img/courseimg/'.$courseimage;
            $img_folder_location = str_replace('../../', '', '../../img/courseimg/'.$courseimage);
            move_uploaded_file($courseimagetemp, $img_folder);

            $sql = "INSERT INTO coursedetails (course_title, oprice, category, coursedescription, courseimage, author, sprice, duration, imagelocation, status, instructor_id) 
            VALUES ('$coursetitle', '$originalprice', '$category', '$description', '$img_folder', '$authorname', '$sellingprice','$courseduration', '$img_folder_location', '0','$instructor_id') ";
            if($conn->query($sql) == TRUE){
                $alert_msg ='<div class="alert alert-success">Course Uploaded Successfully</div>';
            }else{
                $alert_msg ='<div class="alert alert-danger">Unable To add Course <?php $originalprice ?></div>';
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Courses</h1>
                        <span><?php if(isset($alert_msg)){ echo $alert_msg;} ?></span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- Course title -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="coursetitle" name="coursetitle" class="form-control" />
                            <label class="form-label" for="coursetitle">Course Title</label>
                        </div>

                        <div class="row mb-4">
                            <!-- author name  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="authorname" name="authorname" class="form-control" />
                                    <label class="form-label" for="authorname">Author Name</label>
                                </div>
                            </div>
                            <!-- course duration  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="courseduration" name="courseduration" class="form-control" />
                                    <label class="form-label" for="courseduration">Course Duration</label>
                                </div>
                            </div>
                            <!-- original price  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="originalprice" name="originalprice" class="form-control" />
                                    <label class="form-label" for="originalprice">Original Price</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!-- course selling price  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="sellingprice" name="sellingprice" class="form-control" />
                                    <label class="form-label" for="sellingprice">Course Selling Price</label>
                                </div>
                            </div>
                            <!-- course category  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="category" name="category" class="form-control" />
                                    <label class="form-label" for="category">Category</label>
                                </div>
                            </div>
                            <!-- upload image file  -->
                            <div class="col">
                                <div class="form-outline">
                                    <label for="courseimage">Upload Course Image</label>
                                    <input type="file" class="form-control-file" id="courseimage" name="courseimage"
                                        accept="image/*">
                                </div>
                            </div>


                        </div>


                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                            <label class="form-label" for="description">Course Description</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="courseSubmitBtn"
                            name="courseSubmitBtn">Add Course</button>
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



    <?php include('../elements/jsfile.php')    ?>


</body>

</html>