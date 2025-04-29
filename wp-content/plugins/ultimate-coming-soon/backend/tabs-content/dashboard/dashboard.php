<?php  if ( ! defined( 'ABSPATH' ) ) exit; 
$activatedTemplateId = get_option('activated_template_id');
?>
<!--============ General Settings============ -->
<h2><?php esc_html_e('General Settings ', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=dashboard-lite" enctype="multipart/form-data">
    <?php
        // Add nonce to the form
        $nonce = wp_create_nonce('wpucs_dashboard_nonce');
    ?>

    <input type="hidden" name="wpucs_dashboard_nonce_field" value="<?php echo esc_attr($nonce); ?>">

    <!--========= Enable dashboard Field =========-->
    <?php require_once('enable-dashboard-class.php'); ?>
    <!--========= End Enable dashboard Field =========-->

    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>
    <!-- ==========End Save/Reset Settings Button========== -->
</form>
<!-- ========================End Form Box======================== -->

