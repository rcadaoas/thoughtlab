<?php
/*REQUIRE ONCE*/
// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');


/*ADD ACTION*/
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


/* Add jquery library*/
function theme_add_jquery() {
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_jquery' );

/* Add bootstrap libraries to the Wordpress theme*/
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.2', true );
}
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

/* Add fontawesome library*/
function theme_add_fontawesome() {
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_add_fontawesome' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function thoughtlab_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'thoughtlab_widgets_init' );


/*ADD FILTER*/

//Modify read more link
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link($more_link_text) {
	//add the bootsrap class for button
	return  str_replace('more-link', 'more-link btn btn-primary', $more_link_text);
}

?>
