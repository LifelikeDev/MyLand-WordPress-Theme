<?php
/*
Theme functions

@package myland
*/

if( !defined("MYLAND_DIR_PATH") ) {
    define("MYLAND_DIR_PATH", untrailingslashit( get_template_directory() ));
}

if( !defined("MYLAND_DIR_URI") ) {
    define("MYLAND_DIR_URI", untrailingslashit( get_template_directory_uri() ));
}

require_once MYLAND_DIR_PATH."/inc/helpers/autoloader.php";
require_once MYLAND_DIR_PATH."/inc/helpers/template-tags.php";


function myland_get_theme_instance() {
    \MYLAND_THEME\Inc\MYLAND_THEME::get_instance();
}

myland_get_theme_instance();



function myland_theme_enqueue_style() {

    // wp_enqueue_style( "style-css", get_stylesheet_uri(), [], filemtime( get_template_directory()."/style.css"), "all");
    // wp_enqueue_script( "main-js", get_template_directory_uri()."/assets/main.js", [], filemtime(get_template_directory()."/assets/main.js"), true );

}


?> 