<!DOCTYPE html>
<html lang="en">

<head>

    <title>Sign Up| CloudLearner</title>
    <?php
    include 'elements/topheader.php'
        ?>
</head>

<body>
    <style>
        .containers {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            /* margin-top: 58px; */
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 8px;
            background-color: hsl(260, 39%, 49%);
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: hsl(260, 39%, 49%);
        }

        .form-group .switch-form {
            text-align: center;
            margin-top: 10px;
        }

        .form-group .switch-form a {
            text-decoration: none;
            color: hsl(260, 39%, 49%);
        }

        @media (max-width: 480px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header section -->
    <?php
    include 'elements/navbar.php'
        ?>
    <!-- Header section end -->
    <div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg">
        <div class="container">
            <div class="site-breadcrumb">
                <a href="index.php">Home</a>
                <span>Sign Up</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- Form Start -->
    <div class="containers">

        <div class="form-container">
            <h2>Student Signup</h2>
            <form action="signup.php" method="post" id="regestrationform">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="stuname" name="name" required>
                    <samll id="statusmsg1"></samll>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="stuemail" name="email" required>
                    <samll id="statusmsg2"></samll>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="stupass" name="password" required>
                    <samll id="statusmsg3"></samll>
                </div>

                <div class="form-group">
                    <span id="successmessage"></sapn>
                        <button type=" button" id="signup" class="bg-danger" onclick="addStu()">Signup</button>
                        <a href="instructor_signup.php" class="btn btn-success mt-2">Instructor Signup</a>
                </div>
                <!-- <span id="successmessage"></span> -->
                <div class=" form-group switch-form">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>
    <!-- Form End -->

    <?php
    include 'elements/footer.php'
        ?>
</body>

</html>