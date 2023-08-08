<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In | CloudLearner</title>
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
        height: 70vh;
    }

    .form-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0,
                0.1);
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
                <span>Instructor Log In</span>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- Form Start -->
    <div class="containers">
        <div class="form-container">
            <h2>Instructor Login</h2>
            <form action="instructor_login.php" method="post">
                <div class="form-group">
                    <input type="email" id="insLogEmail" class="form-control" />
                    <label class="form-label" for="form2Example1">Email address</label>
                </div>
                <div class="form-group">
                    <input type="password" id="insLogPass" class="form-control" />
                    <label class="form-label" for="form2Example2">Password</label>
                </div>
                <div class="form-group t" id="">
                    <span id="statusLogMsg"></span>
                    <button type="button" class="btn btn-danger bg-danger btn-block mb-4"
                        onclick="checkInsLogin()">Signin</button>
                        <a href="login.php" class="btn btn-success">Student Login</a>
                </div>
                <div class=" form-group switch-form">
                    Don' t have an account? <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
    
    <!-- End Form Start -->
    <?php 
	include 'elements/footer.php'
	?>
</body>

</html>