<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sell Reports Dashboard | Cloud Learner</title>

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

                    <?php

                    $sql = "SELECT * FROM payment";
                    $result = $conn->query($sql);
                    $total_amount = mysqli_fetch_assoc($conn->query("SELECT SUM(amount) FROM payment"))["SUM(amount)"] / 100;
                    echo '
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Sell Reports</h1>
                            <div class="btn btn-outline-success btn-lg">Total Order:' . $result->num_rows . '</div>
                            <div class="btn btn-outline-primary btn-lg">Total Sales: ' . $total_amount . '</div>
                        </div>
                        ';
                    if ($result->num_rows > 0) {
                        echo '<table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Order Number</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Course ID</th>
                                    <th>Student ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';

                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline">' . $row["order_id"] . '</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1">' . $row["order_number"] . '</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">' . $row["date"] . '</p>
                                </td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> ' . $row["status"] . ' </span>
                                </td>
                                <td>
                                <p class="fw-normal mb-1">' . $row["amount"] / 100 . '  </p>
                                </td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> ' . $row["course_id"] . ' </span>
                                </td>
                                <td>
                                    <span class="badge badge-success rounded-pill d-inline"> ' . $row["stu_id"] . ' </span>
                                </td>
                                <td>
                                
                            
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["order_id"] . '">
                                        <button type="submit" name="delete" value="Delete" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td> 
                            </tr>';
                        }

                        echo '</tbody>
                        </table>';
                    } else {
                        echo "0 results";
                    }
                    ;
                    // delete course 
                    if (isset($_REQUEST['delete'])) {
                        $sql = "DELETE FROM blog_posts WHERE post_id={$_REQUEST['id']}";
                        if ($conn->query($sql) == TRUE) {
                            echo '<meta http-equiv="refresh" content=0;URL=?deleted />';
                        } else {
                            echo "Unable to delete data";
                        }
                    }


                    ?>

                    <!-- content body Begin Here -->


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