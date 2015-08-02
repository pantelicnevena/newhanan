<?php
/**
 * Created by PhpStorm.
 * User: enco
 * Date: 7/23/15
 * Time: 12:33 AM
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


<body <?php body_class(); ?> style="border-collapse:collapse; display : table;">


<div class=" mdl-layout--overlay-drawer-button">
<!--
    <header class="mdl-layout__header mdl-layout__header--scroll">

        <div class="mdl-layout__header-row mdl-color--red-900">


            <div class="mdl-layout-spacer"></div>

            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Home</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>

    </header>
    <div class="mdl-layout__drawer">
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="http://adoralevin.com/wp-content/uploads/2015/05/Book_blue.png">Adora Book</a>
            <a class="mdl-navigation__link" href="http://adoralevin.com/wp-content/uploads/2015/05/Mug_blue.png">Adora coffe mugs</a>
            <a class="mdl-navigation__link" href="http://adoralevin.com/wp-content/uploads/2015/05/Mouse_blue.png">Adora mouse pad</a>
            Adora Shirts
            <ul>
                <li>
                    <a class="mdl-navigation__link" href="http://www.zazzle.com/songs_for_five_year_olds_shirts-235945995068783534">
                        <i class="fa fa-arrow-right fa-fw"></i>
                        Female T-Shirt
                    </a>
                </li>
                <li>
                    <a class="mdl-navigation__link" href="http://www.zazzle.com/songs_for_five_year_olds_shirts_mens_t_shirt-235479052345941175">
                        <i class="fa fa-arrow-right fa-fw"></i>
                        Male T-Shirt
                    </a>
                </li>
            </ul>
            <a class="mdl-navigation__link" href="http://www.zazzle.com/songs_for_five_year_olds_shirts_tote_bag-149398615970097273">
                Adora Tote bag
            </a>

            Art Cards
            <a class="mdl-navigation__link" href="http://adoralevin.com/shop/?add-to-cart=203">
                6 Movie posters Adora
            </a>
            <a class="mdl-navigation__link" href="">
                6 November 2012 Adora
            </a>
            <a class="mdl-navigation__link" href="http://adoralevin.com/shop/?add-to-cart=209">
                I love Dad greeting card
            </a>
            <a class="mdl-navigation__link" href="http://adoralevin.com/wp-content/uploads/2015/05/Dorian_blue.png">
                Original Adora art
            </a>
        </nav>
    </div>
-->
        <div class="cover-image-shop ">
            <a href="<?php echo esc_url( home_url( '/shop' ) );?>">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/shop-header-img.jpg" alt="Adora Livin's e-store"
                    style="width: 100%;">
            </a>
        </div>
    <!--<header class="mdl-layout__header mdl-layout__header--scroll">

            <div class="mdl-layout__header-row mdl-color--teal-700">


                <div class="mdl-layout-spacer"></div>

                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="<?php /*echo esc_url( home_url( '/' ) );*/?>">
                        <img class="image-icon" src="<?php /*echo get_bloginfo('template_directory'); */?>/images/logo_original_white_circle.png" alt="">
                        Home
                    </a>
                    <a class="mdl-navigation__link" href="<?php /*echo esc_url( home_url( '/shop' ) );*/?>">
                        <i class="fa fa-shopping-cart fa-lg"></i> Shop
                    </a>
                    <a class="mdl-navigation__link" href="<?php /*echo esc_url( home_url( '/opposites' ) );*/?>">
                        <img class="image-icon" src="<?php /*echo get_bloginfo('template_directory'); */?>/images/vinyl-logo.png" alt="">
                        Opposites
                    </a>
                    <a class="mdl-navigation__link" href="<?php /*echo esc_url( home_url( '/charity' ) );*/?>">
                        Charity
                    </a>
                </nav>
            </div>

        </header>-->
