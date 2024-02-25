<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Music - Home Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../UserTheme/css/bootstrap.min.css">
    <link rel="stylesheet" href="../UserTheme/css/style.css">
    <link rel="stylesheet" href="../UserTheme/css/responsive.css">
    <link rel="icon" href="../UserTheme/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="../UserTheme/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="../UserTheme/images/loading.gif" alt="#" /></div>
    </div>
    <header>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="../AdminTheme/libraries/logo/LogoFront.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="">about</a> </li>
                                        <li> <a href="Album.php"> Albums</a> </li>
                                        <li> <a href="blog.html">Blog</a> </li>
                                        <li> <a href="contact.html">Contact</a> </li>
                                        <?php
                                        if ($_SESSION['UserRole'] == "User") {
                                        ?>
                                        <li> <a href="../Logout.php">Logout</a> </li>
                                        <?php } 
                                        else { ?>
                                        <li> <a href="../Login.php">Login</a> </li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="../UserTheme/images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
    </header>
