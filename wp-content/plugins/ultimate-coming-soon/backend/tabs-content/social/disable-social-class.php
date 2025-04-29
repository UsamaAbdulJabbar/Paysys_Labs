<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--=========Disable Wpucs-range-wrapper =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal25">
    <fieldset style="margin-top: 30px; padding-bottom: 0;" disabled>

        <legend><?php esc_html_e('Icon Range', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <!--========= Font Size =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_social_icon_font_size"><?php esc_html_e('Font Size(px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_social_icon_font_size" name="wpucs_social_icon_font_size"
                        value="20" min="0" max="24">
                    <span class="wpucs-hint-pro">*
                        <?php esc_html_e('It is recommended to keep the Font Size between 0-24 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <!--========= End Font Size =========-->
            <!--========= Box Height =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_social_iconbox_height"><?php esc_html_e('Box Height(px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_social_iconbox_height" name="wpucs_social_iconbox_height"
                        value="60" min="0" max="60">
                    <span class="wpucs-hint-pro">*
                        <?php esc_html_e('It is recommended to keep the Icon Box Height  between 0-60 px.', 'ultimate-coming-soon'); ?></span>
                </p>

            </div>
            <!--========= End Box Height =========-->

            <!--========= Box Width =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_social_iconbox_width"><?php esc_html_e('Box Width(px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_social_iconbox_width" name="wpucs_social_iconbox_width"
                        value="60" min="0" max="60">
                    <span class="wpucs-hint-pro">*
                        <?php esc_html_e('It is recommended to keep the Icon Box Width between 0-60 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <!--========= End Box Width =========-->

            <!--========= Box Radius =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_social_icon_box_radius"><?php esc_html_e('Box Radius:', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_social_icon_box_radius" name="wpucs_social_icon_box_radius"
                        value="10" min="0" max="100">
                    <span class="wpucs-hint-pro">*
                        <?php esc_html_e('It is recommended to keep the Box Radius between 0-100 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <!--========= End Box Radius =========--> 
            
            <!--========= Box Radius =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_social_icon_box_border_width"><?php esc_html_e('Box Border Width:', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_social_icon_box_border_width" name="wpucs_social_icon_box_border_width"
                        value="2" min="0" max="5">
                    <span class="wpucs-hint-pro">*
                        <?php esc_html_e('It is recommended to keep the Box Border Width between 0-5 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <!--========= End Box Radius =========--> 
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>    
<!--=========End Disable Wpucs-range-wrapper =========-->
<!--=========Disable Wpucs-color-wrappeR =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal26">    
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Colors', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity" >
            <!--========= Icon =========-->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_color"><?php esc_html_e('Icon :', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_color"
                            name="wpucs_social_icon_color" value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_color_rgba"
                            name="wpucs_social_icon_color_rgba"
                            value="rgb(255,255,255)">
                    </div>
                </div>
            </div>
            <!--========= End Icon =========-->

            <!--=========  Box Background =========-->
            
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_box_color"><?php esc_html_e('Box Background:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_box_color"
                            name="wpucs_social_icon_box_color" value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_box_color_rgba"
                            name="wpucs_social_icon_box_color_rgba"
                            value="rgb(255,255,255)">
                    </div>
                </div>
            </div>
            <!--========= End Box Background  =========-->

            <!--========= Box Border =========-->
            
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_boxborder_color"><?php esc_html_e('Box Border :', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_boxborder_color"
                            name="wpucs_social_icon_boxborder_color" value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_boxborder_color_rgba"
                            name="wpucs_social_icon_boxborder_color_rgba"
                            value="rgb(255,255,255)">
                    </div>
                </div>
            </div>
            <!--========= End Box Border =========-->
            <!--========= Icon Hover=========-->
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_hover_color"><?php esc_html_e('Icon Hover:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_hover_color"
                            name="wpucs_social_icon_hover_color" value="#FFF">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_hover_color_rgba"
                            name="wpucs_social_icon_hover_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Icon Hover=========-->
            <!--=========  Box Background Hover =========-->
            
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_hover_box_color"><?php esc_html_e('Box Background Hover:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_hover_box_color"
                            name="wpucs_social_icon_hover_box_color" value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_hover_box_color_rgba"
                            name="wpucs_social_icon_hover_box_color_rgba"
                            value="rgb(255,255,255)">
                    </div>
                </div>
            </div>
            <!--========= End Box Background Hover =========-->

            <!--========= Box BorderHover =========-->
            
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_social_icon_hover_boxborder_color"><?php esc_html_e('Box Border Hover:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_social_icon_hover_boxborder_color"
                            name="wpucs_social_icon_hover_boxborder_color" value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_social_icon_hover_boxborder_color_rgba"
                            name="wpucs_social_icon_hover_boxborder_color_rgba"
                            value="rgb(255,255,255)">
                    </div>
                </div>
            </div>
            <!--========= End Box Border Hover=========-->
            
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>    
<!--=========End Disable Wpucs-color-wrappeR =========-->  