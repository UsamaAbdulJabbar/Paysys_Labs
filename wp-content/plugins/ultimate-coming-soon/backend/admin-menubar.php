<?php if ( ! defined( 'ABSPATH' ) ) exit; 
//  Create Admin Menu Bar
function ucsm_wp_menu_lite() {
    // Parent slug will be unique based on the submenu being accessed
    $parent_slug = 'ucsm-general-settings-lite';
    $new_icon_url = UCSM_PLUGIN_URL_LITE .'assets/img/wpucs-menu.png';

    $menu = add_menu_page( esc_html__('Ultimate Coming', 'ultimate-coming-soon'), esc_html__('Ultimate Coming', 'ultimate-coming-soon'), 'manage_options', 'ucsm-general-settings-lite', 'ucsm_general_settings_page_lite', $new_icon_url, 30);
    // Change the icon by providing a custom URL to your desired icon

    // Add the "Settings" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Settings', 'ultimate-coming-soon'),           // Page title
        esc_html__('Settings', 'ultimate-coming-soon'),           // Menu title
        'manage_options',                   // Capability required to access the page
        'ucsm-general-settings-lite',  // Menu slug
        'ucsm_general_settings_page_lite' // Callback function for the page
    );

    // Add the "Templates" submenu
    add_submenu_page(
        $parent_slug, // Parent slug
        __('Templates', 'ultimate-coming-soon'),         // Page title
        __('Templates', 'ultimate-coming-soon'),         // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=templates-lite', // Menu slug
        'wpucs_templates_settings_page_lite' // Callback function for the page
    );

    // Add the "Content" submenu
    add_submenu_page(
        $parent_slug, // Parent slug
        __('Content', 'ultimate-coming-soon'),         // Page title
        __('Content', 'ultimate-coming-soon'),         // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=content-lite', // Menu slug
        'ucsm_content_settings_page_lite' // Callback function for the page
    );

    // Add the "Appearance" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Appearance', 'ultimate-coming-soon'),             // Page title
        esc_html__('Appearance', 'ultimate-coming-soon'),             // Menu title
        'manage_options',                  // Capability required to access the page
        'ucsm-general-settings-lite&tab=design-lite',  // Menu slug
        'ucsm_design_settings_page_lite' // Callback function for the page
    );

    // Add the "Social" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Social', 'ultimate-coming-soon'),              // Page title
        esc_html__('Social', 'ultimate-coming-soon'),              // Menu title
        'manage_options',                   // Capability required to access the page
        'ucsm-general-settings-lite&tab=social-lite',   // Menu slug
        'ucsm_social_settings_page_lite' // Callback function for the page
    );

    // Add the "Contact" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Contact', 'ultimate-coming-soon'),            // Page title
        esc_html__('Contact', 'ultimate-coming-soon'),            // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=contact_info-lite', // Menu slug
        'ucsm_contact_settings_page_lite' // Callback function for the page
    );

    // Add the "Newsletter" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Newsletter', 'ultimate-coming-soon'),        // Page title
        esc_html__('Newsletter', 'ultimate-coming-soon'),        // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=newsletter-lite', // Menu slug
        'ucsm_newsletter_settings_page_lite' // Callback function for the page
    );
    
    // Add the "Countdown" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('Countdown', 'ultimate-coming-soon'),         // Page title
        esc_html__('Countdown', 'ultimate-coming-soon'),         // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=countdown_timer-lite', // Menu slug
        'ucsm_countdown_settings_page_lite' // Callback function for the page
    );

    // Add the "SEO" submenu
    add_submenu_page(
        'ucsm-general-settings-lite', // Parent slug
        esc_html__('SEO', 'ultimate-coming-soon'),                // Page title
        esc_html__('SEO', 'ultimate-coming-soon'),                // Menu title
        'manage_options',                  // Capability required to access the page
        'ucsm-general-settings-lite&tab=seo-lite',     // Menu slug
        'ucsm_seo_settings_page_lite' // Callback function for the page
    );

    // Add the "Translation" submenu
    add_submenu_page(
        $parent_slug, // Parent slug
        __('Translation', 'ultimate-coming-soon'),      // Page title
        __('Translation', 'ultimate-coming-soon'),      // Menu title
        'manage_options',                 // Capability required to access the page
        'ucsm-general-settings-lite&tab=translation-lite', // Menu slug
        'wpucs_translation_settings_page_lite' // Callback function for the page
    );

    // Add the " Settings" submenu
    add_submenu_page(
        $parent_slug, // Parent slug
        __('Advanced Settings', 'ultimate-coming-soon'),      // Page title
        __('Advanced Settings', 'ultimate-coming-soon'),      // Menu title
        'manage_options',                 // Capability required to access the page
        'wpucs-advanced-settings-lite', // Menu slug
        'wpucs_advanced_settings_page_lite' // Callback function for the page
    );


    // Added hook to add styles and scripts for the "WP Ultimate Coming Soon" admin page
    add_action('admin_enqueue_scripts', 'ucsm_wp_script_lite');
    // Check if the pro version plugin is active
    if (is_plugin_active('ultimate-coming-soon-maintenance-pro/ultimate-coming-soon-maintenance-pro.php')) {
        remove_menu_page('ucsm-general-settings-lite');
    }

}

add_action('admin_menu', 'ucsm_wp_menu_lite');

//require to add styles and scripts for wpucs Coming Soon admin page
require_once UCSM_PLUGIN_DIR_LITE .'functions/script.php';

?>