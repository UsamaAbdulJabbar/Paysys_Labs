<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--========= Newsletter Field =========-->
<fieldset style="padding-bottom: 30px; margin-bottom: 30px;">
    <legend><?php esc_html_e('Newsletter Field', 'ultimate-coming-soon'); ?></legend>
    <!--========= Are You want to show Contact Form' =========-->
    <div class="wpucs-radio-status-lite">
        <h4 class="ucsm_title"><?php esc_html_e('Are you want to show Newsletter?', 'ultimate-coming-soon'); ?></h4>
        <div class="wpucs-radio-box-lite">
            <div class="wpucs-radio-item-lite">
                <input id="rs_coming_soon_newsletter_on" type="radio" name="wpucs_newsletter_status" value="on"
                    <?php checked($wpucs_newsletter_status, 'on'); ?>>
                <label for="rs_coming_soon_newsletter_on">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Newsletter On', 'ultimate-coming-soon'); ?></span>
                </label>
            </div>
            <div class="wpucs-radio-item-lite">
                <input id="rs_coming_soon_newsletter_off" type="radio" name="wpucs_newsletter_status" value="off"
                    <?php checked($wpucs_newsletter_status, 'off'); ?>>
                <label for="rs_coming_soon_newsletter_off">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Newsletter Off', 'ultimate-coming-soon'); ?></span>
                </label>
            </div>
        </div>
    </div>
    <!--=========End Are You want to show Contact Form' =========-->

    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>
    <!-- ========== End Save/Reset Settings Button========== -->

</fieldset>
<!--=========End Newsletter Field =========-->
