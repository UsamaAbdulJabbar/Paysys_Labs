<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!--=========Disable Subscription Button =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal32">
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Subscription Button', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label"> (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
        <!--=========Subscription Button  Text=========-->
        
            <div class="col-lg-12">
                <p>
                    <label for="wpucs_subscribe"><?php esc_html_e('Text:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_subscribe" name="wpucs_subscribe"
                        value="Subscribe">
                </p>
            </div>
            <!--=========Subscription Button Text =========-->          
            <div class="col-lg-6">
                <!-- Subscription Text  Color  -->
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_subscription_button_text_color"><?php esc_html_e('Text Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_subscription_button_text_color"
                            name="wpucs_subscription_button_text_color"
                            value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba"
                            id="wpucs_subscription_button_text_color_rgba"
                            name="wpucs_subscription_button_text_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Subscription Background  Color  -->
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_subscription_button_background_color"><?php esc_html_e('Background Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_subscription_button_background_color"
                            name="wpucs_subscription_button_background_color"
                            value="#FFC75C">
                        <input type="text" class="wpucs-color-picker-rgba"
                            id="wpucs_subscription_button_background_color_rgba"
                            name="wpucs_subscription_button_background_color_rgba"
                            value="rgb(255, 199, 92)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Subscription Text Hover  Color  -->
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_subscription_button_text_hover_color"><?php esc_html_e('Text Hover Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_subscription_button_text_hover_color"
                            name="wpucs_subscription_button_text_hover_color"
                            value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba"
                            id="wpucs_subscription_button_text_hover_color_rgba"
                            name="wpucs_subscription_button_text_hover_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Subscription Background Hover  Color  -->
                <div class="wpucs-color-box-lite">
                    <label
                        for="wpucs_subscription_button_background_hover_color"><?php esc_html_e('Background Hover Color:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_subscription_button_background_hover_color"
                            name="wpucs_subscription_button_background_hover_color"
                            value="#FFC75C">
                        <input type="text" class="wpucs-color-picker-rgba"
                            id="wpucs_subscription_button_background_hover_color_rgba"
                            name="wpucs_subscription_button_background_hover_color_rgba"
                            value="rgb(255, 199, 92)">
                    </div>
                </div>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>

    </fieldset>
</div>
<!--=========End Disable Subscription Button =========-->


<!--=========Disable Subscription Notice =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal33">
    <fieldset style="padding-bottom: 0; margin-bottom: 30px;" disabled>
	    <legend><?php esc_html_e('Subscription Notice', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label"> (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
	    <div class="row wpucs-opacity">
	        <!-- Text -->
	        <div class="col-lg-12">
	            <p>
	                <label for="wpucs_subscription_text"><?php esc_html_e('Text:', 'ultimate-coming-soon'); ?></label>
	                <input type="text" id="wpucs_subscription_text" name="wpucs_subscription_text"
	                    value="Subscribe">
	            </p>
	        </div>
	        <div class="col-lg-6">
	            <!-- Subscription level Font Size  -->
	            <p class="wpucs-rangebox-pro">
	                <label for="wpucs_subscription_text_height"><?php esc_html_e(' Font Size (px):', 'ultimate-coming-soon'); ?></label>
	                <input type="range" id="wpucs_subscription_text_height" name="wpucs_subscription_text_height"
	                    value="80" min="0" max="100">
	                <span class="wpucs-hint-pro">*
	                    <?php esc_html_e('It is recommended to keep the Subscription level font size  between 0-100 px.', 'ultimate-coming-soon'); ?></span>
	            </p>
	        </div>
	        <div class="col-lg-6">
	            <!-- Subscription level  Color  -->
	            <div class="wpucs-color-box-lite">
	                <label for="wpucs_subscription_text_color"><?php esc_html_e('Color:', 'ultimate-coming-soon'); ?></label>
	                <div class="wpucs-color-item-lite">
	                    <input type="text" class="wp-color-picker" id="wpucs_subscription_text_color"
	                        name="wpucs_subscription_text_color"
	                        value="#fff">
	                    <input type="text" class="wpucs-color-picker-rgba" id="wpucs_subscription_text_color_rgba"
	                        name="wpucs_subscription_text_color_rgba"
	                        value="rgb(255, 255, 255)">
	                </div>
	            </div>
	        </div>
	    </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
	</fieldset>
</div>
<!--=========End Disable Subscription Notice =========-->