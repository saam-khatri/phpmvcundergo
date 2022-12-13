<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title><?= $title ?></title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/slick.css'); ?>">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/animate.css'); ?>">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/nice-select.css'); ?>">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/jquery.nice-number.min.css'); ?>">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/magnific-popup.css'); ?>">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/bootstrap.min.css'); ?>">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/font-awesome.min.css'); ?>">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/default.css'); ?>">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/style.css'); ?>">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?= url('public/frontend/css/responsive.css'); ?>">


</head>

<body>


<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact text-lg-left text-center">
                        <ul>
                            <li><img src="<?= url('public/frontend/images/all-icon/map.png'); ?>"
                                     alt="icon"><span>440043 Mitrapark Kathmandu Nepal</span></li>
                            <li><img src="<?= url('public/frontend/images/all-icon/email.png')?>" alt="icon"><span>collagepmc@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-opening-time text-lg-right text-center">
                        <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="<?= url('public/frontend/images/logo.png');?>" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="<?= url('public/frontend/images/all-icon/support.png');?>" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Need Help? call us free</p>
                                <span>321 325 5678</span>
                            </div>
                        </div>
                        <div class="button float-left">
                            <a href="#" class="main-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-11 col-10">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="active" href="<?= url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/about'); ?>">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/course'); ?>">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= url('/Computer'); ?>">Computer</a></li>
                                        <li><a href="<?= url('/Banking'); ?>">Banking</a></li>
                                        <li><a href="<?= url('/Hotel_Managent'); ?>">Hotel Management</a></li>
                                        <li><a href="<?= url('/Sociology'); ?>">Sociology </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/event'); ?>">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= url('/about'); ?>">Faculties</a>
                                    <ul class="sub-menu">
                                        <li><a href="teachers.html"> +2 Humanity </a></li>
                                        <li><a href="teachers-singel.html">+2 Management</a></li>
                                        <li><a href="teachers-singel.html">+2 Education</a></li>
                                        <li><a href="teachers.html">BBS</a></li>
                                        <li><a href="teachers-singel.html">BCA</a></li>
                                        <li><a href="teachers.html">BED</a></li>
                                        <li><a href="teachers-singel.html">BA</a></li>
                                        <li><a href="teachers.html">MA</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-singel.html">Blog Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="shop.html">Campus Gallery </a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-singel.html">Shop Singel</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html">Online Admission </a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

<!--====== HEADER PART ENDS ======-->

<!--====== SEARCH BOX PART START ======-->

<div class="search-box">
    <div class="serach-form">
        <div class="closebtn">
            <span></span>
            <span></span>
        </div>
        <form action="#">
            <input type="text" placeholder="Search by keyword">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div> <!-- serach form -->
</div>

<!--====== SEARCH BOX PART ENDS ======-->