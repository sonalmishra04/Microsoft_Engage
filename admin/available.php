<?php

session_start();
include_once('config.php');
if (!isset($_SESSION['logged'])) {
    header('Location:login.php');
}
$email =  $_SESSION['email'];
$sql = "SELECT * FROM course WHERE admin_email='$email'";
$num = 0;

$result = mysqli_query($conn, $sql)
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

</head>


<body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->
    <style>
        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border-radius: 5px;
            z-index: 9;
            background-color: #E1EBEE;
            padding: 10px;
        }
    </style>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/avtar.png" alt="Header Avatar">
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="logout.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="uil-cog"></i>
                        </button>
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
                            <a href="index.php">
                                <i class="uil-home-alt"></i>
                                <span>Dashboard</span>
                            </a>
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
                                <h4 class="mb-0">Edit Course Details</h4>

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
                                                    <th>Course Handout</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Take Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td data-field="ide"><?php echo ++$num; ?></td>
                                                        <td data-field="nam"><?php echo $row['model']; ?></td>
                                                        <td data-field="age"><?php echo $row['number']; ?></td>                                                  
                                                        <td data-field="age"><?php echo "₹", $row['rent']; ?></td>
                                                        <td style="width: 100px">
                                                          <a href="documents/<?php echo $row['document'] ?>" target="_blank" class="btn btn-primary w-sm waves-effect waves-light">See Course Handout</a>
                                                        </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td style="width: 100px">
                                                            <button class="btn btn-primary w-sm waves-effect waves-light" onclick="openForm()">Edit Details</button>
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
    </div>
    <!-- END layout-wrapper -->

    <div class="form-popup" id="myForm">
        <form method="POST" action="edit.php" ;>
            <form action="courseenrolled.php" method="POST">
                <div class="mb-3">
                    <label class="form-label" for="Vehicalmodel"><b>Course Name</b></label>
                    <input type="text" name="model" class="form-control" id="vehicalmodel" placeholder="Enter Course Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Vehicalnumber"><b>Subject Code</b></label>
                    <input type="text" name="number" class="form-control" id="vehicalnumber" placeholder="Enter Subject Code">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Rentperday"><b>Price</b></label>
                    <input type="text" name="rent" class="form-control" id="rentperday" placeholder="Enter Price">
                </div>
                <div class="mt-3 text-end">
                    <button name="add" class="btn btn-primary w-sm waves-effect waves-light" type="submit">Confirm Details</button>
                </div>
            </form>
        </form>
    </div>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Table Editable plugin -->
    <script src="assets/libs/table-edits/build/table-edits.min.js"></script>

    <script src="assets/js/pages/table-editable.int.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>
