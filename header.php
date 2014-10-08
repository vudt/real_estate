<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="rttytyhg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/font-awesome-4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jlib.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
    <!--[if lt IE 9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
        <script type="text/javascript" src="js/iefix.js"></script>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->
    <?php wp_head(); ?>
    <title>Home</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row top">
                <div class="col-xs-3 logo">
                    <a href="#" title="#"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" title="" /></a>
                </div>
                <div class="col-xs-9 top-adv">
                    <a href="#" title="#"><img src="<?php echo get_template_directory_uri() ?>/images/top-adv.png" /></a>
                </div>
            </div>
            <div class="row">
                <div class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> <!-- end .navbar-header -->
                    <div class="collapse navbar-collapse navbar-left menu-nav" id="my-bs-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li id="sub-Menu"><a href="#" title="Tìm Kiếm Nhà Đất">Tìm Kiếm Nhà Đất</a></li>
                            <li><a href="#" title="Nhà Đất Cần Bán">Nhà Đất Cần Bán</a></li>
                            <li><a href="#" title="Nhà Đất Cần Mua">Nhà Đất Cần Mua</a></li>
                            <li class="parent"><a href="#" title="Dự Án">Dự Án</a></li>
                            <li><a href="#" title="Báo Giá Dịch Vụ">Báo Giá Dịch Vụ</a></li>
                            <li><a href="#" title="Tin Thị Trường">Tin Thị Trường</a></li>
                            <li><a href="#" title="Kiến Thức">Kiến Thức</a></li>
                        </ul>
                    </div><!-- end .navbar-collapse --> 
                    <div class="sMenu">
                        <div class="col-xs-6">
                            <h3>Dự án theo loại hình</h3>
                            <ul>
                                <?php get_template_part('header/content', 'location-estate'); ?>
                            </ul>
                        </div>
                        <div class="col-xs-6">
                            <h3>Dự án theo khu vực</h3>
                            <ul>
                                <?php get_template_part('header/content', 'type-estate'); ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end .navbar -->
            </div>
        </div>
    </header>
    <section class="block-top">
        <div class="container">
            <div class="row first-row">
                <?php get_template_part('header/block', 'top'); ?>
            </div>
            <!-- Submenu Search ----->
            <div class="subMenu container">
                <?php get_template_part('header/block', 'submenu'); ?>
            </div>
            <!-- End Submenu ---->
            <div class="row breadcrumb-links">
                <span>Trang chủ</span> > <span>Tìm kiếm nhà đất</span>
            </div>
        </div>
    </section>
    