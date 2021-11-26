<?php


 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>E-learn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/search.png">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> </head>

    <style>
        #message{
            width: 100%;
            padding: 5px;
        }
    </style>

    <body class="authentication-bg">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index.php" class="mb-5 d-block auth-logo"> <img src="assets/images/logo.png" alt="" height="22" class="logo logo-dark"> </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary"><b>Hey!</b></h5>
                                <p class="text-muted">Write your message!</p>
                            </div>
                            <div class="p-2 mt-4">
                                <!-- <form method="POST" action="https://formspree.io/f/mwkyevvn" id="my-form"> -->
                                    <form method="POST" action="mail to:sonalmishra156@gmail.com" id="my-form">
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail"><b>Email</b></label>
                                        <input type="email" name="email" class="form-control" id="username" placeholder="Enter Email" required></div>
                                    <div class="mb-3">
                                        <label class="form-label" for="message"><b>Message</b></label>
                                        <textarea name="message" id="message" cols="`30" rows="5"></textarea>
                        
                                    <div class="mt-3 text-end">
                                        <button name="submit" class="btn btn-primary w-sm waves-effect waves-light" type="submit">Submit</button>
                                    </div>
                                     
                                     <input type="hidden" name="_next" value="thankyou.html">

                                     <div class="mt-4 text-center">
                                        <p class="mb-0">Back to<a href="index.php" class="fw-medium text-primary"> <b>Home</b></a> </p>
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