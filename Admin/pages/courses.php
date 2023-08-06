<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courses Dashboard | Cloud Learner</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Courses</h1>
                        <?php
                        if (isset($_SESSION['alert_msg'])) {
                            echo $_SESSION['alert_msg'];
                          }
                          
                        ?>

                    </div>
                    <?php 
                        $sql = "SELECT * FROM coursedetails";
                        $result = $conn -> query($sql);
                        if($result ->num_rows > 0){
                            echo '<table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Course ID</th>
                                    <th>Course Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>';
            
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">' . $row["course_id"] . '</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["course_title"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <img src="" alt="Author Avatar" style="width: 45px; height: 45px" class="rounded-circle" />
                                    <p class="fw-normal mb-1">' .$row["author"] . '</p>
                                </td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> Active </span>
                                </td>



                                <td>
                                <form action="editcourse.php" method="POST" class="d-inline">
                                    <input type="hidden" name="id" value="'.$row["course_id"]. '">
                                    <button type="submit" name="view" value="View" class="btn btn-primary btn-circle">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>
                                </form>
                            
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["course_id"] . '">
                                        <button type="submit" name="delete" value="Delete" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td> 
                            </tr>';
                    }
            
                    echo '</tbody>
                        </table>';
                        }else{
                            echo "0 results";
                        };
                        // delete course 
                        if(isset($_REQUEST['delete'])){
                            $sql = "DELETE FROM coursedetails WHERE course_id={$_REQUEST['id']}";
                            if($conn ->query($sql) == TRUE){
                                echo '<meta http-equiv="refresh" content=0;URL=?deleted />';
                            }else{
                                echo "Unable to delete data";
                            }
                        }

                        
                        ?>




                    <div>
                        <a href="addcourse.php" class="btn btn-primary btn-circle btn-lg "
                            style="position: fixed;bottom: 10px;right: 20px;margin-bottom: 30px;">
                            <i class="fas fa-plus fa-2x"></i>
                        </a>
                    </div>

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