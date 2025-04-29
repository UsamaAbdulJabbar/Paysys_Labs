<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!--========= Disable Countdown Range  =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal5">

    <fieldset style="margin-top: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Countdown Range', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">

            <div class="col-lg-6">
                <!--========= Box Height =========-->
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_inner_box_height"><?php esc_html_e('Box Height:', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_inner_box_height" name="wpucs_inner_box_height"
                        value="120" min="0" max="160">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Countdown Box Height between 0-160 px.', 'ultimate-coming-soon'); ?></span>
                </p>
                <!--========= End Box Height =========-->
            </div>

            <div class="col-lg-6">
                <!--=========  Box Width =========-->
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_inner_box_width"><?php esc_html_e('Box Width:', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_inner_box_width" name="wpucs_inner_box_width"
                        value="120" min="0" max="160">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Countdown Box Width between 0-160 px.', 'ultimate-coming-soon'); ?></span>
                </p>
                <!--========= End Box Width =========-->
            </div>

            <div class="col-lg-6">
                <!--=========  Box Border =========-->
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_inner_box_border_radius"><?php esc_html_e('Box Border Radius:', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_inner_box_border_radius" name="wpucs_inner_box_border_radius"
                        value="10" min="0" max="100">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Countdown Box Radius between 0 to 100px.', 'ultimate-coming-soon'); ?></span>
                </p>
                <!--========= End Box Border =========-->
            </div>

            <div class="col-lg-6">
                <!--========= Timer Level Font Size =========-->
                <p class="wpucs-rangebox-pro">
                    <label
                        for="wpucs_countdown_timerlevel_fontsize"><?php esc_html_e('Timer Level Font Size :', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_countdown_timerlevel_fontsize"
                        name="wpucs_countdown_timerlevel_fontsize"
                        value="20" min="0" max="32">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Countdown level font size  between 0-32 px.', 'ultimate-coming-soon'); ?></span>
                </p>
                <!--========= Timer Level Font Size =========-->
            </div>
            <div class="col-lg-6">
                <!--=========  Timer Value Font Size =========-->
                <p class="wpucs-rangebox-pro">
                    <label
                        for="wpucs_countdown_timervalue_fontsize"><?php esc_html_e('Timer Value Font Size :', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_countdown_timervalue_fontsize"
                        name="wpucs_countdown_timervalue_fontsize"
                        value="60" min="0" max="80">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Countdown timer value font size  between 0-80 px.', 'ultimate-coming-soon'); ?></span>
                </p>
                <!--========= End Timer Value Font Size =========-->
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!--========= End Countdown Range  =========-->

<!-- =================Disable Box Color Settingse================= -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal6">

    <fieldset style="margin-top: 30px;  margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e(' Box Color Settings', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <!--========= Days =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_days_innerbox_color"><?php esc_html_e('Days Box Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_days_innerbox_color"
                            name="wpucs_countdown_days_innerbox_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_days_innerbox_color_rgba"
                            name="wpucs_countdown_days_innerbox_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Days =========-->

            <!--========= Hours =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_hours_innerbox_color"><?php esc_html_e('Hours Box Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_hours_innerbox_color"
                            name="wpucs_countdown_hours_innerbox_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_hours_innerbox_color_rgba"
                            name="wpucs_countdown_hours_innerbox_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Hours =========-->

            <!--========= Minutes =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_minutes_innerbox_color"><?php esc_html_e('Minutes Box Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_minutes_innerbox_color"
                            name="wpucs_countdown_minutes_innerbox_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_minutes_innerbox_color_rgba"
                            name="wpucs_countdown_minutes_innerbox_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Minutes =========-->

            <!--========= Seconds =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_seconds_innerbox_color"><?php esc_html_e('Seconds Box Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_seconds_innerbox_color"
                            name="wpucs_countdown_seconds_innerbox_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_seconds_innerbox_color_rgba"
                            name="wpucs_countdown_seconds_innerbox_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Seconds =========-->
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>

</div>
<!-- =================End Disable Box Settingse================= -->

<!-- =================Disable Days Style================= -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal7">
    <fieldset style="margin-top: 30px;  margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Days Style', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <!-- =================Days Text================= -->
            <div class="col-lg-4">
                <p>
                    <label for="wpucs_countdown_days_text"><?php esc_html_e('Days Text:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_countdown_days_text" name="wpucs_countdown_days_text"
                        value="Days">
                </p>
            </div>
            <!-- =================End Days Text================= -->

            <!-- =================Level Color================= -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_countdown_days_timerlevel_color"><?php esc_html_e('Level Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_days_timerlevel_color"
                            name="wpucs_countdown_days_timerlevel_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_days_timerlevel_color_rgba"
                            name="wpucs_countdown_days_timerlevel_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!-- =================End Level Color================= -->

            <!-- =================Timer Value Color================= -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_days_timervalue_color"><?php esc_html_e('Timer Value Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_days_timervalue_color"
                            name="wpucs_countdown_days_timervalue_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_days_timervalue_color_rgba"
                            name="wpucs_countdown_days_timervalue_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!-- =================End Timer Value Color================= -->

        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>

</div>
<!-- =================End Disable Days Style================= -->

<!-- =================Disable Hours Style================= -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal8">
    <fieldset style="margin-top: 30px;  margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Hours Style', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <!-- Text -->
            <div class="col-lg-4">
                <p>
                    <label for="wpucs_countdown_hours_text"><?php esc_html_e('Hours Text:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_countdown_hours_text" name="wpucs_countdown_hours_text"
                        value="Hours">
                </p>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_hours_timerlevel_color"><?php esc_html_e('Level Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_hours_timerlevel_color"
                            name="wpucs_countdown_hours_timerlevel_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_hours_timerlevel_color_rgba"
                            name="wpucs_countdown_hours_timerlevel_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_hours_timervalue_color"><?php esc_html_e('Timer Value Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba" id="wpucs_countdown_hours_timervalue_color"
                            name="wpucs_countdown_hours_timervalue_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_hours_timervalue_color_rgba"
                            name="wpucs_countdown_hours_timervalue_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>

</div>
<!-- =================End Disable Hours Style================= -->

<!-- =================Disable Minutes Style================= -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal9">
    <fieldset style="margin-top: 30px;  margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Minutes Style', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
          <!-- Text -->
            <div class="col-lg-4">
                <p>
                    <label for="wpucs_countdown_minutes_text"><?php esc_html_e('Minutes Text:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_countdown_minutes_text" name="wpucs_countdown_minutes_text"
                        value="Minutes">
                </p>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_minutes_timerlevel_color"><?php esc_html_e('Level Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba"
                            id="wpucs_countdown_minutes_timerlevel_color"
                            name="wpucs_countdown_minutes_timerlevel_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_minutes_timerlevel_color_rgba"
                            name="wpucs_countdown_minutes_timerlevel_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_minutes_timervalue_color"><?php esc_html_e('Timer Value Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba"
                            id="wpucs_countdown_minutes_timervalue_color"
                            name="wpucs_countdown_minutes_timervalue_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_minutes_timervalue_color_rgba"
                            name="wpucs_countdown_minutes_timervalue_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!-- =================End Disable Minutes Style================= -->

<!-- =================Disable Seconds Style================= -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal10">
    <fieldset style="margin-top: 30px;  margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Seconds Style', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
          <!-- Text -->
            <div class="col-lg-4">
                <p>
                    <label for="wpucs_countdown_seconds_text"><?php esc_html_e('Seconds Text:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_countdown_seconds_text" name="wpucs_countdown_seconds_text"
                        value="Seconds">
                </p>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_countdown_seconds_timerlevel_color"><?php esc_html_e('Level Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba"
                            id="wpucs_countdown_seconds_timerlevel_color"
                            name="wpucs_countdown_seconds_timerlevel_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_seconds_timerlevel_color_rgba"
                            name="wpucs_countdown_seconds_timerlevel_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!-- Color -->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_countdown_seconds_timervalue_color"><?php esc_html_e('Timer Value Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker-rgba"
                            id="wpucs_countdown_seconds_timervalue_color"
                            name="wpucs_countdown_seconds_timervalue_color"
                            value="#fff">
                        <input type="text" class="wpucs-wp-color-picker-rgba"
                            id="wpucs_countdown_seconds_timervalue_color_rgba"
                            name="wpucs_countdown_seconds_timervalue_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!-- =================End Disable Seconds Style================= -->