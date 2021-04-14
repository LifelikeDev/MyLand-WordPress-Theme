<?php
/*
Bootstraps the theme

@package myland
*/

namespace MYLAND_THEME\Inc;

use MYLAND_THEME\Inc\Traits\Singleton;

class MYLAND_THEME {
    use Singleton;

    protected function __construct() {
        // Load classes...
        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // actions
        add_action("after_setup_theme", [$this, "setup_theme"]);
    }

    public function setup_theme() {
        // add a title tag
        add_theme_support( "title-tag" );

        // add a custom logo
        add_theme_support( "custom-logo", [
            "header-text" => ["site-title", "site-description"],
            "height" => 50,
            "width" => 100,
            "flex-height" => false,
            "flex-width" => false
        ]);

        // add post thumbnails
        add_theme_support( "post-thumbnails");

        // add custom selective refresh widgets
        add_theme_support( "customize-selective-refresh-widgets" );

        // add automatic feedlinks
        add_theme_support( "automatic-feed-links" );

        //  add html5 support
        add_theme_support( "html5", [
            "search-form",
            "comment-form",
            "comment-list",
            "gallery",
            "caption",
            "script",
            "style",
        ]);

        // add theme editor supports
        add_editor_style();
        add_theme_support("wp-block-scripts");
        add_theme_support("align-wide");
    }

}