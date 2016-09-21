<?php

/**
* @wordpress-plugin
* Plugin Name: Agreable Post Icon Field
* Plugin URI: http://github.com/shortlist-digital/agreable-post-icon-field
* Description: Add a post icon field to Basic Details
* Version: 1.0.0
* Author: Jon Sherrard
* Author URI: http://jonsherrard.com
* License: GPL2
*/

class AgreablePostIconField
{
    public function __construct()
    {
        add_filter('agreable_base_theme_article_basic_acf', array($this, 'add_icon_field'), 10, 2);
    }

    public function add_icon_field($header_acf, $key)
    {
        $icon_config = array(
            'key' => $key . '_post_icon',
            'label' => 'Icon',
            'name' => 'post_icon',
            'type' => 'image'
        );

        array_push($header_acf['fields'], $icon_config);
        return $header_acf;
    }
}

new AgreablePostIconField();
