<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('astra-parent', get_template_directory_uri() . '/assets/css/minified/style.min.css');
    wp_enqueue_style('astra-child', get_stylesheet_uri());
}

?>