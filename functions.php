<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');

function register_my_widgets(){
    register_sidebar( array(
        'name' => 'Left Sidebar',
        'id' => "left_sidebar",
        'description' => 'Description sidebar',
// 'class' => '',
// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 'after_widget' => "</li>\n",
// 'before_title' => '<h2 class="widgettitle">',
// 'after_title' => "</h2>\n",
// 'before_sidebar' => '', // WP 5.6
// 'after_sidebar' => '', // WP 5.6
    ) );
}








function theme_register_nav_menu(){
    register_nav_menu('top', 'меню в шапке сайта');
}


function style_theme(){
    wp_enqueue_style('a', get_template_directory_uri().'/assets/css/animated.css');
    wp_enqueue_style('s', get_template_directory_uri().'/assets/css/fontawesome.css');
    wp_enqueue_style('d', get_template_directory_uri().'/assets/css/owl.css');
    wp_enqueue_style('f', get_template_directory_uri().'/assets/css/templatemo-plot-listing.css');
    wp_enqueue_style('g', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('h', get_template_directory_uri().'/assets/css/bootstrap.min.css.map');

}


add_action('wp_footer', 'scripts_theme');
function scripts_theme(){
    wp_enqueue_scripts('q', get_template_directory_uri().'/assets/js/animation.js');
    wp_enqueue_scripts('w', get_template_directory_uri().'/assets/js/custom.js');
    wp_enqueue_scripts('e', get_template_directory_uri().'/assets/js/imagesloaded.js');
    wp_enqueue_scripts('r', get_template_directory_uri().'/assets/js/isotope.js');
    wp_enqueue_scripts('t', get_template_directory_uri().'/assets/js/owl-carousel.js');
    wp_enqueue_scripts('y', get_template_directory_uri().'/assets/js/tabs.js');
    wp_enqueue_scripts('u', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_scripts('i', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js');
    wp_enqueue_scripts('o', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js.map');
}
?>