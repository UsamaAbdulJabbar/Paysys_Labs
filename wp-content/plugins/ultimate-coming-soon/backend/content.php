<?php if ( ! defined( 'ABSPATH' ) ) exit;
	if (!current_user_can('manage_options')) {
	    wp_die(esc_html__('You do not have sufficient permissions to access this page.', 'ultimate-coming-soon'));
	}
	require_once('navbar-content.php');
?>
<!-- ========Main Dashboard========= -->
<div class="wpucs-main-box-lite">
    <div class="row">
        <!--========LeftSide Main Dashborad=========== -->
        <div class="wrap col-xl-9">
            <?php require_once('navbar.php'); ?>
        </div>
        <!-- ==========LeftSide Main Dashborad========= -->

        <!-- ==========Rightside Ad========== -->
        <div class="wrap col-xl-3">
            <?php require_once('pro-features.php'); ?>
    
        </div>
        <!-- =========End Rightside Ad========== -->
    </div>
</div>
<!-- ========End Main Dashboard========= -->


<!-- ===========Footer============ -->
<div class="wpucs-main-box-lite">
    <!-- Footer Check Pro version Features -->
    <?php require_once('footer.php'); ?>

    <!-- Footer Check Pro version Features -->
</div>
<!-- ===========End Footer============ -->