<?php

get_header();?>

<div class="landing">
    <div class="footer-callout-text">
        <h1>
            <?php echo get_theme_mod('lwp-footer-callout-headline') ?>
        </h1>
        <?php echo wpautop(get_theme_mod('lwp-footer-callout-text')) ?>
        <div class="hero-cta">
            <!-- cta=call to action-->
            <a href="wordpress/bli-medlem/">Bli medlem</a>
            <a href="">Vad händer</a>
        </div>
    </div>

    <div class="footer-callout-image">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('lwp-footer-callout-image')) ?>">
    </div>

</div>
<!--/Flytta till index vid senare tillfälle! -->
<div class="cards">
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
</div>


<?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>

<div class="cards">
    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
    <div class="card">
        <a href="<?php the_permalink() ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>
    </div>
    <?php endwhile;
    wp_reset_postdata(); ?>



</div>
<?php get_footer(); ?>
