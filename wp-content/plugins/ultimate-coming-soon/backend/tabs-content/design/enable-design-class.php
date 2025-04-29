<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<!--========= Logo Setup =========-->
<fieldset style="margin-bottom: 30px; padding-bottom: 15px;">
    <legend><?php esc_html_e('Favicon & Logo Setup', 'ultimate-coming-soon'); ?></legend>

    <!-- ======================== Logo Setup Status  ========================-->
    <div class="wpucs-radio-status-lite">
        <!-- ========================Logo Setup Radio Button======================== -->
        <div class="row">
            <!--========= Favicon =========-->
            <div class="col-lg-4">
                <div class="wpucs-image-box-lite">
                    <label for="wpucs_favicon"><?php esc_html_e('Favicon:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_favicon" name="wpucs_favicon"
                        value="<?php echo esc_attr($wpucs_favicon); ?>" style="display: none;">
                    <button class="button button-secondary "
                        id="wpucs_favicon_upload"><?php esc_html_e('Choose Image', 'ultimate-coming-soon'); ?></button>
                    <div class="wpucs-image-item-lite" id="wpucs_favicon_item" style="display: none;">
                        <img id="wpucs_favicon_preview" src="<?php echo esc_url($wpucs_favicon); ?>"
                            style="max-width: 140px;max-height: 140px;display: block;margin-top: 10px;">
                        <span class="wpucs-close-button-lite " id="wpucs_favicon_close_button"
                            data-field-id="wpucs_favicon"></span>
                    </div>
                </div>
            </div>
            <!--========= End Favicon =========-->
            <div class="col-lg-8">
                <h4 class="ucsm_title"><?php esc_html_e('Choose Your Logo Format:', 'ultimate-coming-soon'); ?></h4>
                <div class="wpucs-radio-box-lite">

                    <!-- ========================Text Logo======================== -->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_text_logo" type="radio" name="wpucs_logo_setup" value="text"
                            <?php checked($wpucs_logo_setup, 'text'); ?>>
                        <label for="wpucs_text_logo">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Text Logo', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                    <!--=====================End Text Logo======================-->

                    <!--======================Graphic Logo=====================-->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_graphic_logo" type="radio" name="wpucs_logo_setup" value="graphic"
                            <?php checked($wpucs_logo_setup, 'graphic'); ?>>
                        <label for="wpucs_graphic_logo">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Graphic Logo', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                    <!--======================End Graphic Logo=====================-->

                    <!--=======================Disabled======================--->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_disabled_logo" type="radio" name="wpucs_logo_setup" value="disabled"
                            <?php checked($wpucs_logo_setup, 'disabled'); ?>>
                        <label for="wpucs_disabled_logo">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Disabled', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                    <!--=====================End Disabled=======================-->
                </div>
                <!-- =====================Coming Soon Text Logo====================== -->
                <div id="wpucs_text_logo_fields"
                    <?php echo ($wpucs_logo_setup === 'text') ? 'style="display:block;"' : 'style="display:none;"'; ?>>
                    <p>
                        <label for="wpucs_website_text_logo"><?php esc_html_e('UCSM Text Logo:', 'ultimate-coming-soon'); ?></label>
                        <input type="text" id="wpucs_website_text_logo" name="wpucs_website_text_logo"
                            value="<?php echo esc_attr($wpucs_website_text_logo); ?>">
                    </p>
                </div>
                <!-- ========= End Coming Soon Text Logo =============== -->

                <!-- ========= Coming Soon Graphic Logo =============== -->
                <div class="wpucs-image-box-lite" id="wpucs_logo_container"
                    <?php echo ($wpucs_logo_setup === 'graphic') ? 'style="display:block;"' : 'style="display:none;"'; ?>>
                    <label for="wpucs_website_logo"><?php esc_html_e('UCSM Graphic Logo:', 'ultimate-coming-soon'); ?></label>
                    <input type="text" id="wpucs_website_logo" name="wpucs_website_logo"
                        value="<?php echo esc_attr($wpucs_website_logo); ?>" style="display: none;">
                    <button class="button button-secondary" id="wpucs_website_logo_button" name="wpucs_website_logo"
                        value="<?php echo esc_attr($wpucs_website_logo); ?>"><?php esc_html_e('Choose Image', 'ultimate-coming-soon'); ?></button>

                    <div class="wpucs-image-item-lite" id="wpucs_website_logo_item" style="display: none;">
                        <img id="wpucs_website_logo_preview" src="<?php echo esc_url($wpucs_website_logo); ?>"
                            style="max-width: 140px;max-height: 140px;display: block;margin-top: 10px;">

                        <span class="wpucs-close-button-lite" id="wpucs_website_logo_close_button"
                            data-field-id="wpucs_website_logo"></span>

                    </div>
                </div>
                <!-- ========= End Coming Soon Graphic Logo =============== -->

                <!-- ========= Display =============== -->
                <div id="wpucs_disabled_logo_fields"
                    <?php echo ($wpucs_logo_setup === 'disabled') ? 'style="display:block;"' : 'style="display:none;"'; ?>>
                    <p>
                        <?php esc_html_e('Logo is disabled', 'ultimate-coming-soon'); ?>
                    </p>
                </div>
                <!-- ========= End Display =============== -->
            </div>
            
        </div>
        <!-- ========================End Logo Setup Radio Button======================== -->

        
    </div>
    <!--======================== END Logo Setup Status ========================-->
</fieldset>

<!--========= Select Background =========-->
<fieldset class="wpucs-design-bg-box-lite">
    <legend><?php esc_html_e('Select Background', 'ultimate-coming-soon'); ?></legend>
    <div class="row">
        <div class="col-lg-4">
            <!--========= Background Image =========-->
            <div class="wpucs-image-box-lite">
                <label for="wpucs_background_image"><?php esc_html_e('Background Image:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_background_image" name="wpucs_background_image"
                    value="<?php echo esc_attr($wpucs_background_image); ?>" style="display: none;">
                <button class="button button-secondary "
                    id="wpucs_background_image_upload"><?php esc_html_e('Choose Image', 'ultimate-coming-soon'); ?></button>
                <div class="wpucs-image-item-lite" id="wpucs_background_image_item" style="display: none;">
                    <img id="wpucs_background_image_preview" src="<?php echo esc_url($wpucs_background_image); ?>"
                        style="max-width: 140px;max-height: 140px;display: block;margin-top: 10px;">
                    <span class="wpucs-close-button-lite " id="wpucs_background_image_close_button"
                        data-field-id="wpucs_background_image"></span>
                </div>
            </div>
            <!--========= End  Background  Image =========-->
        </div>

        <!-- sHAPE oVERLAY Image  -->
        <?php if ($activatedTemplateId == 25 || $activatedTemplateId == 26 || $activatedTemplateId == 27 || $activatedTemplateId == 28 ) : ?>
        <!--========= Active template 25/26/27/28  Background Image =========-->
        <div class="col-lg-4">
            <div class="wpucs-image-box-lite">
                <label for="wpucs_shape_overlay"><?php esc_html_e('Shape Overlay Image:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_shape_overlay" name="wpucs_shape_overlay"
                    value="<?php echo esc_attr($wpucs_shape_overlay); ?>" style="display: none;">
                <button class="button button-secondary"
                    id="wpucs_shape_overlay_upload"><?php esc_html_e('Choose Image', 'ultimate-coming-soon'); ?></button>
                <div class="wpucs-image-item-lite" id="wpucs_shape_overlay_item" style="display: none;">
                    <div class="image">
                        <img id="wpucs_shape_overlay_preview" src="<?php echo esc_url($wpucs_shape_overlay); ?>"
                            style="max-width: 140px; max-height: 140px;display: block;margin-top: 10px;">
                    </div>        
                        <span class="wpucs-close-button-lite" id="wpucs_shape_overlay_close_button"
                            data-field-id="wpucs_shape_overlay"></span>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!--========= End  Active temp 4 Background Image =========-->
        <div class="col-lg-8">
            <div class="wpucs-color-box-lite">
                <label for="wpucs_background_color"><?php esc_html_e('Background Color:', 'ultimate-coming-soon'); ?></label>
                <div class="wpucs-color-item-lite">
                    <input type="text" class="wp-color-picker" id="wpucs_background_color" name="wpucs_background_color"
                        value="<?php echo esc_attr($wpucs_background_color); ?>"
                        data-default-color="<?php echo esc_attr($wpucs_background_color); ?>">
                    <input type="text" class="wpucs-color-picker-rgba" id="wpucs_background_color_rgba"
                        name="wpucs_background_color_rgba" value="<?php echo esc_attr($wpucs_background_color_rgba); ?>">
                </div>
            </div>
        </div> 
    </div>
</fieldset>
<!--========= End Select Background =========-->
<!-- ==========Save/Reset Settings Button========== -->
<?php include UCSM_PLUGIN_DIR_LITE . 'backend/button.php'; ?>
<!-- ==========End Save/Reset Settings Button========== -->