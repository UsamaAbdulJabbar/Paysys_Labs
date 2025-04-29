<?php
    if (!defined('ABSPATH')) exit;

    require_once UCSM_PLUGIN_DIR_LITE . 'backend/essential-variables.php';

    // Enqueue styles and scripts
    add_action('wp_enqueue_scripts', 'ucsm_enqueue_assets');

    function ucsm_enqueue_assets() {
        $plugin_version = defined('UCSM_VERSION_LITE') ? UCSM_VERSION_LITE : '1.0.0';
        $plugin_url = trailingslashit(UCSM_PLUGIN_URL_LITE);

        // Enqueue styles
        wp_enqueue_style('ucsm-style', $plugin_url . 'templates/comingsoon25/style.css', array(), $plugin_version);
        wp_enqueue_style('ucsm-font-family', $plugin_url . 'assets/css/wpucs_font_family_frontend.css', array(), $plugin_version);
        wp_enqueue_style('ucsm-remixicon', $plugin_url . 'assets/css/remixicon.css', array(), $plugin_version);
    }

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
        
        <?php if (!empty($wpucs_seo_title)): ?>
        <meta property="og:title" content="<?php echo wp_kses_post($wpucs_seo_title); ?>" />
        <?php endif; ?>

        <?php if (!empty($wpucs_seo_description)): ?>
        <meta property="og:description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>">
        <meta name="description" content="<?php echo wp_kses_post($wpucs_seo_description); ?>">   
        <?php endif; ?>

        <?php if (!empty($wpucs_favicon)): ?>
        <meta name="thumbnail" content="<?php echo esc_url($wpucs_favicon); ?>">
        <?php endif; ?>
        
        <?php if (!empty($wpucs_seo_img)): ?>
        <meta property="og:image" content="<?php echo esc_url($wpucs_seo_img); ?>">
        <?php endif; ?>

        <?php if (!empty($wpucs_seo_meta_keywords)): ?>
        <meta name="keywords" content="<?php echo wp_kses_post($wpucs_seo_meta_keywords); ?>">
        <?php endif; ?>

        <?php if ($ucsm_mode === 'maintenance') : ?>
        <meta name="robots" content="noindex, nofollow">
        <?php endif; ?>

        <?php wp_head(); ?>

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
        <!--  Container  -->
        <div style="background-color: <?php echo wp_kses_post($wpucs_background_color_rgba); ?>; background-image: url('<?php echo esc_url($wpucs_background_image); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; min-height: 100vh;">
            <div class="ucsm-container">
                
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
                    <p class="ucsm-description" style="color: #fff; font-size: 22px; line-height: 36px;">
                        <?php echo wp_kses_post($wpucs_main_description); ?>   
                    </p>
                    <!-- End Description Text -->
                </div>
                <!-- End Main Content -->
                <!-- start image box -->
                <div class="shape-image">
                    <img src="<?php echo esc_url($wpucs_shape_overlay); ?>" alt="">
                </div>
                <!-- End image box -->
                <div class="ucsm-copyright">
                    <p>Powered By <a target="__blank" href="https://rstheme.com/">RSTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Container    -->
    </body>
    <!-- End Body -->

</html>
<!--End HTML -->