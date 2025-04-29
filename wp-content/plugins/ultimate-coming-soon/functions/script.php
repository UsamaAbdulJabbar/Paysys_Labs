<?php if ( ! defined( 'ABSPATH' ) ) exit;
function ucsm_wp_script_lite(){
	if (isset($_GET['page']) && ($_GET['page'] === 'ucsm-general-settings-lite'  || $_GET['page'] === 'wpucs-advanced-settings-lite' )){
    
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_script('media-upload');
	wp_enqueue_script('theme-preview');
	wp_enqueue_script('jquery');
	wp_enqueue_script('wp-util'); 
	wp_enqueue_script('wp-color-picker');
	wp_enqueue_style('ucsm-spectrum-css', UCSM_PLUGIN_URL_LITE.'assets/css/spectrum.min.css', array(), '1.8.0');
	wp_enqueue_style('ucsm-bootstrap_sos', UCSM_PLUGIN_URL_LITE.'assets/css/bootstrap.css',array(), UCSM_VERSION_LITE);
	wp_enqueue_style('ucsm-font-awesome_min', UCSM_PLUGIN_URL_LITE.'assets/css/font-awesome/css/font-awesome.min.css',array(), UCSM_VERSION_LITE);
	wp_enqueue_style('ucsm-backend', UCSM_PLUGIN_URL_LITE.'assets/css/backend.css',array(), UCSM_VERSION_LITE);
	wp_enqueue_style('ucsm-general-settings-lite', UCSM_PLUGIN_URL_LITE. 'assets/css/wpucs_general_settings.css',array(), UCSM_VERSION_LITE);
	
	//Backend Main Footer
	wp_enqueue_style('ucsm_backend_main_footer', UCSM_PLUGIN_URL_LITE . 'assets/css/wpucs_backend_main_footer.css', array(), UCSM_VERSION_LITE);
    // Backend Main Tabs
     wp_enqueue_style('ucsm_backend_main_tabs', UCSM_PLUGIN_URL_LITE . 'assets/css/wpucs_backend_main_tabs.css', array(), UCSM_VERSION_LITE);
	//Font Family
	wp_enqueue_style('ucsm_font_family', UCSM_PLUGIN_URL_LITE.'assets/css/wpucs_font_family.css', array(), UCSM_VERSION_LITE);

	wp_enqueue_script('ucsm-bootstrap_min_js', UCSM_PLUGIN_URL_LITE . 'assets/js/bootstrap.min.js', array(), UCSM_VERSION_LITE, true);
    wp_enqueue_script('ucsm-general-settings-lite-wp-color-picker', UCSM_PLUGIN_URL_LITE . 'assets/js/wp-color-picker-alpha.js', array(), UCSM_VERSION_LITE, true);
    wp_enqueue_script('ucsm-general-settings-lite', UCSM_PLUGIN_URL_LITE . 'assets/js/wpucs_general_settings.js', array('jquery', 'wp-color-picker', 'select2-js'), UCSM_VERSION_LITE, true);
    wp_enqueue_script('wp-color-picker-alpha', UCSM_PLUGIN_URL_LITE . 'assets/js/spectrum.min.js', array('wp-color-picker'), '1.8.0', true);
    wp_enqueue_script('ucsm-admin-script', UCSM_PLUGIN_URL_LITE . 'assets/js/wpucs-admin-script.js', array('jquery'), UCSM_VERSION_LITE, true);

    wp_enqueue_style('select2-css', UCSM_PLUGIN_URL_LITE. 'assets/css/select2.min.css',array(),'4.1.0');

	wp_enqueue_script('select2-js',  UCSM_PLUGIN_URL_LITE . 'assets/js/select2.min.js', array('jquery'), '4.1.0', true);
	wp_enqueue_script('sortable-js',  UCSM_PLUGIN_URL_LITE . 'assets/js/sortable.min.js', array('jquery'), '1.15.2', true);
	
	}
}