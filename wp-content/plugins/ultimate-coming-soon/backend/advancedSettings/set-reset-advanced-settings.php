<?php
if (!defined('ABSPATH')) exit;

// Initialize variables with saved options
$wpucs_administrator = get_option('wpucs_administrator', 'off');
$wpucs_editor = get_option('wpucs_editor', 'off');
$wpucs_author = get_option('wpucs_author', 'off');
$wpucs_contributor = get_option('wpucs_contributor', 'off');
$wpucs_subscriber = get_option('wpucs_subscriber', 'off');

// Check if the form was submitted
if (isset($_POST['wpucs_settings_submit_tab_pro'])) {
    // Check and sanitize the nonce
    if (isset($_POST['wpucs_advanced_settings_nonce_field']) && 
        wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['wpucs_advanced_settings_nonce_field'])), 'wpucs_advanced_settings_nonce')) {
        
        // Update values based on the form data
        $wpucs_administrator = isset($_POST['wpucs_administrator']) ? 'on' : 'off';
        $wpucs_editor = isset($_POST['wpucs_editor']) ? 'on' : 'off';
        $wpucs_author = isset($_POST['wpucs_author']) ? 'on' : 'off';
        $wpucs_contributor = isset($_POST['wpucs_contributor']) ? 'on' : 'off';
        $wpucs_subscriber = isset($_POST['wpucs_subscriber']) ? 'on' : 'off';

        // Save the updated values
        update_option('wpucs_administrator', $wpucs_administrator);
        update_option('wpucs_editor', $wpucs_editor);
        update_option('wpucs_author', $wpucs_author);
        update_option('wpucs_contributor', $wpucs_contributor);
        update_option('wpucs_subscriber', $wpucs_subscriber);

        // Provide feedback to the user
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="wpucsnotice-pro wpucsnotice-success is-dismissible">
                    <p style="font-size: 18px"><?php esc_html_e('Settings saved.', 'ultimate-coming-soon'); ?></p>
                    <button type="button" class="wpucsnotice-dismiss">
                        <span class="screen-reader-text"><?php esc_html_e('Dismiss this notice.', 'ultimate-coming-soon'); ?></span>
                    </button>
                </div>
            </div>
        </div>
        <?php
    }
}

// Handle "Reset Settings" button
if (isset($_POST['wpucs_settings_reset_tab_pro'])) {
    // Reset the form fields to their default values
    $wpucs_administrator = 'off';
    $wpucs_editor = 'off';
    $wpucs_author = 'off';
    $wpucs_contributor = 'off';
    $wpucs_subscriber = 'off';

    // Save the default values
    update_option('wpucs_administrator', $wpucs_administrator);
    update_option('wpucs_editor', $wpucs_editor);
    update_option('wpucs_author', $wpucs_author);
    update_option('wpucs_contributor', $wpucs_contributor);
    update_option('wpucs_subscriber', $wpucs_subscriber);

    // Provide a success message for the reset
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="wpucsnotice-pro wpucsnotice-success is-dismissible">
                <p style="font-size: 16px"><?php esc_html_e('Settings reset to default.', 'ultimate-coming-soon'); ?></p>
                <button type="button" class="wpucsnotice-dismiss">
                    <span class="screen-reader-text"><?php esc_html_e('Dismiss this notice.', 'ultimate-coming-soon'); ?></span>
                </button>
            </div>
        </div>
    </div>
    <?php
}
?>
