<?php
/**
 * Created by PhpStorm.
 * User: enco
 * Date: 7/27/15
 * Time: 4:09 PM
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=2.0, user-scalable=yes" />
    <!--  BOOTSTRAP  -->
    <link rel="icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />
    <title>
        <?php wp_title('|',true,'right'); ?>
    </title>
    <?php wp_head(); ?>

    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-176010-4', 'auto');
        ga('send', 'pageview');

    </script>

</head>


<body>
<div class="layout-transparent">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">

            <div class="mdl-layout-spacer"></div>

            <nav class="mdl-navigation mdl-color-text--black">
                <a class="mdl-navigation__link mdl-color-text--black" href="<?php echo esc_url( home_url( '/' ) );?>">
                    <img class="image-icon" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_original_white_circle.png" alt="">
                    Adora
                </a>
                <a class="mdl-navigation__link mdl-color-text--black" href="<?php echo esc_url( home_url( '/donation' ) );?>">
                    <i class="fa fa-money fa-lg"></i>&nbsp;&nbsp;Charity
                </a>
                <a class="mdl-navigation__link mdl-color-text--black" href="mailto:hanan@adoralevin.com">
                    <i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;Contact
                </a>
            </nav>
        </div>

    </header>

