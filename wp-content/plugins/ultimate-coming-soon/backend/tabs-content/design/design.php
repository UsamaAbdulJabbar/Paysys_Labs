<?php if (!defined('ABSPATH')) exit; ?>

<!--============ Design Settings============ -->
<h2><?php esc_html_e('Appearance Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=design-lite" enctype="multipart/form-data">
    <?php
    // Add nonce to the form
    $nonce = wp_create_nonce('wpucs_design_nonce');
    ?>
    <input type="hidden" name="wpucs_design_nonce_field" value="<?php echo esc_attr($nonce); ?>">

    <!--============ Enable Design Content ============ -->
    <?php include ('enable-design-class.php') ;?>
    <!--============End Enable Design  Content ============ -->

    <!--============ Disable Design Content ============ -->
    <?php include ('disable-design-class.php') ;?>
    <!--============End Disable Design Content ============ -->
    <!--=========Custom Class=========-->
    <?php require_once ('custom-modal.php'); ?>



</form>
<!-- =================End  Form Box =================-->