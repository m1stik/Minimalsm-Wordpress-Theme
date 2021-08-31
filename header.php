<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        if ( ! function_exists( '_wp_render_title_tag' ) ) {
            function minimalsm_theme_slug_render_title() {

            wp_title( '|', true, 'right' );

            }
            add_action( 'wp_head', 'minimalsm_theme_slug_render_title' );
        }
    ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="menu-frame" class="menu-frame">
        <div id="close-m-menu" class="close-m-menu text-right">&#9587;</div>
        <?php wp_nav_menu(array('theme_location' => 'secondary_menu')) ?>
    </div>
    <header>
        <div class="container">
            <div class="row align-items-center first-bar">
                <div class="col-3 text-left social-menu">
                    <?php
                        if(!empty(get_theme_mod('set_icon1'))) {
                            echo "<a href=" . esc_url(get_theme_mod('set_link1')) . "><i class='fab " . esc_html(get_theme_mod('set_icon1')) . " fa-lg'></i></a>";
                        }
                        if(!empty(get_theme_mod('set_icon2'))) {
                            echo "<a href=" . esc_url(get_theme_mod('set_link2')) . "><i class='fab " . esc_html(get_theme_mod('set_icon2')) . " fa-lg'></i></a>";
                        }
                        if(!empty(get_theme_mod('set_icon3'))) {
                            echo "<a href=" . esc_url(get_theme_mod('set_link3')) . "><i class='fab " . esc_html(get_theme_mod('set_icon3')) . " fa-lg'></i></a>";
                        }
                        if(!empty(get_theme_mod('set_icon4'))) {
                            echo "<a href=" . esc_url(get_theme_mod('set_link4')) . "><i class='fab " . esc_html(get_theme_mod('set_icon4')) . " fa-lg'></i></a>";
                        }
                    ?>
                </div>
                <div class="col-md-9 col-sm-12 text-right">
                    <nav class="secondary-menu">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu')) ?>
                    </nav>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-sm-12 text-center">
                    <h1 class="logo">
                        <?php the_custom_logo(); if(display_header_text()):?>
                        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        <?php endif; ?>
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <nav class="main-menu">
                        <?php wp_nav_menu(array('theme_location' => 'secondary_menu')) ?>
                    </nav>
                    <div id="mobile-menu" class="mobile-menu">&#9776;</div>
                </div>
            </div>
        </div>
        <hr>
    </header>
    <section>
        <div class="container">
            <div class="row align-items-center second-bar">
                <div class="col-md-6 col-sm-12 text-left breadcrumbs">
                    <?php
                        if (!empty(get_theme_mod('set_breadcrumbs'))) {
                            minimalsm_get_breadcrumb();
                        } else {
                            echo "";
                        }
                    ?>
                </div>
                <div class="col-md-6 text-right search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>