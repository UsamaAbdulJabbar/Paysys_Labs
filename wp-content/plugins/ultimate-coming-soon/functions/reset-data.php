<?php if ( ! defined( 'ABSPATH' ) ) exit;
// Function to save the activated template ID
function ucsm_save_activated_template_id_lite($templateId) {
    $currentTemplateId = get_option('activated_template_id');

    // Check if the template ID has changed
    if ($templateId != $currentTemplateId) {
        // Template ID has changed, reset the defaults_set flag
        update_option('wpucs_defaults_set', false);
    }

    // Update the activated template ID
    update_option('activated_template_id', $templateId);

    // After saving the template, update the default values based on the new template ID (only on the first run)
    ucsm_update_default_values_based_on_template_once_lite($templateId);
}

// Example usage when saving a template
$activatedTemplateId = get_option('activated_template_id');
// Replace with the actual template ID you want to save
ucsm_save_activated_template_id_lite($activatedTemplateId);

      //Reset Function
      // Function to reset options for the 'dashboard' tab
      function ucsm_reset_dashboard_tab_lite(){   
        
        $wpucs_dashboard_reset_nonce = wp_create_nonce('wpucs_dashboard_reset_nonce');
        
        ?>
          <input type="hidden" name="wpucs_dashboard_reset_nonce_field" value="<?php echo esc_attr($wpucs_dashboard_reset_nonce); ?>">
        <?php        
        
 
      }
      // Function to reset options for the 'dashboard' tab
      function ucsm_reset_content_tab_lite(){   
        
        $wpucs_content_reset_nonce = wp_create_nonce('wpucs_content_reset_nonce');
        $activatedTemplateId = get_option('activated_template_id');
        ?>
          <input type="hidden" name="wpucs_content_reset_nonce_field" value="<?php echo esc_attr($wpucs_content_reset_nonce); ?>">
        <?php

        update_option('wpucs_main_heading', 'We Are');
        update_option('wpucs_sub_heading', 'Coming Very Soon!');
        update_option('wpucs_main_description', 'We will let you know when we are Launching');
        
        if ( $activatedTemplateId == 13) {  
              update_option('wpucs_main_heading', 'We Are');
              update_option('wpucs_sub_heading', 'Coming Soon! ');
              
        }elseif ( $activatedTemplateId == 16 ) {
              update_option('wpucs_main_heading', 'We Are Coming ');
              update_option('wpucs_sub_heading', 'Soon! ');
              
        }elseif ( $activatedTemplateId == 25 ) {
          update_option('wpucs_main_heading', 'IS UNDER');
          update_option('wpucs_sub_heading', 'CONSTRUCTION ');
          update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
              
        }elseif ( $activatedTemplateId == 26 ) {
          update_option('wpucs_main_heading', 'Our Website Now');
          update_option('wpucs_sub_heading', 'Under Construction ');
          update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
              
        }elseif ( $activatedTemplateId == 27 ) {
          update_option('wpucs_main_heading', 'We\'re  Down For Maintenance ');
            
          update_option('wpucs_main_description', 'We Will Be Back Soon');
              
        }elseif ( $activatedTemplateId == 28 ) {
          update_option('wpucs_main_heading', 'Website Down For Maintenance ');
          update_option('wpucs_sub_heading', 'We Will Be Back Soon');
          update_option('wpucs_main_description', 'Hide your website until it\'s ready. Create an eye-catching Coming Soon & Maintenance Mode page with our easy-to-use. Super fast and user-friendly WP plugin in minutes.');
              
        }else {
              
        } 
      }
      
      // Function to reset options for the 'Apperance' tab
      function ucsm_reset_design_tab_lite(){
          $wpucs_design_reset_nonce = wp_create_nonce('wpucs_design_reset_nonce');
          $activatedTemplateId = get_option('activated_template_id');
            
          ?>
            <input type="hidden" name="wpucs_design_reset_nonce_field" value="<?php echo esc_attr($wpucs_design_reset_nonce); ?>">
          <?php
          // Update the options for the 'Apperance' tab here default value
            
          update_option('wpucs_background_color', '#0f44ae');
          update_option('wpucs_background_color_rgba', 'rgb(15, 68, 174)');
          update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE.'assets/img/background/background-0.jpg');
          $site_favicon_url = get_site_icon_url();
          $site_title = get_bloginfo('name');
          $site_icon_url = get_site_icon_url();
          update_option('wpucs_website_text_logo', $site_title);
          update_option('wpucs_logo_setup', 'text');
              
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
          // Update the options for the 'Apperance' tab here in individual activatedTemplateId        
          if ($activatedTemplateId == 13) {
                
                update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-13.jpg');
                update_option('wpucs_background_color', '#020925' );
                update_option('wpucs_background_color_rgba', 'rgb(2, 9, 37)');
                // Website Logo
                if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo1.png');
                }


          }elseif ($activatedTemplateId == 16) {
                update_option('wpucs_background_color', '#4f220b' );
                update_option('wpucs_background_color_rgba', 'rgb(79, 34, 11)');
                update_option('wpucs_background_image', UCSM_PLUGIN_URL_LITE . 'assets/img/background/background-16.jpg');
                // Website Logo
                if ($site_icon_url) {
                    update_option('wpucs_website_logo', $site_icon_url);
                } else {
                    // If no site icon is set, you can set a default or handle accordingly
                    update_option('wpucs_website_logo', UCSM_PLUGIN_URL_LITE . 'assets/img/icon/logo16.png');
                }

          }else{

          }
      }
      // Function to reset options for the 'social' tab
      function ucsm_reset_social_tab_lite(){
        $wpucs_social_reset_nonce = wp_create_nonce('wpucs_social_reset_nonce');
          ?>
            <input type="hidden" name="wpucs_social_reset_nonce_field" value="<?php echo esc_attr($wpucs_social_reset_nonce); ?>">
          <?php
      }
      // Function to reset options for the 'Contact Info' tab
      function ucsm_reset_contact_info_tab_lite(){   
        $wpucs_contact_info_reset_nonce = wp_create_nonce('wpucs_contact_info_reset_nonce');   
        ?>
          <input type="hidden" name="wpucs_contact_info_reset_nonce_field" value="<?php echo esc_attr($wpucs_contact_info_reset_nonce); ?>">
        <?php
      }
      // Function to reset options for the 'CountDown Timer' tab
      function ucsm_reset_countdown_timer_tab_lite(){
        $wpucs_countdown_timer_reset_nonce = wp_create_nonce('wpucs_countdown_timer_reset_nonce');
        
        ?>
          <input type="hidden" name="wpucs_countdown_timer_reset_nonce_field" value="<?php echo esc_attr($wpucs_countdown_timer_reset_nonce); ?>">
        <?php
          // Update the options for the 'countdown_timer' tab here
          update_option('wpucs_countdown_timer_status', 'on');
          update_option('wpucs_countdown_date', '2025-12-31T12:00');
      }

      // Function to reset options for the 'Newsletter' tab
      function ucsm_reset_newsletter_tab_lite(){
        $wpucs_newsletter_nonce = wp_create_nonce('wpucs_newsletter_nonce');
        
        ?>
          <input type="hidden" name="wpucs_newsletter_nonce_field" value="<?php echo esc_attr($wpucs_newsletter_nonce); ?>">
        <?php
        // Update the options for the 'countdown_timer' tab here
        update_option('wpucs_newsletter_status', 'on');
        update_option('wpucs_client_email', '1');
      }   

      // Function to reset options for the 'seo' tab
      function ucsm_reset_seo_tab_lite(){
        $wpucs_seo_reset_nonce = wp_create_nonce('wpucs_seo_reset_nonce');
        ?>
          <input type="hidden" name="wpucs_seo_reset_nonce_field" value="<?php echo esc_attr($wpucs_seo_reset_nonce); ?>">
        <?php  
      }