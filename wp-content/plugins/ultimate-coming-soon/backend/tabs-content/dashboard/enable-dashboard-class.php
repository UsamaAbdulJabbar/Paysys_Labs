<?php if ( ! defined( 'ABSPATH' ) ) exit;  ?>
<!--========= Enable Coming Soon & Maintenance Mode =========-->
<fieldset style="margin-bottom: 30px; padding-bottom: 15px;">
    <legend><?php esc_html_e('Active Status', 'ultimate-coming-soon'); ?></legend>
    <!--========= UCSM Status =========-->
    <div class="checkbox wpucs-switch-common-lite">
        <div class="wpucs-md-switch-lite">
            <span class="label-text"><?php esc_html_e('Ultimate Coming Soon & Maintenance Status:', 'ultimate-coming-soon'); ?></span>
            <input class="switch" type="checkbox" id="wpucs_enable_mode" name="wpucs_enable_mode" value="checked"
                <?php checked($wpucs_enable_mode, true); ?>>
            <label for="wpucs_enable_mode"></label>
            <span class="switch-note-lite" id="toggleText">
                <?php echo $wpucs_enable_mode ? esc_html__('Enable', 'ultimate-coming-soon') : esc_html__('Disable', 'ultimate-coming-soon'); ?>
            </span>
        </div>
    </div>
    <!-- Conditional div -->
    <div class="wpucs-radio-status-lite" id="ucsm_page_radio" style="display: <?php echo $wpucs_enable_mode ? 'block' : 'none'; ?>;">
        <p><?php esc_html_e('**Except for admin users, only visitors can view the Coming Soon or Maintenance page.**', 'ultimate-coming-soon'); ?></p>
        <div class="wpucs-radio-box-lite">
            <!--======================Coming Soon Mode=====================-->
            <div class="row">
                <div class="col-lg-4">
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_coming_soon_whole_website" type="radio" name="ucsm_page_setup" value="whole-website"
                            <?php checked($ucsm_page_setup, 'whole-website'); ?>>
                        <label for="wpucs_coming_soon_whole_website">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Whole Website', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                </div>
                <!--======================End Coming Soon Mode=====================-->
                <div class="col-lg-4">
                    <!-- ========================Maintenance Mode======================== -->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_maintenance_homepage" type="radio" name="ucsm_page_setup" value="homepage"
                            <?php checked($ucsm_page_setup, 'homepage'); ?>>
                        <label for="wpucs_maintenance_homepage">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Homepage only', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================End Maintenance Mode======================-->
    </div>
</fieldset>


<fieldset style="margin-bottom: 30px; padding-bottom: 15px;">
    <legend><?php esc_html_e('Mode Setup', 'ultimate-coming-soon'); ?></legend>

    <!-- ======================== Mode Setup Status  ========================-->
    <div class="wpucs-radio-status-lite">
        <h4 class="ucsm_title"><?php esc_html_e('Choose Mode:', 'ultimate-coming-soon'); ?></h4>

        <!-- ======================== Mode Setup Radio Button======================== -->
        <div class="wpucs-radio-box-lite" id="ucsm_mode_radio" >

            <!--======================Coming Soon Mode=====================-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_coming_soon_mode" type="radio" name="ucsm_mode" value="coming_soon"
                            <?php checked($ucsm_mode, 'coming_soon'); ?>>
                        <label for="wpucs_coming_soon_mode">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Coming Soon & Landing Page', 'ultimate-coming-soon'); ?></span>
                        </label>
                        <p><?php esc_html_e('"When using the Coming Soon Mode, your website page will be indexed by search engines (Google, Bing, etc.)."', 'ultimate-coming-soon'); ?></p>

                    </div>
                </div>
                    <!--======================End Coming Soon Mode=====================-->
                <div class="col-lg-12">
                    <!-- ========================Maintenance Mode======================== -->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_maintenance_mode" type="radio" name="ucsm_mode" value="maintenance"
                            <?php checked($ucsm_mode, 'maintenance'); ?>>
                        <label for="wpucs_maintenance_mode">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Maintenance Mode', 'ultimate-coming-soon'); ?></span>
                        </label>
                        <p><?php esc_html_e('"When using the Maintenance Mode, your website page will not be indexed by search engines (Google, Bing, etc.)."', 'ultimate-coming-soon'); ?></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- ========================Maintenance Mode======================== -->
                    <div class="wpucs-radio-item-lite">
                        <input id="wpucs_redirect_mode_radio" type="radio" name="ucsm_mode" value="redirect"
                            <?php checked($ucsm_mode, 'redirect'); ?>>
                        <label for="wpucs_redirect_mode_radio">
                            <div class="wpucs-dot-icon-pro"></div>
                            <span><?php esc_html_e('Redirect Mode', 'ultimate-coming-soon'); ?></span>
                        </label>
                    </div>
                    <p>
                        <?php esc_html_e('"Choose Redirect Mode if you want to redirect your website to another URL."', 'ultimate-coming-soon'); ?>
                        <input type="text" id="wpucs_redirect_mode_url" name="wpucs_redirect_mode_url" placeholder="http://example.com"
                            value="<?php echo esc_attr($wpucs_redirect_mode_url); ?>">
                    </p>
                    
                </div>
            </div>

            <!--=====================End Maintenance Mode======================-->
        </div>
        <!-- ========================End Mode Setup Radio Button======================== -->
    </div>
    <!--======================== END Mode Setup Status ========================-->
</fieldset>
<!--========= END Enable Coming Soon & Maintenance Mode =========-->
