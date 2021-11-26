<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="../index.php" class="mb-5 d-block auth-logo"> <img src="" alt="" height="22" class="logo logo-dark"> <img src="" alt="" height="22" class="logo logo-light"> </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary"><b>Register Account</b></h5>
                               <!--  <p class="text-muted">Get Your Free RentCars Account Now</p> -->
                            </div>



                            <div class="p-2 mt-4">
                                <form method="POST" action="regsuc.php" ;>
                                    <div class="mb-3">
                                        <label class="form-label" for="username"><b>Full Name</b></label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail"><b>Email</b></label>
                                        <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter your Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword"><b>Password</b></label>
                                        <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter Password" required>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
                                        <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" name="register" type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="text-muted mb-0">Already have an account? <a href="login.php" class="fw-medium text-primary"> <b>Login</b></a></p>
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
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>