<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Partners | Helping Others by Promoting Empowerment</title>
    <meta name="description" content="">
    <link rel="icon" href="<?php echo base_url('uploads/'); ?>Fav-1.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('SiteAssets/'); ?>img/favicon.png">
    <!-- All STYLESHEET CSS -->
    <link rel="stylesheet" href="<?php echo base_url('SiteAssets/'); ?>css/element.css">
    <link rel="stylesheet" href="<?php echo base_url('SiteAssets/'); ?>style.css">
    <link rel="stylesheet" href="<?php echo base_url('SiteAssets/'); ?>css/responsive.css">
    <!-- link modernizr js -->
    <script src="<?php echo base_url('SiteAssets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .header-style-multipage {
    background: #000000 none repeat scroll 0 0;

}
.logo {
    float: left;
    margin: 0px 0;
    position: relative;
    -webkit-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
    z-index: 1111;
        margin-top: 13px;
}
.header-style-multipage .main-menu li a {
    color: #fff;

}
.header-area.header-style-multipage.stricky-fixed {

    background: #000000;

}
.main-menu > li > a {

    padding: 25px 10px;

}

@media (max-width: 767px) {
.logo {
    margin: 0px 0;
    float: left;
}
}
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Preloader -->
    <!--preloader start-->
    <div class="preloader">
        <div class="preloader-wrapper">
            <div class="preloader-img">
                <img src="<?php echo base_url('SiteAssets/'); ?>img/preloader.png" alt="Preloader Image">
            </div>
        </div>
    </div>
    <!--preloader end-->
    <!-- End Preloader -->
    <!-- Start Main Wrapper -->
    <div class="main-wrapper">
        <!-- Start Header Section -->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <div class="header-top-left">
                                <ul class="info">
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i> info@partners.com</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i> +(857) 163 123 7884</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4">
                            <div class="header-top-right">
                                <ul class="info-login">
                                    <li><a href="<?php echo base_url('Dashboard/User/MainLogin'); ?>"><i class="fa fa-user" aria-hidden="true"></i> login</a></li>
                                    <li><a href="<?php echo base_url('Dashboard/User/Register'); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area header-style-multipage stricky">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <a href="/"> <img src="<?php echo base_url(logo); ?>" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 main-menu-wrapper">
                            <div class="multipage-wrapper">
                                <ul class="main-menu">
                                  <li class="active"><a href="/">Home</a></li>
                                  <li><a href="<?php echo base_url('Site/Main/about'); ?>">About Us</a></li>
                                  <li><a href="<?php echo base_url('Site/Main/services'); ?>">Services</a></li>
                                  <li><a href="<?php echo base_url('Site/Main/pricing'); ?>">Pricing</a></li>

                                  <li><a href="<?php echo base_url('Site/Main/faq'); ?>">Faq's</a></li>

                                  <li><a href="<?php echo base_url('Site/Main/contact'); ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
