<?php
/**
 * Created by PhpStorm.
 * User: enco
 * Date: 7/27/15
 * Time: 4:08 PM
 */

get_header('charity');
?>
<div class="opposites_cover">
    <h1 class="opposites-title">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/vinyl-logo.png" alt=""/>
    </h1>
</div>

<div class="mdl-grid">
    <div class="mdl-cell--3-col-desktop mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-cell--6-col-desktop mdl-cell--10-col-tablet mdl-cell--12-col-phone">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post post-charity" id="post-<?php the_ID(); ?>">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="mdl-cell--3-col-desktop mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

    <div class="mdl-cell--3-col-desktop mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-cell--2-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone post-charity" style="text-align: center;">
        <a href="<?php echo esc_url( home_url( '/donation' ) );?>">
            <p><i class="fa fa-heart fa-3x"></i></p><p>Donate today</p>
        </a>
    </div>
    <div class="mdl-cell--2-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone post-charity" style="text-align: center;">
        <a href="<?php echo esc_url( home_url( '/' ) );?>">
            <p><i class="fa fa-book fa-3x"></i></p><p>Learn more</p>
        </a>
    </div>
    <div class="mdl-cell--2-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone post-charity" style="text-align: center;">
        <a href="mailto:donate@adoralevin.com">
            <p><i class="fa fa-envelope fa-3x"></i></p><p>Contact Adora</p>
        </a>
    </div>
    <div class="mdl-cell--3-col-desktop mdl-cell--1-col-tablet mdl-cell--hide-phone"></div>
</div>


<?php get_footer('charity'); ?>
