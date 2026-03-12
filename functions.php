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

// Add defer to jQuery and jquery-migrate to eliminate render-blocking JS
function bn_defer_jquery($tag, $handle)
{
    if (is_admin()) {
        return $tag;
    }
    if ($handle === 'jquery-core' || $handle === 'jquery-migrate') {
        return str_replace(' src=', ' defer src=', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'bn_defer_jquery', 10, 2);

// Load Bootstrap grid CSS non-render-blocking (only used for layout, not critical paint)
function bn_async_bootstrap_css($html, $handle)
{
    if ($handle === 'bootstrap-css') {
        $html = str_replace("media='all'", "media='print' onload=\"this.media='all'\"", $html);
    }
    return $html;
}
add_filter('style_loader_tag', 'bn_async_bootstrap_css', 10, 2);

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

