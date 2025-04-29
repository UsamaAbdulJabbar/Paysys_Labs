<?php if (!defined('ABSPATH')) exit; ?>

<!--========= Meta Content =========-->
<fieldset style="margin-bottom: 30px;">
    <legend><?php esc_html_e('SEO Content', 'ultimate-coming-soon'); ?></legend>
    <div class="row">
        <!--========= Meta Title =========-->
        <div class="col-lg-12">
            <p>
                <label for="wpucs_seo_title"><?php esc_html_e('Meta Title:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_seo_title" name="wpucs_seo_title"
                    placeholder="Enter Your Meta Title" value="<?php echo esc_attr($wpucs_seo_title); ?>">
            </p>
        </div>
        <!--========= End Meta Title =========-->

        <!--========= Meta Description =========-->
        <div class="col-lg-12">
            <p>
                <label for="wpucs_seo_description"><?php esc_html_e('Meta Description:', 'ultimate-coming-soon'); ?></label>
                <textarea id="wpucs_seo_description" name="wpucs_seo_description" rows="5"
                    cols="50" placeholder="Enter Your Meta Description"><?php echo esc_attr($wpucs_seo_description); ?></textarea>
            </p>
        </div>
        <!--========= End Meta Description =========-->

        <!--========= Meta Keywords =========-->
        <div class="col-lg-12">
            <p>
                <label for="wpucs_seo_meta_keywords"><?php esc_html_e('Meta Keywords:', 'ultimate-coming-soon'); ?></label>
                <textarea id="wpucs_seo_meta_keywords" name="wpucs_seo_meta_keywords" rows="5"
                    cols="50" placeholder="Enter Your Meta Keywords"><?php echo esc_attr($wpucs_seo_meta_keywords); ?></textarea>
            </p>
        </div>
        <!--========= End Meta Keywords =========-->

        <!--========= Meta Image =========-->
        <div class="col-lg-12">
            <div class="wpucs-image-box-lite">
                <label for="wpucs_seo_img"><?php esc_html_e('Meta Image:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_seo_img" name="wpucs_seo_img"
                    value="<?php echo esc_attr($wpucs_seo_img); ?>" style="display: none;">
                <button class="button button-secondary"
                    id="wpucs_seo_img_upload"><?php esc_html_e('Choose Image', 'ultimate-coming-soon'); ?></button>
                <div class="wpucs-image-item-lite" id="wpucs_seo_img_item" style="display: none;">
                    <img id="wpucs_seo_img_preview" src="<?php echo esc_url($wpucs_seo_img); ?>"
                        style="max-width: 140px;max-height: 140px;display: block;margin-top: 10px;">
                    <span class="wpucs-close-button-lite" id="wpucs_seo_img_button"
                        data-field-id="wpucs_seo_img"></span>
                </div>
            </div>
        </div>
        <!--========= End Meta Image =========-->

    </div>
</fieldset>
<!--========= End SEO Content =========-->