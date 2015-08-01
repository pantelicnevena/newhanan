<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=2.0, user-scalable=yes" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--  BOOTSTRAP  -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <link rel="icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://adoralevin.com/wp-content/uploads/2015/05/logo_original_white_circle.ico" type="image/x-icon" />
    <title>
        <?php wp_title('|',true,'right'); ?>
    </title>
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> style="border-collapse:collapse;
    display : table;">
<div class="menu-wrap">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
    <button class="close-button" id="close-button">Close Menu</button>
</div>
<div id="container">
    <?php if(!is_product() ) {?>
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
<!--        <a class="menu-button" id="open-button"></a>-->
        <div id="mainmenu">
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

        <!-- Start of StatCounter Code for Default Guide -->
	<script type="text/javascript">
		var sc_project=10453760; 
		var sc_invisible=0; 
		var sc_security="0120b437"; 
		var scJsHost = (("https:" == document.location.protocol) ?
			"https://secure." : "http://www.");
		document.write("<sc"+"ript type='text/javascript' src='" +
			scJsHost+
			"statcounter.com/counter/counter.js'></"+"script>");
	</script>

	<noscript>
		<div id="statcounter_image" class="statcounter">
			<a title="hit counter"
				href="http://statcounter.com/" target="_blank"><img
				class="statcounter"
				src="http://c.statcounter.com/10453760/0/0120b437/0/"
				alt="hit counter">
			</a>
		</div>
	</noscript>
	<!-- End of StatCounter Code for Default Guide -->

        <?php /*if(is_front_page() ) { */?>
<!--        <div id="statcounter_image" style="display:inline; position: absolute;">
            <a title="shopify analytics ecommerce"
               href="http://statcounter.com/shopify/" target="_blank"><img
                    src="http://c.statcounter.com/10444079/0/664b6a9d/0/"
                    alt="shopify analytics ecommerce" style="border:none;"></a>
        </div>-->
        <?php /*}*/ ?>
        <!--<div style="text-align: left; width: 55%; padding-right: 8%; position: absolute; bottom: 5%; left:10%; background-color: #F08894">
            <span style="padding: 0;color:#fff"><b>adoralevin.com&#153;</b></span>
        </div>-->

    </div>
    <?php } ?>

    <?php if(is_home() ) {?>
    <div class="opposites_cover">
	<img src="http://adoralevin.netne.net/wp-content/uploads/2015/07/oppposite.png" alt="Cover image">
<!--        <img src="http://adoralevin.com/wp-content/uploads/2015/07/tumblr_static_apyekj7a014oswkgc408gkcw4.jpg" alt="Cover image"/>-->
	<div>
	    <!--<h1>OPPOSITES</h1>-->
	    <h2 style="margin-bottom: 1.5%; font-size: 38px; font-weight: 600;">Lyrics by Adora Levin & Hanan Levin</h2>
        <span><b>When Adora was 4 years old, we started composing little songs together. In the past 18 months, we wrote about 40 songs, and published one book.</b></span><br/>
        <span><b>Many of these songs had been put to music by musicians from around the world.</b></span><br/>
        <span><b>The song “Opposites“ was interpreted in 6 different styles.</b></span><br/>
        <span><b>Now you can up­vote for the versions you like. No registration needed.</b></span>
	</div>
    </div>
    <div id="header_opposites" ><h3 style="line-height: 1.6; font-weight: 500;">
	An old dad, a young mom,<br/>
	The one stayed, the other gone.<br/>
	A dark hole, a bright sun,<br/>
	A pretty daughter is so much fun.
	<hr/>
	A long road, a fast car<br/>
	The sky and moon, they are so far.<br/>
	Today we’re here,<br/>
	Tomorrow there<br/>
	We’re waiting for the ones who care.
	<hr/>
	A paper cup, a metal spoon<br/>
	A lonely cat, a bride and groom.<br/>
	A glass of milk, a cup of tea.<br/>
	I love that you are here with me!<br/>
    </h3></div>
    <?php }?>

    <?php if(!is_home() ) {?>
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
