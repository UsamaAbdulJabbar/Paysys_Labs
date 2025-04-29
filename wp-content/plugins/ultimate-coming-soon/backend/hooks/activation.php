<?php if ( ! defined( 'ABSPATH' ) ) exit;
// Function to insert data template and default data during activation
function ucsm_activate_lite() {
    
    include UCSM_PLUGIN_DIR_LITE . 'functions/default-data.php';
    

}
register_activation_hook(__FILE__, 'ucsm_activate_lite');

// Add cache control headers to prevent browser caching
function ucsm_add_cache_control_headers() {
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Cache-Control: post-check=0, pre-check=0', false);
    header('Pragma: no-cache');
}
add_action('init', 'ucsm_add_cache_control_headers');