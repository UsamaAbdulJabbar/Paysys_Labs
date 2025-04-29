<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!-- Set Your Website Publishing Date -->
<h2><?php esc_html_e('Countdown Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=countdown_timer-lite" enctype="multipart/form-data">

    <?php 
      // Add nonce to the form
      $nonce = wp_create_nonce('wpucs_countdown_timer_settings_nonce'); 
    ?>
    <input type="hidden" name="wpucs_countdown_timer_settings_nonce_field" value="<?php echo esc_attr($nonce); ?>">

    <!--========= Countdown Input Field =========-->
    <?php require_once('enable-countdown-class.php'); ?>
    <!--========= End Countdown Input Field =========-->
    <!-- ============Disable Countdown Class============ -->
    <?php require_once('disable-countdown-class.php'); ?>
    <!-- ============End Disable Countdown Class============ -->    

    <!-- ============Custom Modal============ -->
    <?php require_once('custom-modal.php'); ?>
    <!-- ============ End Custom Modal============ -->

</form>
<!-- ========================End Form Box======================== -->
