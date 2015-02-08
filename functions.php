<?php


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


/* Add bootstrap support to the Wordpress theme*/
 
function theme_add_bootstrap() {
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.2', true );

}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

?>

<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
?>