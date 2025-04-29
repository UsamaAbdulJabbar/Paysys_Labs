<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<!--========= Conatct information =========-->
<?php if ($activatedTemplateId == 0 || $activatedTemplateId == 13 || $activatedTemplateId == 16 ) : ?>
<fieldset style="padding-bottom: 30px;">
    
    <legend><?php esc_html_e('Contact Information', 'ultimate-coming-soon'); ?></legend>
    
    <!--========= Contact No =========-->
    <?php if ($activatedTemplateId == 0 || $activatedTemplateId == 13 || $activatedTemplateId == 16 ) : ?>
    <p>
        <label for="wpucs_cf_contact_no"><?php esc_html_e('Contact No:', 'ultimate-coming-soon'); ?></label>
        <input type="text" id="wpucs_cf_contact_no" name="wpucs_cf_contact_no"
            placeholder="Enter Your Contact Number" value="<?php echo esc_attr($wpucs_cf_contact_no); ?>">
    </p>
    <?php endif; ?>
    <!--========= End Contact No =========-->

    <!--========= E-mail Address =========-->
    <?php if ($activatedTemplateId == 0  || $activatedTemplateId == 16  ) : ?>
    <p>
        <label for="wpucs_cf_email_address"><?php esc_html_e('E-mail Address:', 'ultimate-coming-soon'); ?></label>
        <input type="email" id="wpucs_cf_email_address" name="wpucs_cf_email_address" placeholder="Enter Your E-mail Address"
            value="<?php echo esc_attr($wpucs_cf_email_address); ?>">
    </p>
    <?php endif; ?>
    <!--========= End E-mail Address =========-->

    <?php if ($activatedTemplateId == 0  || $activatedTemplateId == 16  ) : ?>
    <!--========= Opening Hours =========-->
    <p>
        <label for="wpucs_cf_opening_hours"><?php esc_html_e('Opening Hours:', 'ultimate-coming-soon'); ?></label>
        <input type="text" id="wpucs_cf_opening_hours" name="wpucs_cf_opening_hours" placeholder="Enter Your Opening Hours"
            value="<?php echo esc_attr($wpucs_cf_opening_hours); ?>">
    </p>
    <!--========= End Opening Hours =========-->
    <?php endif; ?>
    <!--========= Address  =========-->
    <?php if ($activatedTemplateId == 0  || $activatedTemplateId == 16  ) : ?>
    <p>
        <label for="wpucs_cf_address"><?php esc_html_e('Address:', 'ultimate-coming-soon'); ?></label>
        <textarea id="wpucs_cf_address" name="wpucs_cf_address" rows="5"
            cols="50" placeholder="Enter Your Address"><?php echo esc_attr($wpucs_cf_address); ?></textarea>
        <span class="wpucs-hint-lite">*
            <?php esc_html_e('It is recommended to keep the Address between 0–100 characters.', 'ultimate-coming-soon'); ?></span>
    </p>
    <?php endif; ?>
    <!--========= End Address  =========-->
    
    <!-- ==========Save/Reset Settings Button========== -->
    <?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>
    <!-- ========== End Save/Reset Settings Button========== -->

</fieldset>
<?php endif; ?>
<!--=========End Conatct information =========-->