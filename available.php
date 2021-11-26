<?php
session_start();
include_once('config.php');
$sql = "SELECT * FROM course";
$counter = 0;

$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>E-learn | Now Study from Anywhere</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">

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
            border: 3px solid #f1f1f1;
            z-index: 9;
        }
    </style>
    <!-- Begin page -->

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
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="menu-title">Management</li>

                    <li>
                        <a href="available.php" class="waves-effect"> <i class="uil-calender"></i> <span>All Available Courses</span> </a>
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
                            <h4 class="mb-0">Available Courses</h4>

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
                                                <th></th>
                                                <th>Enroll</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <tbody>
                                                <tr data-id="1">
                                                    <td data-field="ide"><?php echo ++$counter; ?></td>
                                                    <td data-field="nam"><?php echo $row['model']; ?></td>
                                                    <td data-field="age"><?php echo $row['number']; ?></td>
                                                    <td data-field="age"><?php echo "₹", $row['rent']; ?></td>
                                                    <td style="width: 100px">
                                                          <a href="admin/documents/<?php echo $row['document'] ?>" target="_blank" class="btn btn-primary w-sm waves-effect waves-light">Download Course Handout</a>
                                                    </td>  
                                                    <td></td>
                                                    <td style="width: 100px">
                                                        <button class="btn btn-primary w-sm waves-effect waves-light" onclick="location.href='login.php'">Enroll Course</button>
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