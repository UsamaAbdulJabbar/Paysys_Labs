<?php if (!defined('ABSPATH')) exit;?>
<!-- Enable/Disable Switch -->
<fieldset style="margin-bottom: 30px;">
    <legend><?php esc_html_e('Choose the Roles to Coming Soon mode', 'ultimate-coming-soon'); ?></legend>

    <div class="row">
        <!-- Administrator -->
        <div class="col-lg-2">
            <div class="checkbox wpucs-switch-common-pro">
                <div class="wpucs-md-switch-pro">
                    <input id="wpucs_administrator" class="switch" type="checkbox"
                        name="wpucs_administrator" <?php checked($wpucs_administrator, 'on'); ?>>
                    <label for="wpucs_administrator"></label>
                    <span class="switch-note-pro"><?php esc_html_e('Administrator', 'ultimate-coming-soon'); ?></span>
                </div>
            </div>
        </div>

        <!-- Editor -->
        <div class="col-lg-2">
            <div class="checkbox wpucs-switch-common-pro">
                <div class="wpucs-md-switch-pro">
                    <input id="wpucs_editor" class="switch" type="checkbox" name="wpucs_editor"
                        <?php checked($wpucs_editor, 'on'); ?>>
                    <label for="wpucs_editor"></label>
                    <span class="switch-note-pro"><?php esc_html_e('Editor', 'ultimate-coming-soon'); ?></span>
                </div>
            </div>
        </div>
        <!-- Author -->
        <div class="col-lg-2">
            <div class="checkbox wpucs-switch-common-pro">
                <div class="wpucs-md-switch-pro">
                    <input id="wpucs_author" class="switch" type="checkbox" name="wpucs_author"
                        <?php checked($wpucs_author, 'on'); ?>>
                    <label for="wpucs_author"></label>
                    <span class="switch-note-pro"><?php esc_html_e('Author', 'ultimate-coming-soon'); ?></span>
                </div>
            </div>
        </div>
        <!-- Contributor -->
        <div class="col-lg-2">
            <div class="checkbox wpucs-switch-common-pro">
                <div class="wpucs-md-switch-pro">
                    <input id="wpucs_contributor" class="switch" type="checkbox" name="wpucs_contributor"
                        <?php checked($wpucs_contributor, 'on'); ?>>
                    <label for="wpucs_contributor"></label>
                    <span class="switch-note-pro"><?php esc_html_e('Contributor', 'ultimate-coming-soon'); ?></span>
                </div>
            </div>
        </div>
        <!-- Subscriber -->
        <div class="col-lg-2">
            <div class="checkbox wpucs-switch-common-pro">
                <div class="wpucs-md-switch-pro">
                    <input id="wpucs_subscriber" class="switch" type="checkbox" name="wpucs_subscriber"
                        <?php checked($wpucs_subscriber, 'on'); ?>>
                    <label for="wpucs_subscriber"></label>
                    <span class="switch-note-pro"><?php esc_html_e('Subscriber', 'ultimate-coming-soon'); ?></span>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<!-- Enable/Disable Switch -->