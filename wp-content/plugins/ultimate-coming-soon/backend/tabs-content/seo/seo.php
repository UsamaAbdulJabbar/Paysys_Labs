<?php if (!defined('ABSPATH')) exit; ?>

<!--============ SEO ============ -->
<h2><?php esc_html_e('SEO Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=seo-lite" enctype="multipart/form-data">
    <?php
    // Add nonce to the form
    $nonce = wp_create_nonce('wpucs_seo_nonce');
    ?>
    <input type="hidden" name="wpucs_seo_nonce_field" value="<?php echo esc_attr($nonce); ?>">
    
    <!--============ Enable Design Content ============ -->
    <?php include ('enable-seo-class.php') ;?>
    <!--============End Enable Design  Content ============ -->

    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>
    <!-- ==========End Save/Reset Settings Button========== -->

</form>
<!-- ========================End Form Box======================== -->