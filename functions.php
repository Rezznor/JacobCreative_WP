<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/** 
 * Add Google Fonts
 * https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Mulish:wght@600&family=Nunito:wght@300;400;700&family=Roboto:wght@400;500;700&family=Bebas+Neue&family=Poppins:wght@400;500;600&display=swap
 */
function add_google_fonts()
{
    wp_enqueue_style('add_google_fonts_bebas', 'https://fonts.googleapis.com/css2?family=Bebas+Neue', false);
    wp_enqueue_style('add_google_fonts_poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600', false);
    wp_enqueue_style('add_google_fonts_roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700', false);
}

add_action('wp_enqueue_scripts', 'add_google_fonts');

/**
 * Add Font Awesome icons
 */
function add_font_awesome()
{
    wp_enqueue_script('add_font_awesome', 'https://kit.fontawesome.com/4de0c291ed.js', false);
}

add_action('wp_enqueue_scripts', 'add_font_awesome');

/**
 * Add Custom JS
 */
function add_custom_js()
{
    $theme = wp_get_theme();
    wp_enqueue_script('add_custom_js', tailpress_asset('js/index.js'), array('jquery'), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'add_custom_js');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(),  get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);

/* Disable Admin Bar during Dev */
add_filter('show_admin_bar', '__return_false');
