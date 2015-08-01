<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=2.0, user-scalable=yes" />
    <!--  BOOTSTRAP  -->
    <link rel="stylesheet" href="media.css">
    <link rel="icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />
    <?php if(is_home() ) {?>
        <link rel="shortcut icon" href="http://adoralevin.netne.net/wp-content/uploads/2015/07/1-logo1.ico" type="image/x-icon" />
    <?php } else {?>
        <link rel="shortcut icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />
    <?php }?>
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
<div class="menu-wrap">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
    <button class="close-button" id="close-button">Close Menu</button>
</div>

<?php if(!is_product() && !is_archive()) {?>
<div id="container">
    <div id="header">
        <div id="logo" style="position: relative;"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <?php if (get_theme_mod( 'logo_img' )) : ?>
                    <img src="<?php echo esc_url (get_theme_mod( 'logo_img')); ?>" alt="Logo"/>
                <?php endif; ?>
                <div id="site-description">
                    <?php bloginfo( 'description' ); ?>
                </div>
            </a>
        </div>

        <div id="mainmenu">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu-2" class="mainnav">
                    <li class="icon-art"><a href="http://growabrain.tumblr.com/" target="_blank">Art Blog</a></li>
                    <li class="icon-book"><a href="http://www.amazon.com/Songs-Five-Year-Hanan-Levin/dp/1312715995/" target="_blank">My Book</a></li>
                    <li class="icon-songs"><a href="http://growabrain.tumblr.com/tagged/songs-we-wrote" target="_blank">My Songs</a></li>
                    <li class="icon-sites"><a href="http://adoralevin.com/sites/" target="_blank">All My Sites</a></li>
                    <li class="icon-buy"><a href="http://adoralevin.com/shop/" target="_blank">Shop</a></li>
                    <li class="icon-forum"><a href="http://adoralevin.com/forum/" target="_blank">Community</a></li>
                    <li class="icon-charity"><a href="http://adoralevin.com/charity/" target="_blank">Give Back</a></li>
                </ul>
            </div>
        </div>



    </div>
    <?php } ?>


    <!--SHOP PAGE-->
    <?php if (is_archive() || is_page('cart') || is_product() || is_page('checkout')) {?>

        <!--SUBHEADER-->
        <div class="shop_subheader row">
            <div class="container">
                <div class="col-md-9"></div>
                <div class="col-md-3" style="margin-right: -10%;">
                    <div class="col-md-3">
                        <div class="text-center square-link" style="width: 38px; height: 38px; margin-bottom: 5%; margin-top: 5%;">
                            <a href="http://adoralevin.com" target="_blank">
                                <img src="http://localhost/web/hanan/wp-content/uploads/2015/07/logo-icon.png" alt="Home page"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center square-link" style="width: 38px; height: 38px; margin-bottom: 5%; margin-top: 5%;">
                            <a href="mailto:hanan@adoralevin.com" target="_blank">
                                <i class="fa fa-envelope fa-2x" style="margin-top: 9%;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center square-link" style="width: 38px; height: 38px; margin-bottom: 5%; margin-top: 5%;">
                            <a href="https://www.facebook.com/pages/Adora-Art-Project-Fan-Club/837747369619420" target="_blank">
                                <i class="fa fa-facebook fa-2x" style="margin-top: 14%;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center square-link" style="width: 38px; height: 38px; margin-bottom: 5%; margin-top: 5%;">
                            <a href="https://twitter.com/AdoraLevin" target="_blank">
                                <i class="fa fa-twitter fa-2x" style="margin-top: 12%;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--SIDEBAR-->
        <div class="shop_sidebar">
            <?php /*dynamic_sidebar( 'sidebar-1' ); */?>
            <ul class="product_categories">
                <li><a href="http://adoralevin.com/wp-content/uploads/2015/05/Book_blue.png" class="category">Adora Book</a></li>
                <li><a href="http://adoralevin.com/wp-content/uploads/2015/05/Mug_blue.png" class="category">Adora coffe mugs</a></li>
                <li><a href="http://adoralevin.com/wp-content/uploads/2015/05/Mouse_blue.png" class="category">Adora mouse pad</a></li>
                <li><span class="parent_category">Adora Shirts</span><br/>
                    <a href="http://www.zazzle.com/songs_for_five_year_olds_shirts-235945995068783534" class="subcategory">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dot.png" style="width:10px; margin-right: 3%; margin-bottom: 1%;"/>Female T-Shirt
                    </a><br/>
                    <a href="http://www.zazzle.com/songs_for_five_year_olds_shirts_mens_t_shirt-235479052345941175" class="subcategory">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dot.png" style="width:10px; margin-right: 3%; margin-bottom: 1%;"/>Male T-Shirt
                    </a><br/>
                </li>
                <li><a href="http://www.zazzle.com/songs_for_five_year_olds_shirts_tote_bag-149398615970097273" class="category">Adora Tote bag</a><br/></li>
                <li><span class="parent_category">Art Cards</span><br/>
                    <a href="http://adoralevin.com/shop/?add-to-cart=203" class="subcategory">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dot.png" style="width:10px; margin-right: 3%; margin-bottom: 1%;"/>6 Movie posters Adora
                    </a><br/>
                    <a href="" class="subcategory">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dot.png" style="width:10px; margin-right: 3%; margin-bottom: 1%;"/>6 November 2012 Adora
                    </a><br/>
                    <a href="http://adoralevin.com/shop/?add-to-cart=209" class="subcategory">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dot.png" style="width:10px; margin-right: 3%; margin-bottom: 1%;"/>I love Dad greeting card
                    </a><br/>
                </li>
                <li><a href="http://adoralevin.com/wp-content/uploads/2015/05/Dorian_blue.png" class="category">Original Adora art</a></li>
            </ul>
        </div>

    <?php }?>



    <?php if(is_home() ) {?>

    <div class=" mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--red-900">
            <div class="mdl-layout__header-row">

                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="<?php echo esc_url( home_url( '/' ) );?>">
                        <img class="image-icon" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_original_white_circle.png" alt="">
                        Adora
                    </a>
                    <a class="mdl-navigation__link" href="<?php echo esc_url( home_url( '/shop' ) );?>">
                        <i class="fa fa-shopping-cart fa-lg"></i>&nbsp;&nbsp;Shop
                    </a>
                    <!--<a class="mdl-navigation__link" href="<?php echo esc_url( home_url( '/opposites' ) );?>">
                        <img class="image-icon" src="<?php echo get_bloginfo('template_directory'); ?>/images/vinyl-logo.png" alt="">
                        Music
                    </a>-->
                    <a class="mdl-navigation__link" href="<?php echo esc_url( home_url( '/' ) );?>">
                        <i class="fa fa-music fa-lg"></i>&nbsp;&nbsp;Music
                    </a>
                </nav>
            </div>
        </header>


        <?php }?>

        <?php if(!is_home() ) {?>
        <div id="container">
            <div id="header2">
                <a class="menu-button" id="open-button" style="text-align: center; margin-left: 5%"></a>
                <a id="logo2" href="http://adoralevin.com">
                    <img src="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle_100.png" style="margin-top: 3px" alt="Logo"/>
                </a>
                <!--<div id="logo2" style="position: relative;"> <a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" title="<?php /*echo esc_attr( get_bloginfo( 'name', 'display' ) ); */?>" rel="home">
                <?php /*if (get_theme_mod( 'logo_img' )) : */?>
                    <img src="<?php /*echo esc_url (get_theme_mod( 'logo_img')); */?>">
                <?php /*endif; */?>
            </a>
        </div>-->

                <div id="mainmenu1">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu-2" class="mainnav">
                            <li class="icon-art"><a href="http://growabrain.tumblr.com/" target="_blank">Art Blog</a></li>
                            <li class="icon-book"><a href="http://www.amazon.com/Songs-Five-Year-Hanan-Levin/dp/1312715995/" target="_blank">My Book</a></li>
                            <li class="icon-songs"><a href="http://growabrain.tumblr.com/tagged/songs-we-wrote" target="_blank">My Songs</a></li>
                            <li class="icon-sites"><a href="http://adoralevin.com/sites/" target="_blank">All My Sites</a></li>
                            <li class="icon-buy"><a href="http://adoralevin.com/shop/" target="_blank">Shop</a></li>
                            <li class="icon-forum"><a href="http://adoralevin.com/forum/" target="_blank">Community</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php }?>
