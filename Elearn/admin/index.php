<?php

session_start();
include_once('config.php');
if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
}
$email =  $_SESSION['email'];
$sql = "SELECT * FROM course WHERE admin_email='$email'";
$num = 0;

$result5 = mysqli_query($conn, $sql)
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
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            background: url(img/jaipur.jpg);
            background-size: cover;
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
                            <!-- item--><a class="dropdown-item" href="logout.php"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">Sign Out</span></a>
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
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="total-revenue-chart"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">
                                                <?php
                                                $sql = "SELECT id FROM user ORDER BY id";
                                                $run = mysqli_query($conn, $sql);
                                                $row = mysqli_num_rows($run);
                                                echo '<h1>' . $row . '</h1>';
                                                ?>
                                            </span></h4>
                                        <p class="text-muted mb-0">Total Students</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="growth-chart"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">
                                                <?php
                                                $sql = "SELECT * FROM course WHERE admin_email='$email'";
                                                $run = mysqli_query($conn, $sql);
                                                $row = mysqli_num_rows($run);
                                                echo '<h1>' . $row . '</h1>';
                                                ?>
                                            </span></h4>
                                        <p class="text-muted mb-0">Course Listed by You</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end col-->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="orders-chart"> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">
                                                <?php
                                                $status = 0;
                                                $result = mysqli_query($conn, "SELECT * FROM course WHERE status='$status' AND admin_email='$email'");
                                                $num_rows = mysqli_num_rows($result);

                                                echo "$num_rows";
                                                ?>
                                            </span></h4>
                                        <p class="text-muted mb-0">Courses Available</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div id="customers-chart"> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">
                                                <?php
                                                $status = 1;
                                                $result = mysqli_query($conn, "SELECT * FROM course WHERE status='$status' AND admin_email='$email'");
                                                $num_rows = mysqli_num_rows($result);

                                                echo "$num_rows";
                                                ?>
                                            </span></h4>
                                        <p class="text-muted mb-0">Enrolled Courses</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- second title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">All Your Courses</h4>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-editable table-nowrap align-middle table-edits">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Course Name</th>
                                                    <th>Subject Code</th>
                                                    <th>Enrollment Price</th>
                                                    <th>Course Handouts</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result5)) {
                                            ?>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td data-field="ide"><?php echo ++$num; ?></td>
                                                        <td data-field="nam"><?php echo $row['model']; ?></td>
                                                        <td data-field="age"><?php echo $row['number']; ?></td>
                                                        <td data-field="age"><?php echo "₹", $row['rent']; ?></td>
                                                        <td style="width: 100px">
                                                          <a href="documents/<?php echo $row['document'] ?>" target="_blank" class="btn btn-primary w-sm waves-effect waves-light">Download Course Handout</a>
                                                        </td>    
                                                    </tr>
                                                </tbody>

                                            <?php   }   ?>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar -->

    <!-- /Right-bar -->
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
</body>

</html>