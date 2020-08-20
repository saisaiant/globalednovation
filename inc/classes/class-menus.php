<?php

/**
 * Register Menu 
 * 
 * @package GlobalEdnovation
 */

namespace GE_THEME\Inc;

use GE_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        // wp_die('hello');
        // load classes
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        // Actions
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus(
            [
                'ge-header-menu' => esc_html__('Header Menu', 'globalednovation'),
                'ge-footer-menu' => esc_html__('Footer Menu', 'globalednovation')
            ]
        );
    }
}
