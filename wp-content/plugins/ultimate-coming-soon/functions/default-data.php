<?php if ( ! defined( 'ABSPATH' ) ) exit;

function ucsm_update_default_values_based_on_template_once_lite($activatedTemplateId) {
    // Check if the defaults have been set previously
    $defaults_set = get_option('wpucs_defaults_set', false);

    if (!$defaults_set || $activatedTemplateId != get_option('last_activated_template_id')) {
  
      //Content
      update_option('wpucs_main_heading', 'We Are');
      update_option('wpucs_sub_heading', 'Coming Very Soon! ');
      update_option('wpucs_main_description', 'We will let you know when we are Launching');
      
      //Appearance
      update_option('wpucs_logo_setup', 'text');
      update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE.'assets/img/background/background-0.jpg');
      update_option('wpucs_background_color', '#0f44ae');
      update_option('wpucs_background_color_rgba', 'rgb(15, 68, 174)');
      
      //Newsletter
      update_option('wpucs_newsletter_status', 'on');
      update_option('wpucs_client_email', '1');

      //countdown
      update_option('wpucs_countdown_timer_status', 'on');
      update_option('wpucs_countdown_date', '2025-12-31T12:00');

      //SEO
      $site_title = get_bloginfo('name');
      $site_icon_url = get_site_icon_url();
      $site_favicon_url = get_site_icon_url();
      $site_seo_url = get_site_icon_url();
      update_option('wpucs_website_text_logo', $site_title);
      
      // Website Logo
      if ($site_icon_url) {
          update_option('wpucs_website_logo', $site_icon_url);
      } else {
          // If no site icon is set, you can set a default or handle accordingly
          update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo5.png');
      }

      // Website FAVICON
      if ($site_favicon_url) {
          update_option('wpucs_favicon', $site_favicon_url);
      } else {
          // If no site icon is set, you can set a default or handle accordingly
          update_option('wpucs_favicon', UCSM_PLUGIN_URL_LITE.'assets/img/icon/favicon.png');
      }

      // Website SEO Image
      if ($site_seo_url) {
          update_option('wpucs_seo_img', $site_seo_url);
      } else {
          // If no site icon is set, you can set a default or handle accordingly
          update_option('wpucs_seo_img', UCSM_PLUGIN_URL_LITE.'assets/img/icon/favicon.png');
      }
      
      if ($activatedTemplateId == 0) {
            update_option('wpucs_enable_mode', '0');
            update_option('ucsm_mode', 'coming_soon');
            update_option('ucsm_page_setup', 'whole-website');
            update_option('wpucs_main_heading', 'We Are');
            update_option('wpucs_sub_heading', 'Coming Very Soon!');

      } elseif ( $activatedTemplateId == 13) {
            //dashborad
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'We Are');
            update_option('wpucs_sub_heading', 'Coming Soon! ');
            
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-13.jpg');
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo1.png');
            }


            update_option('wpucs_background_color', '#020925' );
            update_option('wpucs_background_color_rgba', 'rgb(2, 9, 37)');
 
      } elseif ( $activatedTemplateId == 16) {
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'We Are Coming ');
            update_option('wpucs_sub_heading', 'Soon! ');
            // design
            
            update_option('wpucs_background_color', '#4f220b' );
            update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-16.jpg');
            
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo5.png');
            }
      }elseif ( $activatedTemplateId == 25) {
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'IS UNDER');
            update_option('wpucs_sub_heading', 'CONSTRUCTION ');
            update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            // design
            
            update_option('wpucs_background_color', '#4f220b' );
            update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-25.jpg');
            update_option('wpucs_shape_overlay', UCSM_PLUGIN_URL_LITE . 'assets/img/background/shape-25.png');
            
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo25.png');
            }
      }elseif ( $activatedTemplateId == 26) {
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'Our Website Now');
            update_option('wpucs_sub_heading', 'Under Construction ');
            update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            // design
            
            update_option('wpucs_background_color', '#4f220b' );
            update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-26.jpg');
            update_option('wpucs_shape_overlay', UCSM_PLUGIN_URL_LITE . 'assets/img/background/shape-26.png');
            
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo26.png');
            }
      }elseif ( $activatedTemplateId == 27) {
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'We\'re  Down For Maintenance ');
            
            update_option('wpucs_main_description', 'We Will Be Back Soon');
            // design
            
            update_option('wpucs_background_color', '#4f220b' );
            update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-27.jpg');
            update_option('wpucs_shape_overlay', UCSM_PLUGIN_URL_LITE . 'assets/img/background/shape-27.png');
            
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo27.png');
            }
      }elseif ( $activatedTemplateId == 28) {
            update_option('wpucs_enable_mode', '1');
            update_option('wpucs_main_heading', 'Website Down For Maintenance ');
            update_option('wpucs_sub_heading', 'We Will Be Back Soon');
            update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
            // design
            update_option('wpucs_background_color', '#4f220b' );
            update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
            update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-28.jpg');
            update_option('wpucs_shape_overlay', UCSM_PLUGIN_URL_LITE . 'assets/img/background/shape-28.png');
            
            // Website Logo
            if ($site_icon_url) {
                update_option('wpucs_website_logo', $site_icon_url);
            } else {
                // If no site icon is set, you can set a default or handle accordingly
                update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo28.png');
            }
      } else {
            // Handle other templates or provide a default option
            // You can add logic here for handling other template IDs
      }

      // Set the flag to indicate that defaults have been set

      update_option('wpucs_defaults_set', true);
      update_option('last_activated_template_id', $activatedTemplateId);
    }
}


require_once ('reset-data.php');
