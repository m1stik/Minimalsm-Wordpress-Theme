<?php

function minimalsm_customizer($wp_customize) {
    
    //Copyright
    $wp_customize-> add_section('sec_copyright', array(
        'title' => __('Minimalsm settings', 'minimalsm'),
        'description' => __('Customization of Minimalsm theme', 'minimalsm')
    ));

    $wp_customize-> add_setting('set_copyright', array(
        'type' => 'theme_mod',
        'default' => 'Copyright 2018.',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_copyright', array(
        'label' => __('Copyright information', 'minimalsm'),
        'description' => __('You can input your copyright here', 'minimalsm'),
        'section' => 'sec_copyright',
        'settings' => 'set_copyright',
        'type' => 'text'
    ));

    $wp_customize-> add_setting('set_breadcrumbs', array(
        'type' => 'theme_mod',
        'default' => 1,
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_breadcrumb', array(
        'label' => __('Breadcrumbs', 'minimalsm'),
        'description' => __('Enable or disable breadcrumbs', 'minimalsm'),
        'section' => 'sec_copyright',
        'settings' => 'set_breadcrumbs',
        'type' => 'checkbox'
    ));

    $wp_customize-> add_setting('set_postsidebar', array(
        'type' => 'theme_mod',
        'default' => 0,
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_postsidebar', array(
        'label' => __('Post sidebar', 'minimalsm'),
        'description' => __('Enable or disable a sidebar on a post page', 'minimalsm'),
        'section' => 'sec_copyright',
        'settings' => 'set_postsidebar',
        'type' => 'checkbox'
    ));
    
    //Social icons
    $wp_customize-> add_section('sec_social', array(
        'title' => __('Social icons', 'minimalsm'),
        'description' => __('Add or remove social icons', 'minimalsm')
    ));

    $wp_customize-> add_setting('set_icon1', array(
        'type' => 'theme_mod',
        'default' => 'wordpress-simple',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_icon1', array(
        'label' => __('Social icon 1', 'minimalsm'),
        'description' => __("Put here name of icon from ", 'minimalsm') . "<a href='https://fontawesome.com/icons'>Font Awesome</a>",
        'section' => 'sec_social',
        'settings' => 'set_icon1',
        'type' => 'text'
    ));
    $wp_customize-> add_setting('set_link1', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_link1', array(
        'description' => __('Put here the link', 'minimalsm'),
        'section' => 'sec_social',
        'settings' => 'set_link1',
        'type' => 'url'
    ));
    
    $wp_customize-> add_setting('set_icon2', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_icon2', array(
        'label' => __('Social icon 2', 'minimalsm'),
        'description' => __("Put here name of icon from ", 'minimalsm') . "<a href='https://fontawesome.com/icons'>Font Awesome</a>",
        'section' => 'sec_social',
        'settings' => 'set_icon2',
        'type' => 'text'
    ));
    $wp_customize-> add_setting('set_link2', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_link2', array(
        'description' => __('Put here the link', 'minimalsm'),
        'section' => 'sec_social',
        'settings' => 'set_link2',
        'type' => 'url'
    ));

    $wp_customize-> add_setting('set_icon3', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_icon3', array(
        'label' => __('Social icon 3', 'minimalsm'),
        'description' => __("Put here name of icon from ", 'minimalsm') . "<a href='https://fontawesome.com/icons'>Font Awesome</a>",
        'section' => 'sec_social',
        'settings' => 'set_icon3',
        'type' => 'text'
    ));
    $wp_customize-> add_setting('set_link3', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_link3', array(
        'description' => __('Put here the link', 'minimalsm'),
        'section' => 'sec_social',
        'settings' => 'set_link3',
        'type' => 'url'
    ));

    $wp_customize-> add_setting('set_icon4', array(
        'type' => 'theme_mod',
        'default' => '',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_icon4', array(
        'label' => __('Social icon 4', 'minimalsm'),
        'description' => __("Put here name of icon from ", 'minimalsm') . "<a href='https://fontawesome.com/icons'>Font Awesome</a>",
        'section' => 'sec_social',
        'settings' => 'set_icon4',
        'type' => 'text'
    ));
    $wp_customize-> add_setting('set_link4', array(
        'type' => 'theme_mod',
        'default' => '#',
        'sanitize_callback' => 'esc_attr'
    ));
    $wp_customize-> add_control('ctrl_link4', array(
        'description' => __('Put here the link', 'minimalsm'),
        'section' => 'sec_social',
        'settings' => 'set_link4',
        'type' => 'url'
    ));
}

add_action('customize_register', 'minimalsm_customizer');