<?php  if ( ! defined( 'ABSPATH' ) ) exit; 
$activatedTemplateId = get_option('activated_template_id');
?>
<!--============ Dashboard Settings============ -->
<h2><?php esc_html_e('Content Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=content-lite" enctype="multipart/form-data">
    <?php
        // Add nonce to the form
        $nonce = wp_create_nonce('wpucs_content_nonce');
    ?>

    <input type="hidden" name="wpucs_content_nonce_field" value="<?php echo esc_attr($nonce); ?>">

    <!--========= Enable content Field =========-->
    <?php require_once('enable-content-class.php'); ?>
    <!--========= End Enable content Field =========-->

    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/button.php'; ?>
    <!-- ==========End Save/Reset Settings Button========== -->
</form>
<!-- ========================End Form Box======================== -->

