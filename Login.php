<?php
include('Connect.php');
session_start();
if (isset($_REQUEST['login'])) {
    $Email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    $sql = "SELECT * FROM signup WHERE Email='$Email' AND Password='$password'";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($query);

    if ($result['Email'] == $Email && $result['Password'] == $password) {
        if ($result["Roles"] == 'Admin') {
            $_SESSION['AdminID'] = $result["ID"];
            $_SESSION['Username'] = $result['Username'];
            $_SESSION['UserRole'] = $result["Roles"];
            $_SESSION['last_login_timestamp'] = time();  
            header('location: index.php');
            
        } elseif ($result["Roles"] == 'User') {
            $_SESSION["Username"] = $result['Username'];
            $_SESSION['UserRole'] = $result["Roles"];
            $_SESSION['last_login_timestamp'] = time();  
            header('location: User/index.php');
        }
    } else {

        header("Location: Login.php?error=Incorect Email or password");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sound - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="AdminTheme/libraries\assets\images\favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="AdminTheme/libraries/assets/css/jquery.mCustomScrollbar.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
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
    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material" action="Login.php" method="POST">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="pass" class="form-control" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="forgot-phone text-right f-right">
                                            <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" type="submit" name="login">LOGIN</button>
                                    </div>
                                </div>
                                <!-- Displaying Error Code -->
                                <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color: #ff1313; border-color: #fe9365; color: #ffffff;">
                                    <strong>Alert !</strong> <?php echo $_GET['error']; ?>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php } ?>
                                <!-- Displaying Error Code End-->
                                <p class="text-inverse text-left">Don't have an account?<a href="Registeration.php"> <b class="f-w-600">Register here </b></a>for free!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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