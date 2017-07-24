<!DOCTYPE html>
<html <?php language_attributes() ?>>
<!-- hjälper google att veta vilket språk som ska användas vid översättning, samt om man har screen reader så är detta bra att ha verkar det som -->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500" rel="stylesheet">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
    <!-- wp_head(); Gör att WordPress kan fylla i information som kan behövas vid tillägg -->
</head>

<body <?php body_class(); ?>>
    <!-- hjälper css att peka på olika sidor-->

    <!--Site header-->
    <header class="site-header">
        <nav>
            <!--Logotyp-->
            <div class="logo">
<?php the_custom_logo(); ?>
            </div>
            <!--/Logotyp-->
            <div class="Menu">
                <?php $args = array('theme_location' => 'primary'); ?>
                <?php wp_nav_menu($args); ?>
            </div>
            <!-- Gör att man kan drag 'n drop i menyn så inte alla pages syns-->
        </nav>
    </header>
    <!--/Site header-->







