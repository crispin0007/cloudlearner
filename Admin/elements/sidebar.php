<?php  include('../../database.php');
        include('../elements/session.php'); ?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"> Admin<sup style="font-size:8px;">Cloud Learner</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Tools
    </div>


    <!-- Nav Item - Courses -->
    <li class="nav-item">
        <a class="nav-link" href="courses.php">
            <i class="fa-solid fa-book"></i>
            <span>Courses</span>
        </a>
    </li>

    <!-- Nav Item - Lessons -->
    <li class="nav-item">
        <a class="nav-link" href="lessons.php">
            <i class="fa-solid fa-person-chalkboard"></i>
            <span>Lessons</span></a>
    <!-- Nav Item - Assignment -->
    <li class="nav-item">
        <a class="nav-link" href="assignment.php">
        <i class="fa-solid fa-list-check"></i>
            <span>Assignment</span></a>
    </li>
    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Review</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Review Utilities:</h6>
                        <a class="collapse-item" href="approvecourse.php">Approve Course</a>
                        <a class="collapse-item" href="approvepost.php">Approve Blog Post</a>
                        <a class="collapse-item" href="approveteacher.php">Approve Teacher</a>
                        
                    </div>
                </div>
            </li>
    <!-- Nav Item - Students -->
    <li class="nav-item">
        <a class="nav-link" href="students.php">
            <i class="fa-solid fa-person-dress"></i>
            <span>Students</span></a>
    </li>
    <!-- Nav Item - Instructos -->
    <li class="nav-item">
        <a class="nav-link" href="instructors.php">
            <i class="fa-solid fa-person-dress"></i>
            <span>Instructors</span></a>
    </li>
    <!-- Nav Item - Sell report -->
    <li class="nav-item">
        <a class="nav-link" href="sellreports.php">
            <i class="fa-solid fa-dollar-sign"></i>
            <span>Sell Reports</span></a>
    </li>
    <!-- Nav Item - add blog -->
    <li class="nav-item">
        <a class="nav-link" href="blog.php">
            <i class="fa-brands fa-blogger-b"></i>
            <span>Blog Post</span></a>
    </li>
    <!-- Nav Item - Payment Status -->
    <li class="nav-item">
        <a class="nav-link" href="paymentstatus.php">
            <i class="fa-solid fa-credit-card"></i>
            <span>Payment Status</span></a>
    </li>
    <!-- Nav Item - Feedback -->
    <li class="nav-item">
        <a class="nav-link" href="feedback.php">
            <i class="fa-solid fa-comment"></i>
            <span>Feedback</span></a>
    </li>
    <!-- Nav Item - Change Password -->
    <li class="nav-item">
        <a class="nav-link" href="changepassword.php">
            <i class="fa-solid fa-lock"></i>
            <span>Change Password</span></a>
    </li>
    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>