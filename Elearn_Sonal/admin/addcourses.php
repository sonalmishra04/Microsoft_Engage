<?php
session_start();
include_once('../config.php');
if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>E-learn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

    <style media="screen">
        #custom-button {
            padding: 5px;
            color: white;
            background-color: green;
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }

        #custom-button:hover {
            background-color: pink;
        }

        #custom-text {
            margin-left: 10px;
            font-family: sans-serif;
            color: grey;
        }
    </style>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>

<body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="rounded-circle header-profile-user" src="assets/images/avtar.png" alt="Header Avatar"> <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="logout.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"> <i class="uil-cog"></i> </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark"> <span class="logo-sm">
                        <img src="assets/images/LearnLogo.png" alt="" height="22">
                    </span> <span class="logo-lg">
                        <img src="assets/images/LearnLogo.png" alt="" height="20">
                    </span> </a>
                <a href="index.php" class="logo logo-light"> <span class="logo-sm">
                        <img src="assets/images/LearnLogo.png" alt="" height="22">
                    </span> <span class="logo-lg">
                        <img src="assets/images/LearnLogo.png" alt="" height="20">
                    </span> </a>
            </div>


            <div data-simplebar class="sidebar-menu-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index.php"> <i class="iconify " data-icon="uil-home-alt" data-inline="false"></i> <span>Dashboard</span> </a>
                        </li>

                        <li class="menu-title">Management</li>
                        <li>
                            <a href="addcourses.php" class="waves-effect"> <i class="uil-calender"></i> <span>Add New Courses </span> </a>
                            <a href="available.php" class="waves-effect"> <i class="uil-calender"></i> <span>Edit Course Details</span> </a>
                            <a href="enrolled.php" class="waves-effect"> <i class="uil-calender"></i> <span>Enrolled Courses</span> </a>
                            <a href="seedocuments.php" class="waves-effect"> <i class="uil-calender"></i> <span>Course Handouts</span> </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="account-pages my-5 pt-sm-5">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-5">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <div class="text-center mt-2">
                                                <h5 class="text-primary"><b>Add a Course</b></h5>
                                            </div>
                                            <div class="p-2 mt-4">
                                                <form action="courseenrolled.php" method="POST" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Vehicalmodel"><b>Course Name</b></label>
                                                        <input type="text" name="model" class="form-control" id="vehicalmodel" placeholder="Enter Course Name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Vehicalnumber"><b>Subject Code</b></label>
                                                        <input type="text" name="number" class="form-control" id="vehicalnumber" placeholder="Enter Subject Code">
                                                    </div>
                                                    <!-- <div class="mb-3">
                                                        <label class="form-label" for="Seatingcapacity"><b>Total Lessons</b></label>

                                                        <input type="text" name="capacity" class="form-control" id="seatingcapacity" placeholder="Enter Total Lessons">
                                                    </div> -->

                                                    <div class="mb-3">
                                                        <label class="form-label" for="Rentperday"><b>Upload Course Documents</b></label>
                                                        <input type="file" name="dp" class="form-control" id="pdf" placeholder="Enter Course's Documents">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Rentperday"><b>Enrollment Price</b></label>
                                                        <input type="text" name="rent" class="form-control" id="rentperday" placeholder="Enter Price">
                                                    </div>
                                                    <div class="mt-3 text-end">
                                                        <button name="add" class="btn btn-primary w-sm waves-effect waves-light" type="submit">Confirm</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end container -->
                    </div>





                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!--  <script type="text/javascript">
        
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customText = document.getElementById("custom-text");

        customBtn.addEventListener("click",function(){
             realFileBtn.click();
        });

        realFileBtn.addEventListener("change",function(){
          if(realFileBtn.value){
                customText.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
          }

          else{
             customText.innerHTML = "No file chosen";
          }
        });
    </script> -->
</body>

</html>