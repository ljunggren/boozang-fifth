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

