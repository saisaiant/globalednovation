<?php

/**
 *  Bootstraps the theme.
 * 
 * @package GlobalEdnovation
 */

namespace GE_THEME\Inc;

use GE_THEME\Inc\Traits\Singleton;

class GE_THEME
{
    use Singleton;

    protected function __construct()
    {
        wp_die('hello');
        // load classes
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        // actions and filters
    }
}
