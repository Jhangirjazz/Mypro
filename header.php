<?php
include 'DynamicLink.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sound - Admin Pannel </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <link rel="icon" href="<?php echo $siteurl; ?>AdminTheme/libraries/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries\assets\icon\icofont\css\icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $siteurl; ?>AdminTheme/libraries\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
</head>

<body>
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                        <img class="img-fluid" src="<?php echo $siteurl; ?>AdminTheme/libraries/logo/logonew.png" alt="Theme-Logo">
                    </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">                
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <!-- Make Condition To Show Username -->
                                    <?php
                                    if($_SESSION['Username'] != null)
                                    {
                                    ?>    
                                        <img src="libraries\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $_SESSION['Username']; ?></span>
                                    <?php } ?>
                                        <!-- Make Condition To Show Username End -->                                   
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $siteurl; ?>Logout.php">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

           
       
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="icofont icofont-song-notes"></i></span>
                                        <span class="pcoded-mtext">Sound</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="http://localhost/Sound/Category/Create.php">
                                                <span class="pcoded-mtext">Add Category</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://localhost/Sound/Album/CreateAlbum.php">
                                                <span class="pcoded-mtext">Add Album</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="http://localhost/Sound/Songs/CreateSong.php">
                                                <span class="pcoded-mtext">Add Songs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                     <div class="row">

                                     