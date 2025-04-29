<?php if ( ! defined( 'ABSPATH' ) ) exit;  ?>

<!--========= Countdown Input Field =========-->
<fieldset style="padding-bottom: 30px; margin-bottom: 30px;">
    <legend><?php esc_html_e('Countdown Input Field', 'ultimate-coming-soon'); ?></legend>
    <!--========= Countdown Status =========-->
    <div class="wpucs-radio-status-lite">
    <h4 class="ucsm_title"><?php esc_html_e('Countdown Status', 'ultimate-coming-soon'); ?></h4>
        <div class="wpucs-radio-box-lite">
            <div class="wpucs-radio-item-lite">
                <input id="wpucs_countdown_timer_status_enable" type="radio" name="wpucs_countdown_timer_status"
                       value="on" <?php checked($wpucs_countdown_timer_status, 'on'); ?> onchange="toggleCountdownDate()">
                <label for="wpucs_countdown_timer_status_enable">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Enable', 'ultimate-coming-soon'); ?></span>
                </label>
            </div>
            <div class="wpucs-radio-item-lite">
                <input id="wpucs_countdown_timer_status_disable" type="radio" name="wpucs_countdown_timer_status"
                       value="off" <?php checked($wpucs_countdown_timer_status, 'off'); ?> onchange="toggleCountdownDate()">
                <label for="wpucs_countdown_timer_status_disable">
                    <div class="wpucs-dot-icon-pro"></div>
                    <span><?php esc_html_e('Disable', 'ultimate-coming-soon'); ?></span>
                </label>
            </div>
        </div>
    </div>
    <!--========= End Countdown Status =========-->

    <!--========= Set Your Website Publishing Date =========-->
    <p class="wpucs-countdown-date-wrapper">
        <label for="wpucs_countdown_date"><?php esc_html_e('Countdown Date:', 'ultimate-coming-soon'); ?></label>
        <input type="datetime-local" id="wpucs_countdown_date" name="wpucs_countdown_date"
               value="<?php echo esc_attr($wpucs_countdown_date); ?>">
        <span id="wpucs-error-message-pro" class="wpucs-error-message-pro"
              style="display: none;"><?php esc_html_e('Countdown date cannot be from the previous day!', 'ultimate-coming-soon'); ?></span>
    </p>
    <!--========= End Set Your Website Publishing Date =========-->

    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>
    <!-- ========== End Save/Reset Settings Button========== -->

</fieldset>
<!--========= End Countdown Input Field =========-->