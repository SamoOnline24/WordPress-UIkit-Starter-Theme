<?php

/**
 * Manages all theme-support-related modifications.
 *
 * @author Nicolai Stäger
 */
class ThemeSupport {

    public function __construct()
    {
        // add HTML5 support
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

        // add Post Format support
        add_theme_support('post-formats', array('image', 'gallery', 'link', 'video', 'audio', 'quote'));

        // add a customizable header (with image and color)
        add_theme_support('custom-header', array('height' => 400, 'width' => 2500, 'default-text-color' => '444'));

        // own image sizes
        add_image_size('tile-background', 700, 700, true);
    }

}