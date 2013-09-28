<?php
/**
 * The Header for our theme.
 * @author Mr Rony<mrtrandangtrinh@gmail.com>
 */

global $sTemplateURL;
$sTemplateURL = get_template_directory_uri();

define('HTML_MODE', (!empty($_GET['htmlmode']) ? '' : '.min') );

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <script src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div id="container">
        <header>
            <section class="container">
                <div id="header">
                    <ul>
                        <li class="logo clearfix">
                            <ul>                              
                                <li class="col-md-6"><a href="<?php echo home_url(); ?>"><img src="<?php echo $sTemplateURL; ?>/img/logo.png" alt="logo"></a></li>
                                <li class="col-md-6">
                                    <div align="right">
                                        <p>Contact US by the telephone number bellow</p>
                                        <p><a href="#">12 <span>(0) 12</span>34 567890</a></p>
                                        <?php wp_nav_menu(array('menu'=>'logo_nav','container'=>'','menu_class'=>'nav nav-pills')); ?>
                                    </div>
                                </li>                             
                            </ul>
                        </li>
                        <li class="menu">
                             <?php wp_nav_menu(array('menu'=>'main_nav','container'=>'','menu_class'=>'nav nav-pills')); ?>
                        </li>
                    </ul>
                </div>
            </section>  
        </header>  