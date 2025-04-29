<?php if ( ! defined( 'ABSPATH' ) ) exit;

// Function to delete the plugin's database table when the plugin is uninstalled
function ucsm_uninstall_lite() {
    
}
// Register the uninstall hook
register_uninstall_hook(__FILE__, 'ucsm_uninstall_lite');