<?php if ( ! defined( 'ABSPATH' ) ) exit;
    require_once UCSM_PLUGIN_DIR_LITE .'backend/essential-variables.php';
    // Enqueue styles and scripts
    add_action('wp_enqueue_scripts', 'ucsm_enqueue_assets');

    function ucsm_enqueue_assets() {
        $plugin_version = defined('UCSM_VERSION_LITE') ? UCSM_VERSION_LITE : '1.0.0';
        $plugin_url = trailingslashit(UCSM_PLUGIN_URL_LITE);

        // Enqueue styles
        wp_enqueue_style('ucsm-style', $plugin_url . 'templates/comingsoon13/style.css', array(), $plugin_version);
        wp_enqueue_style('ucsm-font-family', $plugin_url . 'assets/css/wpucs_font_family_frontend.css', array(), $plugin_version);
        wp_enqueue_style('ucsm-remixicon', $plugin_url . 'assets/css/remixicon.css', array(), $plugin_version);
    }
    $social_links = get_option('wpucs_social_links', array());
    $social_links_order = get_option('wpucs_social_links_order', array());

    // Define an array of social platforms with their respective Remix icons
    $platforms = array(
        'facebook' => 'facebook-fill',
        'twitter' => 'twitter-fill',
        'instagram' => 'instagram-fill',
        'youtube' => 'youtube-fill',
        'linkedin' => 'linkedin-fill',
        'pinterest' => 'pinterest-fill',
        'snapchat' => 'snapchat-fill',
        'tiktok' => 'tiktok-fill',
        'reddit' => 'reddit-fill',
        'tumblr' => 'tumblr-fill',
        'whatsapp' => 'whatsapp-fill',
        'telegram' => 'telegram-fill',
        'wechat' => 'wechat-fill',
        'flickr' => 'flickr-fill',
        'behance' => 'behance-fill',
        'dribbble' => 'dribbble-fill',
        'vimeo' => 'vimeo-fill',
        'soundcloud' => 'soundcloud-fill',
        'xing' => 'xing-fill',
        'github' => 'github-fill',
        'spotify' => 'spotify-fill',
        'wordpress' => 'wordpress-fill',
        'discord' => 'discord-fill',
        'twitch' => 'twitch-fill',
        'line' => 'line-fill',
    );

?>
<!-- HTML -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Head -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (!empty($wpucs_seo_title)): ?><!-- Meta Title -->
    <meta property="og:title" content="<?php echo wp_kses_post($wpucs_seo_title); ?>" />
    <?php endif; ?>
    
    <?php if (!empty($wpucs_seo_description)): ?><!-- Meta Description -->
    <meta property="og:description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>" >
    <meta name="description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>">   
    <?php endif; ?>

    <?php if (!empty($wpucs_favicon)): ?><!-- Thumbnail -->
    <meta name="thumbnail" content="<?php echo esc_url($wpucs_favicon); ?>">
    <?php endif; ?>
    
    <?php if (!empty($wpucs_seo_img)): ?><!-- Meta Image -->
    <meta property="og:image" content="<?php echo esc_url($wpucs_seo_img); ?>">
    <?php endif; ?>

    <?php if (!empty($wpucs_seo_meta_keywords)): ?><!-- Meta KeyWords -->
    <meta name="keywords" content="<?php echo wp_kses_post($wpucs_seo_meta_keywords); ?>">
    <?php endif; ?>

    <?php if ($ucsm_mode === 'maintenance') : ?><!-- Maintenance Mode Meta Robots -->
    <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<!-- End Head -->

