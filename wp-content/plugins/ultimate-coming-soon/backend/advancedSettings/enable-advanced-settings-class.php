<?php if (!defined('ABSPATH')) exit;?>

<div class="wpucs-sider-bar-pro">
    <div class="wpucs-sider-bar-pro-main">
        <!--============ Advanced Settings ============ -->
        <h2><?php esc_html_e('Advanced Settings', 'ultimate-coming-soon'); ?></h2>

        <!-- ================= Form Box =================-->
        <form method="post" action="?page=wpucs-advanced-settings-lite" enctype="multipart/form-data">
            <?php
            // Add nonce to the form
            $nonce = wp_create_nonce('wpucs_advanced_settings_nonce');
            ?>
            <input type="hidden" name="wpucs_advanced_settings_nonce_field" value="<?php echo esc_attr($nonce); ?>">

            <!-- Enable/Disable Switch -->
            <?php include UCSM_PLUGIN_DIR_LITE . 'backend/advancedSettings/fields/switcher.php'; ?>
            <!-- Enable/Disable Switch -->

            <!-- ==========Save/Reset Settings Buttons========== -->
            <?php include UCSM_PLUGIN_DIR_LITE . 'backend/button-pro.php'; ?>
            <!-- ==========End Save/Reset Settings Buttons========== -->
        </form>
    </div>
</div>