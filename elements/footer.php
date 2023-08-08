<footer class="container-fluid footer-section spad pb-0">

    <div class="footer-bottom">
        <div class="footer-warp">

            <div class="copyright">

                Copyright &copy;<script>
                document.write(new Date().getFullYear());
                </script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#"
                    target="_blank">cloudLearner</a> <button type="button"
                    class="btn btn-danger justify-content-center ml-4" data-toggle="modal"
                    data-target="#exampleModalCenter">
                    Admin Login
                </button>

            </div>
            <!-- admin Login Modal -->
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ADMIN LOGIN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="containers">
                                <div class="form-container">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" id="adminLogEmail" class="form-control" />
                                            <label class="form-label">Email address</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="adminLogPass" class="form-control" />
                                            <label class="form-label">Password</label>
                                        </div>
                                        <div class="form-group t">
                                            <span id="adminstatusLogMsg"></span>
                                            <button type="button" class="btn btn-danger bg-danger  mb-4"
                                                onclick="checkAdminLogin()">Sign In</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
</footer>

<!--====== Javascripts & Jquery ======-->
<script type="text/javascript" src=" js/jquery-3.2.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mixitup.min.js"></script>
<script type="text/javascript" src="js/circle-progress.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>
<script type="text/javascript" src="js/adminajaxrequest.js"></script>
<script type="text/javascript" src="js/instructor.js"></script>