<!-- Body -->
<body>
    <!--  Container    -->
    <div style="background-color: <?php echo wp_kses_post($wpucs_background_color_rgba); ?>;
               background-image: url('<?php echo esc_url($wpucs_background_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
        <div class="ucsm-container">
            
            <!-- Header Top Bar -->
            <div class="ucsm-header-top-bar-pro">
                <!-- Logo Setup -->
                <?php if ($wpucs_logo_setup === 'text') { ?>
                    <div class="ucsm-header-textlogo-lite">
                        <a href="<?php echo esc_url($wpucs_website_url); ?>"style="color: #fff;font-weight: 700; text-decoration: none; font-size: 60px;font-family: 'inter-bold';"><?php echo wp_kses_post($wpucs_website_text_logo); ?></a>
                    </div>
                    <?php } ?>
                    <?php if ($wpucs_logo_setup === 'graphic') { ?>
                    <div class="ucsm-header-logo-lite">
                        <a href="<?php echo esc_url($wpucs_website_url); ?>"><img
                                src="<?php echo wp_kses_post($wpucs_website_logo); ?>" alt="Coming Soon Image"></a>
                    </div>
                    <?php } ?>
                    <?php if ($wpucs_logo_setup === 'disabled') { ?>
                    <div class="ucsm-header-logo-lite">

                    </div>
                <?php } ?>
                <!-- End Logo Setup -->
                <!-- contact -->
                <div class="ucsm-contact-info-lite">
                    <ul>
                        <?php if (!empty($wpucs_cf_contact_no)): ?>
                        <li>
                            <a href="tel:<?php echo wp_kses_post($wpucs_cf_contact_no); ?>">
                                <div class="icon"
                                    style="border-color:<?php echo wp_kses_post($wpucs_contact_info_border_color_rgba); ?>; ">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.305 6.40167C6.08695 7.7754 7.2246 8.91305 8.59833 9.695L9.335 8.66333C9.45346 8.49745 9.62862 8.38073 9.82734 8.33528C10.026 8.28982 10.2345 8.31878 10.4133 8.41667C11.5919 9.06077 12.8935 9.44815 14.2325 9.55333C14.4415 9.56989 14.6365 9.66461 14.7788 9.8186C14.921 9.97259 15 10.1745 15 10.3842V14.1025C15 14.3088 14.9235 14.5078 14.7853 14.661C14.6471 14.8142 14.4569 14.9106 14.2517 14.9317C13.81 14.9775 13.365 15 12.9167 15C5.78333 15 0 9.21667 0 2.08333C0 1.635 0.0225 1.19 0.0683333 0.748333C0.0893788 0.543081 0.18582 0.352934 0.338991 0.214695C0.492163 0.076456 0.691172 -4.44648e-05 0.8975 1.93894e-08H4.61583C4.82547 -2.62654e-05 5.02741 0.0789596 5.1814 0.221209C5.33539 0.363458 5.43011 0.55852 5.44667 0.7675C5.55185 2.10649 5.93923 3.40807 6.58333 4.58667C6.68122 4.76547 6.71018 4.97395 6.66472 5.17266C6.61927 5.37137 6.50255 5.54654 6.33667 5.665L5.305 6.40167ZM3.20333 5.85417L4.78667 4.72333C4.33732 3.75341 4.02946 2.72403 3.8725 1.66667H1.675C1.67 1.805 1.6675 1.94417 1.6675 2.08333C1.66667 8.29667 6.70333 13.3333 12.9167 13.3333C13.0558 13.3333 13.195 13.3308 13.3333 13.325V11.1275C12.276 10.9705 11.2466 10.6627 10.2767 10.2133L9.14583 11.7967C8.69055 11.6198 8.24834 11.4109 7.8225 11.1717L7.77417 11.1442C6.13965 10.2139 4.78607 8.86035 3.85583 7.22583L3.82833 7.1775C3.58909 6.75166 3.38024 6.30945 3.20333 5.85417Z"
                                            fill="<?php echo wp_kses_post($wpucs_contact_info_fontawesome_color_rgba); ?>" />
                                    </svg>
                                </div>
                                <p
                                    style="color: <?php echo wp_kses_post($wpucs_contact_info_color_rgba); ?>; font-size: <?php echo wp_kses_post($wpucs_contact_info_height); ?>px;">
                                    <?php echo wp_kses_post($wpucs_cf_contact_no); ?></p>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
                <!--End contact -->
            </div>
            <!-- End Header Top Bar -->

            <!-- Main Content -->
            <div class="ucsm-content">
                <!-- Heading Text -->
                <h1 class="ucsm-heading">
                    <?php echo wp_kses_post($wpucs_main_heading); ?>
                    <span><?php echo wp_kses_post($wpucs_sub_heading); ?></span>
                </h1>
                <!--End Heading Text -->
                <!-- Description Text -->
                <p class="ucsm-description"> <?php echo wp_kses_post($wpucs_main_description); ?>
                    
                </p>
                <!-- End Description Text -->
                <!-- Countdown Timer -->
                <?php if ($wpucs_countdown_timer_status === 'on') { ?>
                    <div class="ucsm-countdown" id="ucsm-countdown-section">
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="days">
                                00</span>

                            <span class="ucsm-countdown-label-lite"><?php esc_html_e('Days', 'ultimate-coming-soon'); ?>
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="hours">
                                00</span>
                            <span class="ucsm-countdown-label-lite">
                                <?php esc_html_e('Hours', 'ultimate-coming-soon'); ?>
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="minutes">
                                00</span>
                            <span class="ucsm-countdown-label-lite">
                                <?php esc_html_e('Hours', 'ultimate-coming-soon'); ?>
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="seconds">
                                00</span>
                            <span class="ucsm-countdown-label-lite">
                                <?php esc_html_e('Seconds', 'ultimate-coming-soon'); ?>
                            </span>
                        </div>
                    </div>
                <?php } ?>
                <!--End Countdown Timer -->

                <!-- NewsLetter -->
                <?php if ($wpucs_newsletter_status === 'on') { ?>
                    <form>
                        <div class="ucsm-form-box">
                            <input type="text" placeholder="Email Address">
                            <button type="submit"><?php esc_html_e('Subscribe', 'ultimate-coming-soon'); ?></button>
                        </div>
                    </form>
                <?php } ?>
                <!-- End NewsLetter -->
                
                <!-- Social -->
                <div class="ucsm-social-box-lite">
                    <ul>
                        <?php foreach ($social_links_order as $platform) : ?>
                            <?php if (!empty($social_links[$platform]) && isset($platforms[$platform])) : ?>
                                <li>
                                    <a href="<?php echo esc_url($social_links[$platform]); ?>" >
                                        <i class="ri-<?php echo esc_attr($platforms[$platform]); ?>" style=" color:white ; font-size: 20px; "></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- End Social -->
                <!-- ucsm copyright -->
                    <div class="ucsm-copyright">
                    <p><?php esc_html_e('Powered By', 'ultimate-coming-soon'); ?> <a target="__blank" href="https://rstheme.com/"><?php esc_html_e('RSTheme', 'ultimate-coming-soon'); ?></a></p>
                    </div>
                <!-- End ucsm copyright -->
            </div>
            <!-- End Main Content -->
            
        </div>
    </div>
    <!-- End Container    -->

    <!-- UpdateCountdown JS -->
    <script>
        function updateCountdown() {

                // Get the countdown date from the PHP variable
                var countdownDate = "<?php echo esc_attr($wpucs_countdown_date); ?>";
                // Set the countdown target time
                var targetDate = new Date(countdownDate).getTime();
                var now = new Date().getTime();
                var timeDifference = targetDate - now;
                // Get the countdown section element
                var countdownSection = document.getElementById("countdown-section");
                // Check if timeDifference is less than 0
                if (timeDifference < 0) {
                    // If timeDifference is less than 0, hide the countdown section
                    countdownSection.style.display = "none";
                }

                const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                document.getElementById("days").textContent = days < 10 ? `0${days}` : days;
                document.getElementById("hours").textContent = hours < 10 ? `0${hours}` : hours;
                document.getElementById("minutes").textContent = minutes < 10 ? `0${minutes}` : minutes;
                document.getElementById("seconds").textContent = seconds < 10 ? `0${seconds}` : seconds;
            }
            updateCountdown();
            setInterval(updateCountdown, 1000);
    </script>
    <!-- End updateCountdown JS -->
</body>
<!-- End Body -->

</html>
<!--End HTML -->