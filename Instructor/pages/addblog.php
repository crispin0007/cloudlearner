<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Blog| Cloud Learner</title>

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
    if(isset($_REQUEST['blogSubmitBtn'])){
        // checking for empty field  
        if (isset($_REQUEST['blogSubmitBtn'])) {
            // checking for empty field  
            if (
                ($_REQUEST['blogtitle'] == "") || ($_REQUEST['blogauthor'] == "") || ($_REQUEST['topic'] == "") || 
                ($_REQUEST['blogdescription'] == "" )
            ) {
                $alert_msg = '<div class="alert alert-danger">Fill All Fields</div>';
            } else {
                $blogtitle = $_REQUEST['blogtitle']; 
                $blogauthor = $_REQUEST['blogauthor']; 
                $topic = $_REQUEST['topic']; 
                $blogdescription = $_REQUEST['blogdescription'];
                $blogimage = $_FILES['blogimage']['name'];
                $blogimagetemp = $_FILES['blogimage']['tmp_name'];
                $img_folder = '../../img/blogimage/' . $blogimage;
                $img_folder_location = str_replace('../../', '', '../../img/blogimage/'.$blogimage);
                move_uploaded_file($blogimagetemp, $img_folder);
        
                $sql = "INSERT INTO blog_posts (post_title, post_author, post_topic, post_descrip, postimagelocation, post_image, status, instructor_id) 
                    VALUES ('$blogtitle', '$blogauthor', '$topic', '$blogdescription', '$img_folder_location','$img_folder', '0', '$instructor_id') ";
                if ($conn->query($sql) == TRUE) {
                    $alert_msg = '<div class="alert alert-success">Blog Post Uploaded Successfully</div>';
                } else {
                    $alert_msg = '<div class="alert alert-danger">Unable To add Blog Post <?php $originalprice ?></div>
    ';
    }
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
                        <h1 class="h3 mb-0 text-gray-800">Add New Blog Post</h1>
                        <span><?php if(isset($alert_msg)){ echo $alert_msg;} ?></span>
                    </div>


                    <!-- content body Begin Here -->
                    <form method="post" enctype="multipart/form-data">

                        <!-- blog title -->
                        <div class=" form-outline mb-4">
                            <input type="text" id="blogtitle" name="blogtitle" class="form-control" />
                            <label class="form-label" for="blogtitle">Blog Title</label>
                        </div>

                        <div class="row mb-4">
                            <!-- author name  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="blogauthor" name="blogauthor" class="form-control" value=<?php echo $instructor_name ;?> readonly/>
                                    <label class="form-label" for="blogauthor">Author Name</label>
                                </div>
                            </div>
                            <!-- course category  -->
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="topic" name="topic" class="form-control" />
                                    <label class="form-label" for="topic">Topic</label>
                                </div>
                            </div>
                            <!-- upload image file  -->
                            <div class="col">
                                <div class="form-outline">
                                    <label for="blogimage">Upload Course Image</label>
                                    <input type="file" class="form-control-file" id="blogimage" name="blogimage"
                                        accept="image/png, image/gif, image/jpeg">
                                </div>
                            </div>

                        </div>
                        <!-- description input -->
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="blogdescription" name="blogdescription"
                                rows="4"></textarea>
                            <label class="form-label" for="blogdescription">Blog Description</label>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg mb-4" id="blogSubmitBtn"
                            name="blogSubmitBtn">Add Blog</button>
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