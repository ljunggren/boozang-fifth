<?php

//All resourses
require('inc/site-recources.php');

//Theme support
require('inc/theme-support.php');

// main menu
require('inc/menus.php');

//Widget locations
require('inc/widgets.php');

//Custom Post Types
require('inc/custom-post-types.php');

//Custom Taxonomies
require('inc/custom-taxonomies.php');

//ACF options page
require('inc/acf-settings.php');

// Remove Asgaros Forum assets on non-forum pages (3 render-blocking CSS files)
function bn_dequeue_forum_assets()
{
    if (is_page_template('page-forum.php')) {
        return;
    }
    wp_dequeue_style('af-fontawesome');
    wp_dequeue_style('af-fontawesome-compat-v4');
    wp_dequeue_style('af-widgets');
}
add_action('wp_enqueue_scripts', 'bn_dequeue_forum_assets', 20);

// Move jQuery to footer to eliminate render-blocking JS
function bn_move_jquery_to_footer()
{
    if (is_admin()) {
        return;
    }
    wp_scripts()->add_data('jquery-core', 'group', 1);
    wp_scripts()->add_data('jquery-migrate', 'group', 1);
}
add_action('wp_enqueue_scripts', 'bn_move_jquery_to_footer', 20);

// Preconnect to Google Fonts to speed up font loading
function bn_preconnect_google_fonts()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'bn_preconnect_google_fonts', 1);

// Preload hero background image on front page to improve LCP
function bn_preload_hero_image()
{
    if (!is_front_page()) {
        return;
    }
    $bg_image = get_field('background_image');
    if ($bg_image) {
        $url = wp_get_attachment_url($bg_image);
        if ($url) {
            echo '<link rel="preload" as="image" href="' . esc_url($url) . '" fetchpriority="high">' . "\n";
        }
    }
}
add_action('wp_head', 'bn_preload_hero_image', 1);

