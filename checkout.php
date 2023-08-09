<!DOCTYPE html>
<html lang="en">

<head>
    <title>CheckOut | CLoudLearner</title>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <?php
    include 'elements/topheader.php';
    include 'database.php';
    ?>
    <?php
    if (!isset($_SESSION)) {
        @session_start();
    }
    if (isset($_SESSION['stu_is_login'])) {
        $stuLogEmail = $_SESSION['stuLogEmail'];
    } else {
        echo "<script>location.href='login.php'</script>";
    }
    ; ?>

    <?php
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
        $sql = "SELECT * FROM coursedetails WHERE course_id='$course_id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $course_name = $row['course_title'];
        $course_image = $row['imagelocation'];
        $course_price = $row['sprice'];

    }
    ?>
</head>

<body>
    <style>
        .body {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
    <!-- Page Preloder 
    -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <?php
    include 'elements/navbar.php'
        ?>
    <section class="hero-section set-bg" data-setbg="img/bg.jpg" style="height:150px;">
        <div class=" container">
            <div class="hero-text text-white">
                <h2>Get The Best Free Online Courses</h2>
            </div>

        </div>
    </section>
    <div class="conatiner pt-5 ">
        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-8">
                        <div class="card mb-4">


                            <div class="card-header py-3">
                                <h5 class="mb-0">Check Out</h5>
                            </div>
                            <div class="card-body">
                                <!-- Single item -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                            data-mdb-ripple-color="light">
                                            <img src="<?php echo $course_image ?>" class="w-100"
                                                alt="Blue Jeans Jacket" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                </div>
                                            </a>
                                        </div>
                                        <!-- Image -->
                                    </div>

                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>
                                                <?php echo "$course_name"; ?>
                                            </strong></p>

                                        <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                            data-mdb-toggle="tooltip" title="Remove item">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm mb-2"
                                            data-mdb-toggle="tooltip" title="Move to the wish list">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <!-- Data -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <strong class="h4">Rs.
                                                <?php echo $course_price ?>
                                            </strong>
                                        </p>
                                        <!-- Price -->
                                    </div>
                                </div>
                                <!-- Single item -->

                                <hr class="my-4" />


                            </div>
                        </div>

                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body" style="background-color:#5e95bd;">
                                <p class="text-center"><strong class="text-white h4 ">We Accept : </strong></p>
                                <div class="d-flex justify-content-around">
                                    <img class="me-2" width="100px" src="https://admin.khalti.com/static/img/logo1.png"
                                        alt="Khalti" />
                                    <img class="me-2" width="100px" src="https://fonepay.com/images/logo.png"
                                        alt="fonepayy" />
                                    <img class="me-2 pl-2" width="100px"
                                        src="https://esewa.com.np/common/images/esewa_logo.png" alt="Esewa" />
                                    <img class="me-2 pl-2" width="100px"
                                        src="https://www.imepay.com.np/assets/logo/ime-main.svg" alt="IMEPay" />
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Summary</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products
                                        <span>Rs.
                                            <?php echo $course_price ?>
                                        </span>
                                    </li>

                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total amount</strong>
                                            <strong>
                                                <p class="mb-0">(including VAT)</p>
                                            </strong>
                                        </div>
                                        <span><strong>Rs.
                                                <?php echo $course_price ?>
                                            </strong></span>
                                    </li>
                                </ul>
                                <!-- =========================================================================================================== -->
                                <?php
                                $sql = "SELECT course_id, stu_id FROM payment WHERE stu_email = '$stuLogEmail' AND course_id = '$course_id'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<a class="btn btn-danger btn-lg btn-block" href="Student/pages/mycourses.php" >
                                        Continue Learning
                                    </a>';
                                } else {
                                    echo '<button class="btn btn-danger btn-lg btn-block" id="payment-button">
                                        Enroll Now
                                    </button>';
                                }

                                ?>
                                <!-- =========================================================================================================== -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_212a87eb55d547db9d6a839a4544c510",
            "productIdentity": "<?php echo "$course_id"; ?>",
            "productName": "<?php echo "$course_name"; ?>",
            "productUrl": "https://facebook.com",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
            ],
            "eventHandler": {
                onSuccess(payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                    window.location.href = "Student/pages/mycourses.php";
                    $.ajax({
                        type: "POST",
                        url: "Admin/pages/process_pyment.php",
                        data: {
                            payload: payload

                        }, success: function (response) {
                            console.log(response);
                        },
                        error: function (xhr, status, error) {
                            console.error(error);
                        }
                    });
                },
                onError(error) {
                    console.log(error);
                },
                onClose() {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        var amountInPaisa = <?php echo $course_price * 100; ?>;

        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({ amount: amountInPaisa });
        }
    </script>


    < <!-- footer section -->
        <?php
        include 'elements/footer.php';
        ?>
        <!-- footer section end -->




</html>