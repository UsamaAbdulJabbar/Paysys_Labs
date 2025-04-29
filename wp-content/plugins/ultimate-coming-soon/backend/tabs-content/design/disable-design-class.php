<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!-- Heading Font -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal101">
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Heading Font', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_heading_font_family"><?php esc_html_e('Select Font Family from Google Fonts:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_heading_font_family" name="wpucs_main_heading_font_family">
                        <option value="roboto"><?php echo esc_html_e('Roboto', 'ultimate-coming-soon'); ?></option>
                    </select>
                </p>
            </div>

            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_heading_font_style"><?php esc_html_e('Font Style:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_heading_font_style" name="wpucs_main_heading_font_style">
                        <option value="normal"><?php echo esc_html_e('Normal', 'ultimate-coming-soon'); ?></option>
                        
                        <option value="italic"><?php echo esc_html_e('Italic', 'ultimate-coming-soon'); ?></option>
                        <!-- Add more variants as needed -->
                    </select>
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_heading_font_variant"><?php esc_html_e('Font Weight:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_heading_font_variant" name="wpucs_main_heading_font_variant">
                        <?php
                        // Define default font weight
                        $heading_default_font_weight = '700';
                        
                        ?>
                        
                        <option value="700"><?php echo esc_html_e('700', 'ultimate-coming-soon'); ?></option>
                     
                    </select>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_heading_font_size"><?php esc_html_e('Font Size:', 'ultimate-coming-soon'); ?>
                        
                    </label>
                    <input type="range" id="wpucs_main_heading_font_size8" name="wpucs_main_heading_font_size"
                        value="100" min="10" max="150" step="1">
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_heading_line_height">
                        <?php esc_html_e('Line Height:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_heading_line_height_value"></span>
                        
                    </label>
                    <input type="range" id="wpucs_heading_line_height" name="wpucs_heading_line_height"
                        value="2" min="1.3" max="3" step="0.1">
                </p>
            </div>

            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_heading_letter_spacing"><?php esc_html_e('Letter Spacing:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_heading_letter_spacing_value"></span>
                    </label>
                    <input type="range" id="wpucs_main_heading_letter_spacing" name="wpucs_main_heading_letter_spacing"
                        value="5" min="0" max="10" step="0.1">
                    
                </p>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!-- END Heading Font -->

<!-- Sub Heading Font -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal102">
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Sub Heading Font', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_sub_heading_font_family"><?php esc_html_e('Select Font Family from Google Fonts:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_heading_font_family" name="wpucs_main_heading_font_family">
                        <option value="roboto"><?php echo esc_html_e('Roboto', 'ultimate-coming-soon'); ?></option>
                    </select>
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_sub_heading_font_style"><?php esc_html_e('Font Style:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_sub_heading_font_style" name="wpucs_main_sub_heading_font_style">
                        <option value="normal"><?php echo esc_html_e('Normal', 'ultimate-coming-soon'); ?></option>
                        
                        <option value="italic"><?php echo esc_html_e('Italic', 'ultimate-coming-soon'); ?></option>
                        <!-- Add more variants as needed -->
                    </select>
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_sub_heading_font_variant"><?php esc_html_e('Font Weight:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_sub_heading_font_variant" name="wpucs_main_sub_heading_font_variant">
                        <?php
                        // Define default font weight
                        $sub_heading_default_font_weight = '300';
                        ?>
                        <option value="800"><?php echo esc_html_e('800', 'ultimate-coming-soon'); ?></option>
                    </select>
                </p>
            </div>

            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_sub_heading_font_size"><?php esc_html_e('Font Size:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_sub_heading_font_size_value"></span>
                    </label>
                    <input type="range" id="wpucs_main_sub_heading_font_size" name="wpucs_main_sub_heading_font_size"
                        value="80" min="10" max="150" step="1">
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_sub_heading_line_height">
                        <?php esc_html_e('Line Height:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_sub_heading_line_height_value"></span>
                        
                    </label>
                    <input type="range" id="wpucs_sub_heading_line_height" name="wpucs_sub_heading_line_height"
                        value="2" min="1.3" max="3" step="0.1">
                </p>
            </div>

            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_sub_heading_letter_spacing"><?php esc_html_e('Letter Spacing:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_sub_heading_letter_spacing_value"></span>
                    </label>
                    <input type="range" id="wpucs_main_sub_heading_letter_spacing" name="wpucs_main_sub_heading_letter_spacing"
                         min="0" max="10" step="0.1">
                </p>
            </div>
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>    
<!-- SUB Heading Font -->

<!-- Description Font -->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal103">
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Description Font', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_font_family"><?php esc_html_e('Select Font Family from Google Fonts:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_heading_font_family" name="wpucs_main_heading_font_family">
                        <option value="roboto"><?php echo esc_html_e('Roboto', 'ultimate-coming-soon'); ?></option>
                    </select>
                </p>
            </div>

            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_font_style"><?php esc_html_e('Font Style:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_description_font_style" name="wpucs_main_description_font_style">
                        <option value="normal" ><?php echo esc_html_e('Normal', 'ultimate-coming-soon'); ?></option>
                        
                        <option value="italic" ><?php echo esc_html_e('Italic', 'ultimate-coming-soon'); ?></option>
                        <!-- Add more variants as needed -->
                    </select>
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_font_variant"><?php esc_html_e('Font Weight:', 'ultimate-coming-soon'); ?></label>
                    <select id="wpucs_main_description_font_variant" name="wpucs_main_description_font_variant">
                        <?php
                        // Define default font weight
                        $description_default_font_weight = '700';
                        ?>
                        <option value="800"><?php echo esc_html_e('800', 'ultimate-coming-soon'); ?></option>
                        
                    </select>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_font_size"><?php esc_html_e('Font Size:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_description_font_size_value"></span>
                        
                    </label>
                    <input type="range" id="" name="wpucs_main_description_font_size"
                        value="30" min="10" max="50" step="1">
                    
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_line_height">
                        <?php esc_html_e('Line Height:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_description_line_height_value"></span>
                        
                    </label>
                    <input type="range" id="wpucs_main_description_line_height" name="wpucs_main_description_line_height"
                        value="2" min="1.3" max="3" step="0.1">
                </p>
            </div>
            <div class="col-lg-3">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_main_description_letter_spacing">
                        <?php esc_html_e('Letter Spacing:', 'ultimate-coming-soon'); ?>
                        <span id="wpucs_main_description_letter_spacing_value"></span>
                        
                    </label>
                    <input type="range" id="wpucs_main_description_letter_spacing" name="wpucs_main_description_letter_spacing"
                        value="5" min="0" max="10" step="0.1">
                </p>
            </div>

        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div> 
<!-- Sub Description Font -->


<!--========= Disable Font Size Section  =========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal1">
    <fieldset style="margin-top: 30px; padding-bottom: 0;" disabled>

        <legend><?php esc_html_e('Font Size', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro ', 'ultimate-coming-soon'); ?>)</span> </legend>
        <div class="row wpucs-opacity">
            <!--========= Text Logo =========-->
            <?php if ($wpucs_logo_setup == 'text' ) : ?>
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_website_text_logo_height"><?php esc_html_e('Text Logo (px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_website_text_logo_height" name="wpucs_website_text_logo_height"
                        value="40" min="0" max="80">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Text Logo font size  between 0-80 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <?php endif; ?>
            <!--========= End Text Logo =========-->

            <!--========= Box Container Size  =========-->
            <div class="col-lg-6">
                <p class="wpucs-rangebox-pro">
                    <label for="wpucs_box_container_size"><?php esc_html_e('Box Container Size (px):', 'ultimate-coming-soon'); ?></label>
                    <input type="range" id="wpucs_box_container_size" name="wpucs_box_container_size"
                        value="900" min="0" max="1200">

                    <span class="wpucs-hint-lite">*
                        <?php esc_html_e('It is recommended to keep the Box Container Width  between 0-1200 px.', 'ultimate-coming-soon'); ?></span>
                </p>
            </div>
            <!--========= End Box Container Size  =========-->

        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
</div>
<!--========= Disable Font Size Section =========-->

<!--========= Disable Colors  Section=========-->
<div class="wpucs-lite-disable modal-trigger" data-modal="customModal2">

    <!--========= Colors =========-->
    <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
        <legend><?php esc_html_e('Colors', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
        <div class="row wpucs-opacity">
            <!--========= Heading =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_main_heading_color"><?php esc_html_e('Heading:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_main_heading_color"
                            name="wpucs_main_heading_color"
                            value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_main_heading_color_rgba"
                            name="wpucs_main_heading_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--========= End Heading =========-->

            <!--========= Sub Heading =========-->
            
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_sub_heading_color"><?php esc_html_e('Sub Heading:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_sub_heading_color"
                            name="wpucs_sub_heading_color"
                            value="#FFC75C">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_sub_heading_color_rgba"
                            name="wpucs_sub_heading_color_rgba"
                            value="rgb(255, 199, 92)">
                    </div>
                </div>
            </div>
            
            <!--========= End Sub Heading =========-->

            <!--========= Description =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_main_description_color"><?php esc_html_e('Description:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_main_description_color"
                            name="wpucs_main_description_color"
                            value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_main_description_color_rgba"
                            name="wpucs_main_description_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <!--=========End  Description =========-->

            <!--========= Background Overlay =========-->
            <div class="col-lg-6">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_background_overlay_color"><?php esc_html_e('Background Overlay:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_background_overlay_color"
                            name="wpucs_background_overlay_color"
                            value="#FFC75C">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_background_overlay_color_rgba"
                            name="wpucs_background_overlay_color_rgba"
                            value="rgb(255, 199, 92)">
                    </div>
                </div>
            </div>
            <!--=========End  Background Overlay =========-->

            <!--========= Text Logo =========-->
            <?php if ($wpucs_logo_setup == 'text' ) : ?>
            <div class="col-lg-4">
                <div class="wpucs-color-box-lite">
                    <label for="wpucs_website_text_logo_color"><?php esc_html_e('Text Logo:', 'ultimate-coming-soon'); ?></label>
                    <div class="wpucs-color-item-lite">
                        <input type="text" class="wp-color-picker" id="wpucs_website_text_logo_color"
                            name="wpucs_website_text_logo_color"
                            value="#fff">
                        <input type="text" class="wpucs-color-picker-rgba" id="wpucs_website_text_logo_color_rgba"
                            name="wpucs_website_text_logo_color_rgba"
                            value="rgb(255, 255, 255)">
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!--========= End Text Logo =========-->
        </div>
        <p><?php esc_html_e('This section is available in the Pro version of the plugin.', 'ultimate-coming-soon'); ?></p>
    </fieldset>
    <!--========= End Colors =========-->

</div>
<!--========= End Disable Colors  Section =========-->