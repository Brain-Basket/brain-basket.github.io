<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Deneb.
 *
 * @package Finance Business
 * @author  wptexture http://testerwp.com/
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
 
add_action( 'wp_enqueue_scripts', 'finance_business_child_css',25);
function finance_business_child_css() {
	wp_enqueue_style( 'finance-business-parent-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'finance-business-child-style',get_stylesheet_directory_uri() . '/child-css/child.css');
	wp_enqueue_script( 'finance-business-custom-script', get_stylesheet_directory_uri() . '/child-js/custom_script.js');
 
}