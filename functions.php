<?php

/**
 * Theme Functions.
 * 
 * @package GlobalEdnovation
 */

if (!defined('GE_DIR_PATH')) {
    define('GE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('GE_DIR_URI')) {
    define('GE_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

// echo '<pre>';
// print_r(GE_DIR_PATH);
// wp_die();
require_once GE_DIR_PATH . '/inc/helpers/autoloader.php';
require_once GE_DIR_PATH . '/inc/helpers/template-tags.php';

function ge_get_theme_instance()
{
    \GE_THEME\Inc\GE_THEME::get_instance();
}

ge_get_theme_instance();

function ge_enqueue_scripts()
{
}

add_action('wp_enqueue_scripts', 'ge_enqueue_scripts');
