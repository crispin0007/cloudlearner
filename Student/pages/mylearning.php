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
            <h1 class="h3 mb-0 text-gray-800">Learning Area</h1>
          </div>
          <div class="row">
            <?php
            $sql = "SELECT py.order_id, c.course_id, c.course_title, c.duration, c.coursedescription, c.courseimage, c.author
                            FROM payment AS py
                            JOIN coursedetails AS c ON c.course_id = py.course_id
                            WHERE py.stu_email = '$stuLogEmail' AND py.status = 'success'";

            $result = $conn->query($sql);
            $course_id = $result->fetch_assoc()['course_id'];
            $sql1 = "SELECT * FROM lesson WHERE course_id= $course_id ";
            $result1 = $conn->query($sql1);
            // $row1 = $result1->fetch_assoc();
            ?>

            <div class="container mt-4">
              <div class="row">
                <?php
                if ($row1 = $result1->fetch_assoc()) {
                  echo '<div class="container">
                      <div class="row">
                        <div class="col-md-8">
                          <h1>' . $row1['lesson_name'] . '</h1>
                          <div class="embed-responsive embed-responsive-16by9">
                            <video controls class="embed-responsive-item" id="videoPlayer">
                              <source src="your_video_url.mp4" type="video/mp4">
                            </video>
                          </div>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0">
                          <p>Topics</p>
                          <ul class="list-group" id="playlist">';
                  while ($row1 = $result1->fetch_assoc()) {
                    echo '<li class="list-group-item list-group-item-action"><a href="#" data-video-url="your_video_url.mp4">' . $row1['lesson_name'] . '</a></li>';
                  }
                  echo '</ul>
                        </div>
                      </div>
                    </div>';
                }
                ?>


             

              </div>
   <!-- ======================================================= -->
<!-- Tabs navs -->
<div class="container mt-5">
<ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active"
      id="ex2-tab-1"
      data-mdb-toggle="tab"
      href="#ex2-tabs-1"
      role="tab"
      aria-controls="ex2-tabs-1"
      aria-selected="true"
      >Link</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-2"
      data-mdb-toggle="tab"
      href="#ex2-tabs-2"
      role="tab"
      aria-controls="ex2-tabs-2"
      aria-selected="false"
      >Very very very very long link</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-3"
      data-mdb-toggle="tab"
      href="#ex2-tabs-3"
      role="tab"
      aria-controls="ex2-tabs-3"
      aria-selected="false"
      >Another link</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
  <div
    class="tab-pane fade show active"
    id="ex2-tabs-1"
    role="tabpanel"
    aria-labelledby="ex2-tab-1"
  >
    Tab 1 content
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-2"
    role="tabpanel"
    aria-labelledby="ex2-tab-2"
  >
    Tab 2 content
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-3"
    role="tabpanel"
    aria-labelledby="ex2-tab-3"
  >
    Tab 3 content
  </div>
</div>
</div>
<!-- Tabs content -->
                <!-- ======================================================= -->
              <!-- Content Row -->

            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          <?php include('../elements/jsfile.php') ?>
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


      



</body>

</html>