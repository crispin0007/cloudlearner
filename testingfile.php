<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Learning Area | Cloud Learner</title>

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
          if(isset($_GET['course_id'])){
            $course_id = $_GET['course_id'];
            
            $sql = "SELECT * FROM lesson WHERE course_id= '$course_id' ";
            $result = $conn->query($sql);}
            ?>

            <div class="container mt-4">
              <div class="row">
                <?php
                if ($row = $result->fetch_assoc()) {
                  $i=1;
                  echo '<div class="container-fluid">
                      <div class="row">
                        <div class="col-md-9">
                        <h1>' . $row['lesson_name'] . '</h1>
                          <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/o0kR2hpvG7E" allowfullscreen></iframe>
                            </video>
                          </div>
                        </div>
                        <div class="col-md-3 mt-3 mt-md-0">
                          <p>Topics</p>
                          <ul class="list-group" id="playlist">';
                  while ($row = $result->fetch_assoc()) {
                    echo '<li class="list-group-item list-group-item-action"><a href="#" data-video-url="your_video_url.mp4">
                    <span class="h3 badge badge-success badge-lg rounded-pill">'.$i .'. </span>' . $row['lesson_name'] . '</a><div class="vr"></div></li>';
                    $i++;
                  }
                  echo '</ul>
                        </div>
                      </div>
                    </div>';
                }
                ?>

              </div>
   <!-- ======================================================= -->
   
    <!-- ======================================================= -->
              <!-- Content Row -->

            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

          <!-- Footer -->
          
          <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
<sprit>


</script>

      
          <?php
          
          include('../elements/footer.php')
            ?>

<?php include('../elements/jsfile.php') ?>

</body>

</html>












