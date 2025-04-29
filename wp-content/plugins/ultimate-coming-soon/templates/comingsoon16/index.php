<?php
    if ( ! defined( 'ABSPATH' ) ) exit;
    require_once UCSM_PLUGIN_DIR_LITE .'backend/essential-variables.php';
    
    // Enqueue styles and scripts
    add_action('wp_enqueue_scripts', 'ucsm_enqueue_assets');

    function ucsm_enqueue_assets() {
        $plugin_version = defined('UCSM_VERSION_LITE') ? UCSM_VERSION_LITE : '1.0.0';
        $plugin_url = trailingslashit(UCSM_PLUGIN_URL_LITE);

        // Enqueue styles
        wp_enqueue_style('ucsm-style', $plugin_url . 'templates/comingsoon16/style.css', array(), $plugin_version);
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
        <!--  Container  -->
        <div style="background-color: <?php echo wp_kses_post($wpucs_background_color_rgba); ?>; background-image: url('<?php echo esc_url($wpucs_background_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
            <div class="ucsm-container" style="min-height: 100vh;">
                
                <!-- Main Content -->
                <div class="ucsm-content" >
                    <!--  Logo Setup -->
                    <?php if ($wpucs_logo_setup === 'text') { ?>
                        <div class="ucsm-header-textlogo-lite">
                            <a href="<?php echo esc_url($wpucs_website_url); ?>"
                                style="color: #fff;font-weight: 700; text-decoration: none; font-size: 60px;font-family: 'inter-bold';">
                                <?php echo wp_kses_post($wpucs_website_text_logo); ?>
                            </a>
                        </div>
                        <?php } ?>
                        <?php if ($wpucs_logo_setup === 'graphic') { ?>
                        <div class="ucsm-header-logo-lite">
                            <a href="<?php echo esc_url($wpucs_website_url); ?>"><img src="<?php echo wp_kses_post($wpucs_website_logo); ?>" alt="Coming Soon Image">
                            </a>
                        </div>
                        <?php } ?>
                        <?php if ($wpucs_logo_setup === 'disabled') { ?>
                        <div class="ucsm-header-logo-lite">

                        </div>
                    <?php } ?>
                    <!-- End Logo Setup -->
                   

                    <!-- Heading Text -->
                    <h1 class="ucsm-heading" >
                        <?php echo wp_kses_post($wpucs_main_heading); ?> 
                        <span><?php echo wp_kses_post($wpucs_sub_heading); ?></span>
                    </h1>                
                    <!--End Heading Text -->

                    <!-- Description Text -->
                    <p class="ucsm-description" style="color: #fff; font-size: 20px;">
                        <?php echo wp_kses_post($wpucs_main_description); ?>   
                    </p>
                    <!-- End Description Text -->

                    <!-- Countdown Timer -->
                    <?php if ($wpucs_countdown_timer_status === 'on') { ?>
                    <div class="ucsm-countdown" id="ucsm-countdown-section">
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="days"
                                style="background-color: #A93A16;  color: #fff; height: 100px; width: 100px; border-radius: 5%; font-size: 50px;">
                                00</span>
                            <span class="ucsm-countdown-label-lite"
                                style="color: #ffffffcc; font-size: 15px;">
                                <?php esc_html_e('Days', 'ultimate-coming-soon'); ?>
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="hours"
                                style="background-color: #B17341;color: #fff;height: 100px; width: 100px; border-radius: 5%; font-size: 50px;">
                                00</span>
                            <span class="ucsm-countdown-label-lite"
                                style="color: #ffffffcc; font-size: 15px;">
                                <?php esc_html_e('Hours', 'ultimate-coming-soon'); ?>
                                
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="minutes"
                                style="background-color: #847540; color: #fff;height: 100px; width: 100px; border-radius: 5%; font-size: 50px;">
                                00</span>
                            <span class="ucsm-countdown-label-lite"
                                style="color: #ffffffcc; font-size: 15px;">
                               <?php esc_html_e('Minutes', 'ultimate-coming-soon'); ?> 
                            </span>
                        </div>
                        <div class="ucsm-countdown-item-lite">
                            <span class="ucsm-countdown-number-lite" id="seconds"
                                style="background-color: #7A4343 ; color: #fff; height: 100px; width: 100px; border-radius: 5%;  font-size: 50px;">
                                00</span>
                            <span class="ucsm-countdown-label-lite"
                                style="color: #ffffffcc; font-size: 15px;">
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

                    <!-- Contact Info  -->
                    <div class="ucsm-contact-info-lite">
                        <ul>
                            <?php if (!empty($wpucs_cf_address)): ?>
                            <li>
                                <div class="icon">
                                        <svg width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.49999 15.8433L11.6247 11.6939C13.9028 9.40235 13.9028 5.68689 11.6247 3.39528C9.34674 1.10368 5.65326 1.10368 3.3752 3.39528C1.09715 5.68689 1.09715 9.40235 3.3752 11.6939L7.49999 15.8433ZM7.49999 18.2143L2.1967 12.8795C-0.732232 9.93307 -0.732232 5.15612 2.1967 2.20977C5.12563 -0.736589 9.87432 -0.736589 12.8033 2.20977C15.7322 5.15612 15.7322 9.93307 12.8033 12.8795L7.49999 18.2143ZM7.49999 9.22119C8.42049 9.22119 9.16665 8.47059 9.16665 7.54461C9.16665 6.61866 8.42049 5.86803 7.49999 5.86803C6.57949 5.86803 5.83333 6.61866 5.83333 7.54461C5.83333 8.47059 6.57949 9.22119 7.49999 9.22119ZM7.49999 10.8978C5.65904 10.8978 4.16666 9.39648 4.16666 7.54461C4.16666 5.69271 5.65904 4.19145 7.49999 4.19145C9.3409 4.19145 10.8333 5.69271 10.8333 7.54461C10.8333 9.39648 9.3409 10.8978 7.49999 10.8978Z" fill="#F58C31"/>
                                        </svg>  
                                    </div>  
                                <p>
                                    <?php echo wp_kses_post($wpucs_cf_address); ?>
                                </p>
                            </li>
                            <?php endif; ?>

                            <?php if (!empty($wpucs_cf_email_address)): ?>
                            <li>
                                <a href="mailto:<?php echo wp_kses_post($wpucs_cf_email_address); ?>">
                                    <div class="icon">
                                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 12.2828C15.9987 12.4725 15.9223 12.654 15.7873 12.7882C15.6523 12.9224 15.4695 12.9985 15.2785 13H2.176C1.98459 12.9998 1.80109 12.9242 1.66581 12.7897C1.53053 12.6552 1.45455 12.4729 1.45455 12.2828V11.5556H14.5455V3.10556L8.72727 8.30556L1.45455 1.80556V0.722222C1.45455 0.530677 1.53117 0.346977 1.66756 0.211534C1.80395 0.076091 1.98893 0 2.18182 0H15.2727C15.4656 0 15.6506 0.076091 15.787 0.211534C15.9234 0.346977 16 0.530677 16 0.722222V12.2828ZM3.22473 1.44444L8.72727 6.36278L14.2298 1.44444H3.22473ZM0 8.66667H5.81818V10.1111H0V8.66667ZM0 5.05556H3.63636V6.5H0V5.05556Z" fill="#F58C31"/>
                                            </svg>
                                        </div>
                                    <p>
                                        <?php echo wp_kses_post($wpucs_cf_email_address); ?>
                                    </p>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (!empty($wpucs_cf_contact_no)): ?>
                            <li>
                                <a href="tel:<?php echo wp_kses_post($wpucs_cf_contact_no); ?>">
                                    <div class="icon">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.305 6.40167C6.08695 7.7754 7.2246 8.91305 8.59833 9.695L9.335 8.66333C9.45346 8.49745 9.62862 8.38073 9.82734 8.33528C10.026 8.28982 10.2345 8.31878 10.4133 8.41667C11.5919 9.06077 12.8935 9.44815 14.2325 9.55333C14.4415 9.56989 14.6365 9.66461 14.7788 9.8186C14.921 9.97259 15 10.1745 15 10.3842V14.1025C15 14.3088 14.9235 14.5078 14.7853 14.661C14.6471 14.8142 14.4569 14.9106 14.2517 14.9317C13.81 14.9775 13.365 15 12.9167 15C5.78333 15 0 9.21667 0 2.08333C0 1.635 0.0225 1.19 0.0683333 0.748333C0.0893788 0.543081 0.18582 0.352934 0.338991 0.214695C0.492163 0.076456 0.691172 -4.44648e-05 0.8975 1.93894e-08H4.61583C4.82547 -2.62654e-05 5.02741 0.0789596 5.1814 0.221209C5.33539 0.363458 5.43011 0.55852 5.44667 0.7675C5.55185 2.10649 5.93923 3.40807 6.58333 4.58667C6.68122 4.76547 6.71018 4.97395 6.66472 5.17266C6.61927 5.37137 6.50255 5.54654 6.33667 5.665L5.305 6.40167ZM3.20333 5.85417L4.78667 4.72333C4.33732 3.75341 4.02946 2.72403 3.8725 1.66667H1.675C1.67 1.805 1.6675 1.94417 1.6675 2.08333C1.66667 8.29667 6.70333 13.3333 12.9167 13.3333C13.0558 13.3333 13.195 13.3308 13.3333 13.325V11.1275C12.276 10.9705 11.2466 10.6627 10.2767 10.2133L9.14583 11.7967C8.69055 11.6198 8.24834 11.4109 7.8225 11.1717L7.77417 11.1442C6.13965 10.2139 4.78607 8.86035 3.85583 7.22583L3.82833 7.1775C3.58909 6.75166 3.38024 6.30945 3.20333 5.85417Z" fill="#F58C31"/>
                                            </svg> 
                                    </div>          
                                    <p>
                                        <?php echo wp_kses_post($wpucs_cf_contact_no); ?>
                                    </p>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if (!empty($wpucs_cf_opening_hours)): ?>
                            <li>
                                <div class="icon">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.5 15C3.35786 15 0 11.6421 0 7.5C0 3.35786 3.35786 0 7.5 0C11.6421 0 15 3.35786 15 7.5C15 11.6421 11.6421 15 7.5 15ZM7.5 13.5C10.8137 13.5 13.5 10.8137 13.5 7.5C13.5 4.18629 10.8137 1.5 7.5 1.5C4.18629 1.5 1.5 4.18629 1.5 7.5C1.5 10.8137 4.18629 13.5 7.5 13.5ZM8.25 7.5H11.25V9H6.75V3.75H8.25V7.5Z" fill="#F58C31"/>
                                    </svg> 
                                </div>
                                <p>
                                    <?php echo wp_kses_post($wpucs_cf_opening_hours); ?>
                                </p>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <!-- ucsm copyright -->
                        <div class="ucsm-copyright">
                            <p><?php esc_html_e('Powered By', 'ultimate-coming-soon'); ?> <a target="__blank" href="https://rstheme.com/"><?php esc_html_e('RSTheme', 'ultimate-coming-soon'); ?></a></p>
                        </div>
                        <!-- End ucsm copyright -->
                    </div>
                    <!-- End Contact Info  -->
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