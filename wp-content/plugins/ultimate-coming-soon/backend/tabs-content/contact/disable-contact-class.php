<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--=========Disable Info Color =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal3">
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Info Color', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>

        <!-- Dark Color Options -->
        <div class="wpucs-color-options-lite">
            <div class="row wpucs-opacity">
                <!-- Color Box -->
                <div class="col-lg-4">
                    <div class="wpucs-color-box-lite">
                        <label for="wpucs_contact_info_color"><?php esc_html_e(' Info Text Color:', 'ultimate-coming-soon'); ?></label>
                        <div class="wpucs-color-item-lite">
                            <input type="text" class="wp-color-picker" id="wpucs_contact_info_color"
                                name="wpucs_contact_info_color"
                                value="#fff">
                            <input type="text" class="wpucs-color-picker-rgba" id="wpucs_contact_info_color_rgba"
                                name="wpucs_contact_info_color_rgba"
                                value="rgb(255, 255, 255)">
                        </div>
                    </div>
                </div>
                <!-- End Color Box -->
                <!-- Color Box -->
                <div class="col-lg-4">
                    <div class="wpucs-color-box-lite">
                        <label
                            for="wpucs_contact_info_fontawesome_color"><?php esc_html_e('Icon Color:', 'ultimate-coming-soon'); ?></label>
                        <div class="wpucs-color-item-lite">
                            <input type="text" class="wp-color-picker" id="wpucs_contact_info_fontawesome_color"
                                name="wpucs_contact_info_fontawesome_color"
                                value="#fff">
                            <input type="text" class="wpucs-color-picker-rgba"
                                id="wpucs_contact_info_fontawesome_color_rgba"
                                name="wpucs_contact_info_fontawesome_color_rgba"
                                value="rgb(255, 255, 255)">
                        </div>
                    </div>
                </div>
                <!-- End Color Box -->
                <!-- Color Box -->
                <div class="col-lg-4">
                    <div class="wpucs-color-box-lite">
                        <label
                            for="wpucs_contact_info_border_color"><?php esc_html_e('Icon Border Color:', 'ultimate-coming-soon'); ?></label>
                        <div class="wpucs-color-item-lite">
                            <input type="text" class="wp-color-picker" id="wpucs_contact_info_border_color"
                                name="wpucs_contact_info_border_color"
                                value="#fff">
                            <input type="text" class="wpucs-color-picker-rgba"
                                id="wpucs_contact_info_border_color_rgba"
                                name="wpucs_contact_info_border_color_rgba"
                                value="rgb(255, 255, 255)">
                        </div>
                    </div>
                </div>
                <!-- End Color Box -->
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!--=========End Disable Info Color =========-->

<!--=========Disable Font Size =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal4">
    <!--========= Font =========-->
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Font Size', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>

        <div class="row wpucs-opacity">
            <!--========= Contact Box Height =========-->
            <div class="col-lg-12">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_contact_info_height"><?php esc_html_e('Contact Box Height (px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_contact_info_height" name="wpucs_contact_info_height"
                        value="16" min="0" max="32">
                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Contact Box Height between 0-32 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
        </div>    
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
    <!--========= End Contact Box Height =========-->
</div>
<!--========= End Disable Font Size =========-->