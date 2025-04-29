<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--============ Social Media ============ -->
<h2><?php esc_html_e('Social Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=social-lite" enctype="multipart/form-data">
    <?php
    // Add nonce to the form
    $nonce = wp_create_nonce('wpucs_social_nonce');
    ?>
    <input type="hidden" name="wpucs_social_nonce_field" value="<?php echo esc_attr($nonce); ?>">

    <!--============ Social Media Content ============ -->
    <?php include ('enable-social-class.php') ;?>
    <!--============End Social Media Content ============ -->

    <!--============DISABLE Social Media Content ============ -->
    <?php include ('disable-social-class.php') ;?>
    <!--============dISABLE End Social Media Content ============ -->

    <!-- ============Custom Modal============ -->
    <?php require_once('custom-modal.php'); ?>
    <!-- ============ End Custom Modal============ -->

</form>
<!-- =================End Form Box =================-->