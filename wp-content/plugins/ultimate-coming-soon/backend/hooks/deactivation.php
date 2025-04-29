<?php if ( ! defined( 'ABSPATH' ) ) exit;

// Function to save the data before deactivation
function ucsm_deactivate_lite() {
    
}
register_deactivation_hook(__FILE__, 'ucsm_deactivate_lite');