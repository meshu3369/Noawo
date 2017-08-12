<?php
/**
 * Created by PhpStorm.
 * User: meshu
 * Date: 11/7/2016
 * Time: 11:08 PM
 */
?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="x-ua-compatible" content="<?php bloginfo('html_type'); ?>;" charset=<?php bloginfo('charset'); ?>" />

        <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
        echo ' |';
    } ?> <?php bloginfo('name'); ?></title>
        <meta name=" description
    " content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/apple-touch-icon.png' ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- custom font -->
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


    <?php
    wp_head();
    ?>
</head>
<body <?php body_class('body'); ?>>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- website loading icon -->
<div class="se-pre-con"></div>
<!-- end website loading icon-->

<!--**************** start your full code from here ***********-->


<div class="container-fluid top_header">
    <div class="row">
        <div class="col-sm-2 logo">
            <a href="index.php"><img src="
             <?php if (function_exists('ot_get_option')):
                    $logo = ot_get_option('logo_upload');
                    if (!empty($logo)):
                        echo $logo;
                    else:
                        echo get_template_directory_uri() ?>/img/logo.png
                <?php endif; endif; ?>" alt="logo" class="img-responsive"></a>
        </div>

        <?php
        if (function_exists('ot_get_option')) {
            $heading_one = ot_get_option('heading_one');
            $heading_two = ot_get_option('heading_two');
            $banner_image = ot_get_option('banner_upload');

        }
        if (empty($banner_image)) {
            $banner_image = get_template_directory_uri() . "/img/banner.jpg";
        }

        ?>
        <div class="col-sm-8 logo_title">
            <h3><?php echo $heading_one; ?></h3>
            <p><?php echo $heading_two; ?></p>
        </div>

        <div class="col-sm-2 right_side">
            <div class="right_side_item">
                <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </div>

                <div class="login_area">
                    <a href="<?php echo wp_login_url($redirect); ?>">Sign-in</a>
                    <a href="<?php echo wp_logout_url($redirect); ?> ">Log-out</a>
                </div>
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-default navbar-sticky bootsnav">

    <!-- top searching -->
    <div class="top-search">
        <div class="container">
            <form action="<?php bloginfo('home'); ?>" method="get">
                <div class="input-group">

                    <span class="input-group-addon"><button type="submit" style="background:none;border:0;"><i
                                class="fa fa-search"></i></button></span>
                    <input type="text" name="s" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>


                </div>

            </form>
        </div>
    </div>


    <div class="container">
        <div class="attr-nav">
            <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>

        </div>
        <!-- End Header Navigation -->


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <?php
            if (function_exists('wp_nav_menu')) {
                wp_nav_menu($args = array(
                    'theme_location' => 'main_menu',
                    'menu_class' => 'nav navbar-nav navbar-left',
                ));
            } ?>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!--
 banner
-->
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="padding:0;">
                <img src="<?php echo $banner_image; ?>" alt="#" style="width: 100%;" class="img-responsive">
            </div>
        </div>
</div>
