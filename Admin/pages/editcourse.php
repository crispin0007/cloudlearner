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

    if (isset($_REQUEST['view'])) {
        $course_id = $_REQUEST['id'];
        $sql = "SELECT * FROM coursedetails WHERE course_id=$course_id";
        $result = $conn->query($sql);
    
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Now you can use $row to access the data from the fetched row.
        } else {
            echo "No course found with the given ID.";
            
            // Or handle the situation when no course is found with the given ID.
        }
    }
    


    if(isset($_REQUEST['courseEditBtn'])){
        
        if(($_REQUEST['coursetitle'] == "") || ($_REQUEST['authorname'] == "") || ($_REQUEST['courseduration'] == "") || 
        ($_REQUEST['originalprice'] == "") || ($_REQUEST['sellingprice'] == "") || ($_REQUEST['category'] == "") || 
        ($_REQUEST['coursetitle'] == "") || ($_REQUEST['description'] == "")){
            $alert_msg ='<div class="alert alert-danger">Fill All Fields</div>';
        }else{            
            $course_id =$_REQUEST['courseid']; 
            $coursetitle =$_REQUEST['coursetitle']; 
            $authorname =$_REQUEST['authorname']; 
            $courseduration =$_REQUEST['courseduration']; 
            $originalprice =$_REQUEST['originalprice'];
            $sellingprice =$_REQUEST['sellingprice'];
            $category =$_REQUEST['category']; 
            $coursetitle =$_REQUEST['coursetitle']; 
            $description =$_REQUEST['description'];
            if(empty($_FILES['courseimage']['name'])){
                
                $img_folder =$_REQUEST['imagelocation1'];
                $img_folder_location = str_replace('../../', '', '../../img/courseimg/'.$img_folder);
            }else{
                $courseimage =$_FILES['courseimage']['name'];
                $courseimagetemp =$_FILES['courseimage']['tmp_name'];
                $img_folder = '../../img/courseimg/'.$courseimage;
                $img_folder_location = str_replace('../../', '', '../../img/courseimg/'.$courseimage);
                move_uploaded_file($courseimagetemp, $img_folder);
                
            }
            
            
                
                $sql = "UPDATE coursedetails SET course_title='$coursetitle', oprice='$originalprice', category='$category', coursedescription='$description', 
                courseimage='$img_folder', author='$authorname', sprice='$sellingprice', duration='$courseduration', imagelocation='$img_folder_location' WHERE course_id=$course_id";
                if($conn->query($sql) == TRUE){
                    
                    $alert_msg ='<div class="alert alert-success">Course Edited Successfully</div>';
                    $_SESSION['alert_msg'] = $alert_msg;
                    header('Location: courses.php');

                }else{
                    $alert_msg ='<div class="alert alert-danger">Unable To Edit Course </div>';
    }
    }}
    
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
                        <span><?php if(isset($alert_msg)){ echo $alert_msg;} ?></span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- Course ID -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="courseid" name="courseid" class="form-control" 
                            value="<?php if(isset($row['course_id'])) echo $row['course_id']; ?>" readonly>
                            <label class="form-label" for="courseid">Course ID</label>
                        </div>
                        <!-- Course TITLE -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="coursetitle" name="coursetitle" class="form-control" 
                            value="<?php if(isset($row['course_title'])) echo $row['course_title']; ?>">
                            <label class="form-label" for="coursetitle">Course Title</label>
                        </div>

                        <div class="row mb-4">
                            <!-- author name  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="authorname" name="authorname" class="form-control"
                                    value="<?php if(isset($row['author'])) echo $row['author']; ?>" />
                                    <label class="form-label" for="authorname">Author Name</label>
                                </div>
                            </div>
                            <!-- course duration  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="courseduration" name="courseduration" class="form-control" 
                                    value="<?php if(isset($row['duration'])) echo $row['duration']; ?>"/>
                                    <label class="form-label" for="courseduration">Course Duration</label>
                                </div>
                            </div>
                            <!-- original price  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="originalprice" name="originalprice" class="form-control" 
                                    value="<?php if(isset($row['oprice'])) echo $row['oprice']; ?>" />
                                    <label class="form-label" for="originalprice">Original Price</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <!-- course selling price  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="sellingprice" name="sellingprice" class="form-control" 
                                    value="<?php if(isset($row['sprice'])) echo $row['sprice']; ?>" />
                                    <label class="form-label" for="sellingprice">Course Selling Price</label>
                                </div>
                            </div>
                            <!-- course category  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="category" name="category" class="form-control" 
                                    value="<?php if(isset($row['category'])) echo $row['category']; ?>" />
                                    <label class="form-label" for="category">Category</label>
                                </div>
                            </div>
                            <!-- upload image file  -->
                            <div class="col">
                                <div class="form-outline">
                                    <img src="<?php if(isset($row['courseimage'])) echo $row['courseimage']; ?>"height:250px; width="400px"  />
                                    <input type="hidden" id="imagelocation1" name="imagelocation1" class="form-control" 
                                    value="<?php if(isset($row['courseimage'])) echo $row['courseimage']; ?>" />
                                    <label for="courseimage">Upload Course Image</label>
                                    <input type="file" class="form-control-file" id="courseimage" name="courseimage"
                                        accept="image/png, image/gif, image/jpeg" >
                                </div>
                            </div>


                        </div>


                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="description" name="description" rows="15"
                            
                            ><?php if(isset($row['coursedescription'])) echo $row['coursedescription']; ?></textarea>
                            <label class="form-label" for="description" 
                            >Course Description</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="courseEditBtn"
                            name="courseEditBtn">Edit Course</button>
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