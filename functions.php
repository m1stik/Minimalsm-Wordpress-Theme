<?php

require get_template_directory() . '/inc/customizer.php';

function minimalsm_load_scripts() {
    wp_enqueue_script('jquery');
    //wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
    //wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all' );
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1', 'all' );
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Comfortaa:300|Open+Sans:300&amp;subset=cyrillic', array(), '1.0', 'all' );
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1.1', 'all' );
    wp_style_add_data( 'main-css', 'rtl', 'replace' );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.2', true);
}
add_action( 'wp_enqueue_scripts', 'minimalsm_load_scripts' );

function minimalsm_editor_style() {
    wp_enqueue_style('gutenberg-editor-styles', get_template_directory_uri() . '/assets/css/style-editor.css');
    add_editor_style(get_template_directory_uri() . '/assets/css/style-editor.css');
    wp_enqueue_style('googlefonts-editor', 'https://fonts.googleapis.com/css?family=Comfortaa:300|Open+Sans:300&amp;subset=cyrillic', array(), '1.0', 'all' );
}

add_action('enqueue_block_editor_assets', 'minimalsm_editor_style');

function minimalsm_config() {
    register_nav_menus (
        array(
            'main_menu' => __('Main menu', 'minimalsm'),
            'secondary_menu' => __('Secondary menu', 'minimalsm')
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920,
        'header-text' => true
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('image', 'video', 'audio', 'quote'));
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));
    add_theme_support( 'automatic-feed-links' );

    if ( ! isset( $content_width ) ) $content_width = 900;

    $textdomain = 'minimalsm';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    //Gutenbergs
    add_theme_support('align-wide');
}

add_action('after_setup_theme', 'minimalsm_config', 0);

add_action('widgets_init', 'minimalsm_sidebars');

function minimalsm_sidebars() {
    register_sidebar(
        array(
            'name' => __('Sidebar', 'minimalsm'),
            'id' => 'main-sidebar',
            'description' => __('The sidebar which appears on pages.', 'minimalsm'),
            'before_widget' => '<div class="single-widget">',
            'after_widget' => '</div>',
            'before_title' => '<p class="widget-title">',
            'after_title' => '</p>'
        )
    );
}

function minimalsm_get_breadcrumb() {
    
    if (is_category() || is_single()) {
        echo '<a href="'.esc_attr(home_url()).'" rel="nofollow">' . esc_html__('Home', 'minimalsm') . '</a>';
        echo "<span> / </span>";
        the_category(' / ');
            if (is_single()) {
                echo "<span> / ";
                the_title();
                echo "</span>";
            }
    } elseif (is_front_page()) {
        echo '<a href="'.esc_attr(home_url()).'" rel="nofollow">' . esc_html__('Home', 'minimalsm') . '</a>';
    } elseif (is_page()) {
        echo '<a href="'.esc_attr(home_url()).'" rel="nofollow">' . esc_html__('Home', 'minimalsm') . '</a>';
        echo "<span> / ";
        the_title();
        echo "</span>";
    } elseif (is_search()) {
        echo '<a href="'.esc_attr(home_url()).'" rel="nofollow">' . esc_html__('Home', 'minimalsm') . '</a>';
        echo ' / ' . esc_html__('Search for ', 'minimalsm') . ' ';
        echo '"<em>';
        echo esc_html(the_search_query());
        echo '</em>"';
    }
}