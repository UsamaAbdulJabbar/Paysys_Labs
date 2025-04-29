<?php if ( ! defined( 'ABSPATH' ) ) exit;  ?>
<!--========= Main Content =========-->
<fieldset style="margin-bottom: 30px; padding-bottom: 15px;">
    <legend><?php esc_html_e('Main Content', 'ultimate-coming-soon'); ?></legend>
    <!-- Row -->
    <div class="row">

        <!-- ======================== Heading========================  -->
        <div class="col-lg-12">

            <p>
                <label for="wpucs_main_heading"><?php esc_html_e('Heading:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_main_heading" name="wpucs_main_heading"
                    value="<?php echo esc_attr($wpucs_main_heading); ?>">
            </p>
        </div>
        <!-- ========================End Heading========================  -->
        <?php if ($activatedTemplateId == 0 || $activatedTemplateId == 13 || $activatedTemplateId == 16 || $activatedTemplateId == 25 || $activatedTemplateId == 26  || $activatedTemplateId == 28 ) : ?>
        <div class="col-lg-12">
            <!-- ========================Sub Heading========================  -->
            <p>
                <label for="wpucs_sub_heading"><?php esc_html_e('Sub Heading:', 'ultimate-coming-soon'); ?></label>
                <input type="text" id="wpucs_sub_heading" name="wpucs_sub_heading"
                    value="<?php echo esc_attr($wpucs_sub_heading); ?>">
            </p>
            <!-- ========================End Sub Heading========================  -->
        </div>
        <?php endif; ?>
        
        <!-- ======================== Description========================  -->
        <div class="col-lg-12">

            <p>
                <label for="wpucs_main_description"><?php esc_html_e(' Description:', 'ultimate-coming-soon'); ?></label>
                <textarea id="wpucs_main_description" name="wpucs_main_description" rows="5"
                    cols="50"><?php echo esc_attr($wpucs_main_description); ?></textarea>
                <span class="wpucs-hint-lite">*
                    <?php esc_html_e('It is recommended to keep the description between 0–300 characters.', 'ultimate-coming-soon'); ?></span>
            </p>
        </div>
        
        <!-- ========================End Description========================  -->
    </div>
    <!-- End Row -->

</fieldset>
<!--========= End Main Content =========-->