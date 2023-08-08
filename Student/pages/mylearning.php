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
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');


          * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
          }

          .container1 {
            max-width: 1200px;
            margin: 10px auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            gap: 20px;
          }

          .container1 .main-video-container1 {
            flex: 1 1 800px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
          }

          .container1 .main-video-container1 .main-video {
            margin-bottom: 7px;
            border-radius: 5px;
            width: 100%;
          }

          .container1 .main-video-container1 .main-vid-title {
            font-size: 20px;
            color: #444;
          }

          .container1 .video-list-container1 {
            flex: 1 1 350px;
            height: 485px;
            overflow-y: scroll;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
            background-color: #fff;
            padding: 15px;
          }

          .container1 .video-list-container1::-webkit-scrollbar {
            width: 10px;
          }

          .container1 .video-list-container1::-webkit-scrollbar-track {
            background-color: #fff;
            border-radius: 5px;
          }

          .container1 .video-list-container1::-webkit-scrollbar-thumb {
            background-color: #444;
            border-radius: 5px;
          }

          .container1 .video-list-container1 .list {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px;
            background-color: #eee;
            cursor: pointer;
            border-radius: 5px;
            margin-bottom: 10px;
          }

          .container1 .video-list-container1 .list:last-child {
            margin-bottom: 0;
          }

          .container1 .video-list-container1 .list.active {
            background-color: #444;
          }

          .container1 .video-list-container1 .list.active .list-title {
            color: #fff;
          }

          .container1 .video-list-container1 .list .list-video {
            width: 100px;
            border-radius: 5px;
          }

          .container1 .video-list-container1 .list .list-title {
            font-size: 17px;
            color: #444;
          }


          @media (max-width:1200px) {

            .container1 {
              margin: 0;
            }

          }

          @media (max-width:450px) {

            .container1 .main-video-container1 .main-vid-title {
              font-size: 15px;
              text-align: center;
            }

            .container1 .video-list-container1 .list {
              flex-flow: column;
              gap: 10px;
            }

            .container1 .video-list-container1 .list .list-video {
              width: 100%;
            }

            .container1 .video-list-container1 .list .list-title {
              font-size: 15px;
              text-align: center;
            }

          }
        </style>

        <?php
        if (isset($_GET['course_id'])) {
          $course_id = $_GET['course_id'];
          $sql = "SELECT * FROM lesson WHERE course_id= '$course_id' ";
          $result = $conn->query($sql);
          $sql1 = "SELECT * FROM lesson WHERE course_id= '$course_id' LIMIT 1;";
          $result1 = $conn->query($sql1);
        }
        if ($result1->num_rows > 0) {
          $row1 = $result1->fetch_assoc();
          echo '<div class="container">
  <div class="h3 text-dark font-weight-bold ">Course Title: ' . $row1['course_name'] . '</div>
  </div>
  <div class="container1">';



          echo '
  
  <div class="main-video-container1">
    <video src="' . $row1['lesson_link'] . '" loop controls class="main-video"></video>
    <h3 class="main-vid-title">' . $row1['lesson_name'] . '</h3>
  </div>';
        }


        echo '<div class="video-list-container1">';
        while ($row = $result->fetch_assoc()) {
          echo '
      <div class="list active">
      <video src="' . $row['lesson_link'] . '" class="list-video"></video>
      <h3 class="list-title">' . $row['lesson_name'] . '</h3>';

          echo '  </div>';
        }
        ?>

      </div>

    </div>

    <div class="container">
      <hr>
      <div class="h3 text-danger font-weight-bold text-center">COURSE RELEATED STUFF: </div>
    </div>

    <hr>
    <div class="container1">
      <div class="video-list-container1">
        <div class="list bg-danger ">

          <h3 class="list-title text-white">ASSIGNMENT</h3>
        </div>

      </div>

      <div class="video-list-container1">
        <div class="list bg-danger">

          <h3 class="list-title text-white">FEEDBACK</h3>
        </div>

      </div>
      <div class="video-list-container1 text-center">
        <div class="list text-center">
<!-- =========================================================================================== -->
          <h3 class="list-title text-center">COMMENT</h3>
        </div>
        <!-- ================================== -->
        <!-- <div class="row d-flex justify-content-center"> -->
        <div class="form-outline mb-4">
          <form>
            <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
            <label class="form-label" for="addANote"></label>
            <button class="btn btn-success mt-2">+ Add a Comment</button>
          </form>
        </div>
        <hr>
        <div class="card mt-2">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="../../img/profilepic/IMG20230511101100.jpg" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Johny</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- </div> -->




      <script>
        let videoList = document.querySelectorAll('.video-list-container1 .list');

        videoList.forEach(vid => {
          vid.onclick = () => {
            videoList.forEach(remove => { remove.classList.remove('active') });
            vid.classList.add('active');
            let src = vid.querySelector('.list-video').src;
            let title = vid.querySelector('.list-title').innerHTML;
            document.querySelector('.main-video-container1 .main-video').src = src;
            document.querySelector('.main-video-container1 .main-video').play();
            document.querySelector('.main-video-container1 .main-vid-title').innerHTML = title;
          };
        });
      </script>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




    <sprit>


      </script>


      <?php
      include('../elements/footer.php')
        ?>
      <?php include('../elements/jsfile.php') ?>

</body>

</html>