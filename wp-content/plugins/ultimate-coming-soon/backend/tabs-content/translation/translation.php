<?php if (!defined('ABSPATH')) exit; ?>
<!--============ Translation ============ -->
<h2><?php esc_html_e(' Translation Settings', 'ultimate-coming-soon'); ?></h2>

<!-- ================= Form Box =================-->
<form method="post" action="?page=ucsm-general-settings-lite&tab=translation-lite" enctype="multipart/form-data">
    <?php
	    // Add nonce to the form
	    $nonce = wp_create_nonce('wpucs_translation_nonce');
    ?>
    <input type="hidden" name="wpucs_translation_nonce_field" value="<?php echo esc_attr($nonce); ?>">
    <div class="wrap">
        <div class="wpucs-lite-disable modal-trigger" data-modal="customModal13">
            <!--========= Translation Table =========-->
            <fieldset style="margin-top: 30px; margin-bottom: 30px; padding-bottom: 0;" disabled>
                <legend><?php esc_html_e('Translation Features', 'ultimate-coming-soon'); ?><span class="wpucs_pro_feature_label">
                        (<?php esc_html_e('Pro', 'ultimate-coming-soon'); ?>)</span></legend>
                <table class="wpucs-widefat-lite translation-wpucs-widefat-lite wpucs-opacity">
                    <thead>
                        <tr>
                            <th><?php esc_html_e('String', 'ultimate-coming-soon'); ?></th>
                            <th><?php esc_html_e('Translation', 'ultimate-coming-soon'); ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><?php esc_html_e('Days', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_countdown_days_text"
                                    value="Days">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Hours', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_countdown_hours_text"
                                    value="Hours">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Minutes', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_countdown_minutes_text"
                                    value="Minutes">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Seconds', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_countdown_seconds_text"
                                    value="Seconds">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Email Address', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_email_address_insert"
                                    value="Email Address">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Oops! This email address is already on our list', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_email_address_list"
                                    value="Oops! This email address is already on our list">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Oops! We need a valid email address. Please try again.', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_email_address_valid"
                                    value="Oops! We need a valid email address. Please try again.">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Thank you! Your sign up request was successful.', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_email_address_successful"
                                    value="Thank you! Your sign up request was successful.">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Subscribe  ', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_subscribe"
                                    value="Subscribe">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('You must agree with our Terms and Conditions', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_terms" value="You must agree with our Terms and Conditions">
                            </td>
                        </tr>

                        <tr>
                            <td><?php esc_html_e('Oops! Email is empty', 'ultimate-coming-soon'); ?></td>
                            <td>
                                <input type="text" name="wpucs_email_empty"
                                    value="Oops! Email is empty">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </fieldset>
            <!--============End Translation Table ============ -->
        </div>
        <div id="customModal13" class="wpucs-lite-disable-modal">
            <div class="wpucs-lite-disable-modal-content">
                <span class="wpucs-lite-disable-modal-close">&times;</span>
                <p style="font-size: 16px; margin-bottom: 0px;"><?php esc_html_e("You are using free version of UCSM. For getting all features, try to buy Pro Version.  ", 'ultimate-coming-soon'); ?><a href="https://wpucs.com/" target="_blank" ><button class="buynow"><?php esc_html_e("Buy Now ", 'ultimate-coming-soon'); ?></button></a></p>
            </div>
        </div>
    </div>
</form>


<!-- ========================End Form Box======================== -->
<script type="text/javascript">
// Function to open and close the modal
function showModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';
}

// Get all elements with the modal-trigger class
const modalTriggers = document.querySelectorAll('.modal-trigger');

// Attach click event listeners to trigger the modals
modalTriggers.forEach((trigger) => {
    trigger.addEventListener('click', function() {
        const modalId = this.getAttribute('data-modal');
        showModal(modalId);
    });
});

// Close the modal when clicking the close button
const closeBtns = document.querySelectorAll('.wpucs-lite-disable-modal-close');
closeBtns.forEach((closeBtn) => {
    closeBtn.addEventListener('click', function() {
        const modal = this.parentElement.parentElement;
        modal.style.display = 'none';
    });
});

// Close the modal when clicking outside of the modal content
window.addEventListener('click', function(event) {
    if (event.target.classList.contains('wpucs-lite-disable-modal')) {
        event.target.style.display = 'none';
    }
});
</script>