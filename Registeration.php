<?php
include 'Connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sound - Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="AdminTheme/libraries\assets\images\favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries\bower_components\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries\assets\icon\themify-icons\themify-icons.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries\assets\icon\icofont\css\icofont.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries\assets\css\style.css">
</head>

<body class="fix-menu">
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" action="Query.php" method="POST">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <a href="#!" class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i class="icofont icofont-social-facebook"></i>facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#!" class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i class="icofont icofont-social-twitter"></i>twitter</a>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required="" placeholder="Choose Username">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required="" placeholder="Your Email Address">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" type="submit" name="Signup">Sign up now</button>
                                    </div>
                                </div>
                                <hr>
                                <!-- Displaying Error Code -->
                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color: #ff1313; border-color: #fe9365; color: #ffffff;">
                                        <strong>Alert !</strong> <?php echo $_GET['error']; ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['success'])) { ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color: #1a930b; border-color: #1a930b; color: #ffffff;">
                                        <strong>Congratulation !</strong> <?php echo $_GET['success']; ?>.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <!-- Displaying Error Code End-->
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left"><a href="Login.php"><b class="f-w-600">Back to Login</b></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\modernizr\js\css-scrollbars.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script type="text/javascript" src="AdminTheme/libraries\assets\js\common-pages.js"></script>

</body>

</html>