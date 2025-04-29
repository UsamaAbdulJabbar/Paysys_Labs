<?php if ( ! defined( 'ABSPATH' ) ) exit;

$platforms = array(
    'facebook' => array('icon' => 'fab fa-facebook-f', 'label' => __('Facebook', 'ultimate-coming-soon')),
    'twitter' => array('icon' => 'fab fa-twitter', 'label' => __('Twitter', 'ultimate-coming-soon')),
    'instagram' => array('icon' => 'fab fa-instagram', 'label' => __('Instagram', 'ultimate-coming-soon')),
    'youtube' => array('icon' => 'fab fa-youtube', 'label' => __('YouTube', 'ultimate-coming-soon')),
    'linkedin' => array('icon' => 'fab fa-linkedin', 'label' => __('LinkedIn', 'ultimate-coming-soon')),
    'pinterest' => array('icon' => 'fab fa-pinterest-p', 'label' => __('Pinterest', 'ultimate-coming-soon')),
    'snapchat' => array('icon' => 'fab fa-snapchat-ghost', 'label' => __('Snapchat', 'ultimate-coming-soon')),
    'tiktok' => array('icon' => 'fab fa-tiktok', 'label' => __('TikTok', 'ultimate-coming-soon')),
    'reddit' => array('icon' => 'fab fa-reddit-alien', 'label' => __('Reddit', 'ultimate-coming-soon')),
    'tumblr' => array('icon' => 'fab fa-tumblr', 'label' => __('Tumblr', 'ultimate-coming-soon')),
    'whatsapp' => array('icon' => 'fab fa-whatsapp', 'label' => __('WhatsApp', 'ultimate-coming-soon')),
    'telegram' => array('icon' => 'fab fa-telegram-plane', 'label' => __('Telegram', 'ultimate-coming-soon')),
    'wechat' => array('icon' => 'fab fa-weixin', 'label' => __('WeChat', 'ultimate-coming-soon')),
    'flickr' => array('icon' => 'fab fa-flickr', 'label' => __('Flickr', 'ultimate-coming-soon')),
    'behance' => array('icon' => 'fab fa-behance', 'label' => __('Behance', 'ultimate-coming-soon')),
    'dribbble' => array('icon' => 'fab fa-dribbble', 'label' => __('Dribbble', 'ultimate-coming-soon')),
    'vimeo' => array('icon' => 'fab fa-vimeo-v', 'label' => __('Vimeo', 'ultimate-coming-soon')),
    'soundcloud' => array('icon' => 'fab fa-soundcloud', 'label' => __('SoundCloud', 'ultimate-coming-soon')),
    'xing' => array('icon' => 'fab fa-xing', 'label' => __('Xing', 'ultimate-coming-soon')),
    'github' => array('icon' => 'fab fa-github', 'label' => __('GitHub', 'ultimate-coming-soon')),
    'spotify' => array('icon' => 'fab fa-spotify', 'label' => __('Spotify', 'ultimate-coming-soon')),
    'wordpress' => array('icon' => 'fab fa-wordpress-simple', 'label' => __('WordPress', 'ultimate-coming-soon')),
    'discord' => array('icon' => 'fab fa-discord', 'label' => __('Discord', 'ultimate-coming-soon')),
    'twitch' => array('icon' => 'fab fa-twitch', 'label' => __('Twitch', 'ultimate-coming-soon')),
    'line' => array('icon' => 'fab fa-line', 'label' => __('Line', 'ultimate-coming-soon'))
);

// Retrieve saved social links and order from the database
$saved_links = get_option('wpucs_social_links', array());
$saved_order = get_option('wpucs_social_links_order', array_keys($saved_links));

add_action('wp_ajax_save_social_links_order', 'save_social_links_order');
function save_social_links_order() {
    check_ajax_referer('wpucs_social_links_order_nonce', 'nonce'); // Check nonce for security
    if (isset($_POST['order'])) {
        $order = array_map('sanitize_text_field', wp_unslash($_POST['order'])); // Sanitize input
        update_option('wpucs_social_links_order', $order);
        wp_send_json_success('Order saved');
    } else {
        wp_send_json_error('Invalid request');
    }
}

?>

<fieldset style="margin-bottom: 30px;">
    <legend><?php esc_html_e('Social Link', 'ultimate-coming-soon'); ?></legend>
    <div class="row">
        <div class="col-lg-12">
            <p>
                <label for="wpucs_social_icon"><?php esc_html_e('Select Social Media', 'ultimate-coming-soon'); ?></label>
                <select id="wpucs_social_icon_select" class="social-select" style="width: 90%">
                    <option></option>
                    <?php foreach ($platforms as $platform_key => $platform_data) : ?>
                        <option value="<?php echo esc_attr($platform_key); ?>" data-icon="<?php echo esc_attr($platform_data['icon']); ?>">
                            <?php echo esc_html($platform_data['label']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button type="button" id="add_social_icon" class="add-social-icon-button"><?php esc_html_e('Add', 'ultimate-coming-soon'); ?></button>
            </p>
        </div>
    </div>
    <div class="row" id="social_links_container">
        <?php
        foreach ($saved_order as $platform) {
            if (isset($saved_links[$platform]) && isset($platforms[$platform])) {
                $url = $saved_links[$platform];
                $icon = $platforms[$platform]['icon'];
                $label = $platforms[$platform]['label'];
                $platform_placeholder = esc_html__('https://www.', 'ultimate-coming-soon') . esc_attr($platform) . '.com/';
                echo '<div class="col-lg-12" >';
                echo '<div class="social_link_item" data-platform="' . esc_attr($platform) . '">';
                echo '<label><i class="' . esc_attr($icon) . '"></i>' . esc_html($label) . '</label>';
                echo '<span class="handle" style="cursor: move;"><i class="fa-regular fa-clone"></i></span>';
                echo '<input type="url" name="wpucs_social_' . esc_attr($platform) . '" value="' . esc_attr($url) . '" placeholder="' . esc_attr($platform_placeholder) . '">';
                echo '<button type="button" class="remove_social_link">Remove</button>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>
    <input type="hidden" id="social_links_order" name="social_links_order" value="<?php echo esc_attr(implode(',', $saved_order)); ?>">
</fieldset>
<?php include UCSM_PLUGIN_DIR_LITE . 'backend/buttonS.php'; ?>