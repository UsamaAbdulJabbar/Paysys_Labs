<?php 
/**
 *Plugin Name: RSElements
 * Description: <a href="http://rstheme.com/products/wordpress/plugins/elementor">RS Elementor Addon</a> is the most advanced frontend drag & drop page builder addon. Create high-end, pixel perfect websites at record speeds. Any theme, any page, any design.
 * Plugin URI:  https://rstheme.com/
 * Version:     2.0.4
 * Author:      rs-theme
 * Author URI:  https://rstheme.com/
 * Text Domain: rsaddon
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


add_action( 'init', 'rsaddon_load_textdomain' );
  
/**
 * Load plugin textdomain.
 */
function rsaddon_load_textdomain() {
  load_plugin_textdomain( 'rsaddon', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}

define( 'RSELEMENT_VERSION', '2.0.4' );
define( 'RSADDON_PLUGIN_FILE', __FILE__ );
define( 'RSADDON_DIR_PATH_PRO', plugin_dir_path( __FILE__ ) );
define( 'RSADDON_DIR_URL_PRO', plugin_dir_url( __FILE__ ) );
define( 'RSADDON_ASSETS_PRO', trailingslashit( RSADDON_DIR_URL_PRO . 'assets' ) );



require RSADDON_DIR_PATH_PRO . 'base.php';
require RSADDON_DIR_PATH_PRO . 'post-type/post-type.php';
require RSADDON_DIR_PATH_PRO . 'shortcode-elementor/elementor-shortcode.php';
add_image_size( 'rsaddon-team-round-style', 500, 500, true );

require RSADDON_DIR_PATH_PRO . 'admin/admin-init.php';


if ( ! function_exists( 'rsaddon_file_types_to_uploads' ) ) {
  function rsaddon_file_types_to_uploads($file_types){
    $new_filetypes        = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types           = array_merge($file_types, $new_filetypes );
    return $file_types;
  }
  add_filter('upload_mimes', 'rsaddon_file_types_to_uploads');

}