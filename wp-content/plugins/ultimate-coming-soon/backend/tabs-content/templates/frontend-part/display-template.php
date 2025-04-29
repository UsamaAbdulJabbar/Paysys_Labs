<?php if ( ! defined( 'ABSPATH' ) ) exit;

function wpucs_display_page_lite() {
    $wpucs_enable_mode = get_option('wpucs_enable_mode', '');
    $wpucs_administrator = get_option('wpucs_administrator', '');
    $wpucs_editor = get_option('wpucs_editor', '');
    $wpucs_author = get_option('wpucs_author', '');
    $wpucs_contributor = get_option('wpucs_contributor', '');
    $wpucs_subscriber = get_option('wpucs_subscriber', '');

    $is_user_allowed = false;

    if ($wpucs_enable_mode) {
        $current_user = wp_get_current_user();
        if ($wpucs_contributor === 'on' && in_array('contributor', $current_user->roles)) {
            $is_user_allowed = true;
        }
        if ($wpucs_editor === 'on' && in_array('editor', $current_user->roles)) {
            $is_user_allowed = true;
        }
        if ($wpucs_author === 'on' && in_array('author', $current_user->roles)) {
            $is_user_allowed = true;
        }
        if ($wpucs_administrator === 'on' && in_array('administrator', $current_user->roles)) {
            $is_user_allowed = true;
        }
        if ($wpucs_subscriber === 'on' && in_array('subscriber', $current_user->roles)) {
            $is_user_allowed = true;
        }
    }

    if (($is_user_allowed || ($wpucs_enable_mode && !current_user_can('manage_options')))) {
        $activated_template_id = get_option('activated_template_id', false);

        if ($activated_template_id) {
            $template_file = UCSM_PLUGIN_DIR_LITE . 'templates/comingsoon' . $activated_template_id . '/index.php';

            if (file_exists($template_file)) {
                include($template_file);
                exit();
            }
        } else {
            $default_template_file = UCSM_PLUGIN_DIR_LITE . 'templates/comingsoon0/index.php';

            if (file_exists($default_template_file)) {
                include($default_template_file);
                exit();
            }
        }
    }
}
add_action('template_redirect', 'wpucs_display_page_lite');

function ucsm_display_page_lite_PRO() {
    global $wp;

    $wpucs_enable_mode = get_option('wpucs_enable_mode', '');
    $wpucs_redirect_mode_url = get_option('wpucs_redirect_mode_url', '');
    $ucsm_mode = get_option('ucsm_mode', '');
    $ucsm_page_setup = get_option('ucsm_page_setup', 'whole-website'); // Default to 'whole-website' if not set

    if ($wpucs_enable_mode && !current_user_can('manage_options') && $ucsm_mode === 'redirect') {
        if (!empty($wpucs_redirect_mode_url)) {
            $redirect_url = esc_url($wpucs_redirect_mode_url);
        } else {
            // Set a default redirect URL here
            $redirect_url = home_url(); // Redirect to the homepage as an example
        }

        // Get the current URL
        $current_url = home_url(add_query_arg(array(), $wp->request));

        // Check if the current URL is different from the redirect URL to prevent a loop
        if ($current_url !== $redirect_url) {
            // Handle redirection logic based on 'whole-website' or 'homepage'
            if ($ucsm_page_setup === 'whole-website' || ($ucsm_page_setup === 'homepage' && is_front_page())) {
                safe_redirect($redirect_url);
                exit();
            }
        }
    }
}

add_action('template_redirect', 'ucsm_display_page_lite_PRO');

function safe_redirect($url, $status = 302) {
    if (!headers_sent()) {
        // Use wp_redirect() if headers are not yet sent
        wp_redirect($url, $status);
    } else {
        // Use JavaScript-based redirect as a fallback if headers are already sent
        echo "<script>window.location.href='" . esc_url($url) . "';</script>";
    }
    exit();
}

// Active individual template
function ucsm_activate_lite_template_lite() {
    // Check if nonce is set and valid
    if (isset($_GET['templateId']) && check_ajax_referer('activate_template_nonce', 'nonce', false)) {
        $templateId = sanitize_key($_GET['templateId']);

        // Retrieve the template data
        include UCSM_PLUGIN_DIR_LITE . 'backend/tabs-content/templates/backend-part/templates-data.php';

        $activatedTemplateName = '';
        foreach ($templateData as $template) {
            if ($template['id'] == $templateId) {
                $activatedTemplateName = $template['name'];
                break;
            }
        }

        if ($activatedTemplateName !== '') {
            // Store the activated template ID in an option
            update_option('activated_template_id', $templateId);

            // Send a success response with the activated template name
            wp_send_json_success("'$activatedTemplateName' Template activated successfully");
        } else {
            // Send an error response if templateId is not found in templateData
            wp_send_json_error('Template ID not found');
        }
    } else {
        // Send an error response if templateId is missing or nonce verification fails
        wp_send_json_error('Template ID is missing or nonce verification failed');
    }
}
add_action('wp_ajax_activate_template', 'ucsm_activate_lite_template_lite');
add_action('wp_ajax_nopriv_activate_template', 'ucsm_activate_lite_template_lite'); // For non-logged-in users

function ucsm_update_template_name_lite() {
    // Check if the nonce is valid
    check_ajax_referer('update_template_name_nonce', '_wpnonce');
    
    // Verify user permissions (e.g., allow only administrators)
    if (!current_user_can('manage_options')) {
        wp_send_json_error(array('message' => __('You do not have permission to perform this action.', 'ultimate-coming-soon')));
        wp_die();
    }

    // Check if required parameters are set
    if (isset($_POST['templateId']) && isset($_POST['templateName'])) {
        // Sanitize inputs
        $templateId = sanitize_key(wp_unslash($_POST['templateId']));
        $templateName = sanitize_text_field(wp_unslash($_POST['templateName']));

        // Update the template name option securely
        $option_key = 'template_name_' . $templateId;
        update_option($option_key, $templateName);

        // Send success response
        wp_send_json_success(array('message' => __('Template name updated successfully.', 'ultimate-coming-soon')));
    } else {
        // Send error response if inputs are missing
        wp_send_json_error(array('message' => __('Failed to update template name. Missing required data.', 'ultimate-coming-soon')));
    }
}
add_action('wp_ajax_update_template_name', 'ucsm_update_template_name_lite');

