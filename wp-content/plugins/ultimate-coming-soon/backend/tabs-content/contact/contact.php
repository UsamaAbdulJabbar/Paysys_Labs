<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--============ Contact Info ============ -->
<h2><?php esc_html_e('Contact Info', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=contact_info-lite" enctype="multipart/form-data">

    <?php
        // Add nonce to the form
        $nonce = wp_create_nonce('wpucs_contact_info_nonce');
    ?>

    <input type="hidden" name="wpucs_contact_info_nonce_field" value="<?php echo esc_attr($nonce); ?>">
    
    <!--=========Enable Class =========-->
    <?php require_once ('enable-contact-class.php'); ?>

    <!--============ Disable CONTACT Content ============ -->
    <?php include ('disable-contact-class.php') ;?>
    <!--============End Disable CONTACT Content ============ -->
    <!--=========Custom Class=========-->
    <?php require_once ('custom-modal.php'); ?>
</form>
<!-- ========================End Form Box======================== -->