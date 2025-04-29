<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--============ Newsletter Settings============ -->
<h2><?php esc_html_e('Newsletter', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->

<form method="post" action="?page=ucsm-general-settings-lite&tab=newsletter-lite" enctype="multipart/form-data">
    <?php
    // Add nonce to the form
    $newsletter_nonce = wp_create_nonce('wpucs_newsletter_nonce');
    ?>

    <input type="hidden" name="wpucs_newsletter_nonce_field" value="<?php echo esc_attr($newsletter_nonce); ?>">

    <!--========= Newsletter Field =========-->
    <?php require_once('enable-newsletter-class.php'); ?>
    <!--=========End Newsletter Field =========-->

    <!--============ Disable Design Content ============ -->
    <?php include ('disable-newsletter-class.php') ;?>
    <!--============End Disable Design Content ============ -->

    <!--=========Custom Class=========-->
    <?php require_once ('custom-modal.php'); ?>

</form>

<!-- Add the table to display the data -->

<div class="wpucs-information-box-pro modal-trigger" data-modal="customModal34">
    <div class="wpucs-information-topbar-pro" >
        <h2><?php esc_html_e('Newsletter Client Information', 'ultimate-coming-soon'); ?></h2>
        <form method="post">
            <button type="submit" id="export_newsletter_data" class="button"
                name="export_newsletter_data" disabled><?php esc_html_e('Export CSV', 'ultimate-coming-soon'); ?></button>
        </form>
    </div>

    <table class="wpucs-widefat-lite striped">
        <thead>
            <tr>
                <th><?php esc_html_e('ID', 'ultimate-coming-soon'); ?></th>
                <th><?php esc_html_e('Email', 'ultimate-coming-soon'); ?></th>
                <th><?php esc_html_e('Name', 'ultimate-coming-soon'); ?></th>
                <th><?php esc_html_e('Mobile', 'ultimate-coming-soon'); ?></th>
                <th><?php esc_html_e('Message', 'ultimate-coming-soon'); ?></th>
                <th><?php esc_html_e('Submission Time', 'ultimate-coming-soon'); ?></th>
            </tr>
        </thead>
        <tbody>
        
        </tbody>
    </table>
</div>

<!-- =================End Form Box =================-->
