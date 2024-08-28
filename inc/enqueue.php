<?php


function themes_css_js_calling(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(),'v5.0.2');
    wp_register_style('custom',get_template_directory_uri().'/css/custom.css', array(),'1.0.0','all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jQuery Add 
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array(),'v5.0.2','true');
    wp_enqueue_script('main_js',get_template_directory_uri().'/js/main.js',array(),'1.0.0','true');

}
add_action("wp_enqueue_scripts","themes_css_js_calling");

// Google Font Enqueue
function theme_fontsAdd(){
    wp_enqueue_style('theme_google_fonts','https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&display=swap',false);
}
add_action("wp_enqueue_scripts","theme_fontsAdd");