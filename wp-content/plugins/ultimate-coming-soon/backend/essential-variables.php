<?php if ( ! defined( 'ABSPATH' ) ) exit;

	// Dashboard
	$ucsm_mode = get_option('ucsm_mode', '');
	$wpucs_enable_mode = get_option('wpucs_enable_mode', false);
	$wpucs_main_heading = get_option('wpucs_main_heading', '');
	$wpucs_redirect_mode_url = get_option('wpucs_redirect_mode_url', '');
	$ucsm_page_setup = get_option('ucsm_page_setup', '');
	$wpucs_main_description = get_option('wpucs_main_description', '');
	$wpucs_website_logo = get_option('wpucs_website_logo', '');
	$wpucs_website_text_logo = get_option('wpucs_website_text_logo', '');
	$wpucs_logo_setup = get_option('wpucs_logo_setup', '');
	$wpucs_website_url = get_option('wpucs_website_url', '');
	//SEO
	$wpucs_seo_title = get_option('wpucs_seo_title', '');
	$wpucs_seo_description = get_option('wpucs_seo_description', '');
	$wpucs_seo_meta_keywords = get_option('wpucs_seo_meta_keywords', '');
	$wpucs_google_analytics = get_option('wpucs_google_analytics', '');
	$wpucs_favicon = get_option('wpucs_favicon', '');
	$wpucs_seo_img = get_option('wpucs_seo_img', '');
	$wpucs_sub_heading = get_option('wpucs_sub_heading', '');
	$wpucs_sub_heading_color = get_option('wpucs_sub_heading_color', '');
	$wpucs_sub_heading_font_size = get_option('wpucs_sub_heading_font_size', '');
	$wpucs_sub_heading_color_rgba = get_option('wpucs_sub_heading_color_rgba', '');
	//Design
	$wpucs_shape_overlay = get_option('wpucs_shape_overlay', '');
	$wpucs_background_image =get_option('wpucs_background_image', '');
	$wpucs_background_color =get_option('wpucs_background_color', '');
	$wpucs_background_color_rgba =get_option('wpucs_background_color_rgba', '');
	$wpucs_background_overlay_color =get_option('wpucs_background_overlay_color', '');
	$wpucs_background_overlay_color_rgba =get_option('wpucs_background_overlay_color_rgba', '');	
	$wpucs_main_heading_color = get_option('wpucs_main_heading_color', '');
	$wpucs_main_description_color = get_option('wpucs_main_description_color', '');
	$wpucs_main_heading_font_size = get_option('wpucs_main_heading_font_size', '');
	$wpucs_main_description_font_size = get_option('wpucs_main_description_font_size', '');
	$wpucs_main_heading_color_rgba = get_option('wpucs_main_heading_color_rgba', '');	
	$wpucs_main_description_color_rgba = get_option('wpucs_main_description_color_rgba', '');
	$wpucs_website_text_logo_height = get_option('wpucs_website_text_logo_height','');
	$wpucs_website_text_logo_color = get_option('wpucs_website_text_logo_color','');
	$wpucs_website_text_logo_color_rgba = get_option('wpucs_website_text_logo_color_rgba','');
	//Social
	$wpucs_social_facebook = get_option('wpucs_social_facebook', '');
	$wpucs_social_twitter = get_option('wpucs_social_twitter', '');
	$wpucs_social_instagram = get_option('wpucs_social_instagram', '');
	$wpucs_social_linkedin = get_option('wpucs_social_linkedin', '');
	$wpucs_social_youtube = get_option('wpucs_social_youtube', '');
	$wpucs_email_address_insert = get_option('wpucs_email_address_insert', '');
	$wpucs_email_address_list = get_option('wpucs_email_address_list', '');
	$wpucs_email_address_valid = get_option('wpucs_email_address_valid', '');
	$wpucs_email_address_successful = get_option('wpucs_email_address_successful', '');
	$wpucs_scroll = get_option('wpucs_scroll', '');
	$wpucs_terms = get_option('wpucs_terms', '');
	$wpucs_email_empty = get_option('wpucs_email_empty', '');
	$wpucs_subscribe = get_option('wpucs_subscribe', '');
	//Contact info
	$wpucs_cf_address = get_option('wpucs_cf_address', '');
	$wpucs_cf_contact_no = get_option('wpucs_cf_contact_no', '');
	$wpucs_cf_email_address = get_option('wpucs_cf_email_address', '');
	$wpucs_cf_opening_hours = get_option('wpucs_cf_opening_hours', '');
	$wpucs_contact_form_heading = get_option('wpucs_contact_form_heading', '');
	$wpucs_contact_form_heading_color = get_option('wpucs_contact_form_heading_color', '');
	$wpucs_contact_form_heading_size = get_option('wpucs_contact_form_heading_size', '');
	$wpucs_contact_form_heading_color_rgba = get_option('wpucs_contact_form_heading_color_rgba', '');
	// wpucs_contact_info_background
	$wpucs_contact_info_color = get_option('wpucs_contact_info_color', '');
	$wpucs_contact_info_color_rgba = get_option('wpucs_contact_info_color_rgba', '');
	$wpucs_contact_info_fontawesome_color = get_option('wpucs_contact_info_fontawesome_color', '');
	$wpucs_contact_info_fontawesome_color_rgba = get_option('wpucs_contact_info_fontawesome_color_rgba', '');
	$wpucs_contact_info_border_color = get_option('wpucs_contact_info_border_color', '');
	$wpucs_contact_info_border_color_rgba = get_option('wpucs_contact_info_border_color_rgba', '');
	$wpucs_contact_info_height = get_option('wpucs_contact_info_height', '');
	$wpucs_contact_info_background = get_option('wpucs_contact_info_background', '');
	//Countdown Timer
	$wpucs_countdown_timer_status = get_option('wpucs_countdown_timer_status', '');
	$wpucs_time_zone = get_option('wpucs_time_zone', 'UTC');
	$wpucs_export_format = get_option('wpucs_export_format', '');
	$wpucs_countdown_settings_type = get_option('wpucs_countdown_settings_type','');
	$wpucs_countdown_date = get_option('wpucs_countdown_date','');
	$wpucs_countdown_text = get_option('wpucs_countdown_text', '');
	$wpucs_countdown_text_color = get_option('wpucs_countdown_text_color', '');
	$wpucs_countdown_text_color_rgba = get_option('wpucs_countdown_text_color_rgba','');
	$wpucs_countdown_text_font_size = get_option('wpucs_countdown_text_font_size','');
	$wpucs_countdown_dayvalue_font_size = get_option('wpucs_countdown_dayvalue_font_size','');
	//countdown timer off
	$wpucs_countdown_heading_color = get_option('wpucs_countdown_heading_color', '');
	$wpucs_countdown_heading = get_option('wpucs_countdown_heading', '');
	$wpucs_countdown_message_color_rgba = get_option('wpucs_countdown_message_color_rgba','');
	$wpucs_countdown_heading_color_rgba = get_option('wpucs_countdown_heading_color_rgba','');
	$wpucs_countdown_message_color = get_option('wpucs_countdown_message_color','');
	$wpucs_countdown_message = get_option('wpucs_countdown_message','');
	$wpucs_countdown_heading_size = get_option('wpucs_countdown_heading_size','');
	$wpucs_countdown_message_size = get_option('wpucs_countdown_message_size','');
	// inner BOX 
	$wpucs_inner_box_height = get_option('wpucs_inner_box_height','');
	$wpucs_inner_box_width = get_option('wpucs_inner_box_width','');
	$wpucs_inner_box_border_radius = get_option('wpucs_inner_box_border_radius','');
	
	$wpucs_countdown_timerlevel_fontsize = get_option('wpucs_countdown_timerlevel_fontsize','');
	$wpucs_countdown_timervalue_fontsize = get_option('wpucs_countdown_timervalue_fontsize','');
	// text Input
	$wpucs_countdown_days_text = get_option('wpucs_countdown_days_text','');
	$wpucs_countdown_hours_text = get_option('wpucs_countdown_hours_text','');
	$wpucs_countdown_minutes_text = get_option('wpucs_countdown_minutes_text','');
	$wpucs_countdown_seconds_text = get_option('wpucs_countdown_seconds_text','');
	// Days Color
	$wpucs_countdown_days_innerbox_color = get_option('wpucs_countdown_days_innerbox_color','');
	$wpucs_countdown_days_timervalue_color = get_option('wpucs_countdown_days_timervalue_color','');
	$wpucs_countdown_days_timerlevel_color = get_option('wpucs_countdown_days_timerlevel_color','');
	$wpucs_countdown_days_timervalue_color_rgba = get_option('wpucs_countdown_days_timervalue_color_rgba', '');
	$wpucs_countdown_days_timerlevel_color_rgba = get_option('wpucs_countdown_days_timerlevel_color_rgba', '');
	$wpucs_countdown_days_innerbox_color_rgba = get_option('wpucs_countdown_days_innerbox_color_rgba', '');
	// Hours Color
	$wpucs_countdown_hours_innerbox_color = get_option('wpucs_countdown_hours_innerbox_color','');
	$wpucs_countdown_hours_timervalue_color = get_option('wpucs_countdown_hours_timervalue_color','');
	$wpucs_countdown_hours_timerlevel_color = get_option('wpucs_countdown_hours_timerlevel_color','');
	$wpucs_countdown_hours_timervalue_color_rgba = get_option('wpucs_countdown_hours_timervalue_color_rgba', '');
	$wpucs_countdown_hours_timerlevel_color_rgba = get_option('wpucs_countdown_hours_timerlevel_color_rgba', '');
	$wpucs_countdown_hours_innerbox_color_rgba = get_option('wpucs_countdown_hours_innerbox_color_rgba', '');
	// Minutes Color
	$wpucs_countdown_minutes_innerbox_color = get_option('wpucs_countdown_minutes_innerbox_color','');
	$wpucs_countdown_minutes_timervalue_color = get_option('wpucs_countdown_minutes_timervalue_color','');
	$wpucs_countdown_minutes_timerlevel_color = get_option('wpucs_countdown_minutes_timerlevel_color','');
	$wpucs_countdown_minutes_timervalue_color_rgba = get_option('wpucs_countdown_minutes_timervalue_color_rgba', '');
	$wpucs_countdown_minutes_timerlevel_color_rgba = get_option('wpucs_countdown_minutes_timerlevel_color_rgba', '');
	$wpucs_countdown_minutes_innerbox_color_rgba = get_option('wpucs_countdown_minutes_innerbox_color_rgba', '');
	// Seconds Color
	$wpucs_countdown_seconds_innerbox_color = get_option('wpucs_countdown_seconds_innerbox_color','');
	$wpucs_countdown_seconds_timervalue_color = get_option('wpucs_countdown_seconds_timervalue_color','');
	$wpucs_countdown_seconds_timerlevel_color = get_option('wpucs_countdown_seconds_timerlevel_color','');
	$wpucs_countdown_seconds_timervalue_color_rgba = get_option('wpucs_countdown_seconds_timervalue_color_rgba', '');
	$wpucs_countdown_seconds_timerlevel_color_rgba = get_option('wpucs_countdown_seconds_timerlevel_color_rgba', '');
	$wpucs_countdown_seconds_innerbox_color_rgba = get_option('wpucs_countdown_seconds_innerbox_color_rgba', '');
	$wpucs_countdown_box_border_color = get_option('wpucs_countdown_box_border_color', '');
	$wpucs_countdown_box_border_color_rgba = get_option('wpucs_countdown_box_border_color_rgba', '');
	// New variables for checkboxes
	$wpucs_newsletter_status = get_option('wpucs_newsletter_status', '');
	$wpucs_client_email = get_option('wpucs_client_email', '');
	$wpucs_client_name = get_option('wpucs_client_name', '');
	$wpucs_client_mobile = get_option('wpucs_client_mobile', '');
	$wpucs_client_address = get_option('wpucs_client_address', '');
	$wpucs_client_message = get_option('wpucs_client_message', '');
	$wpucs_subscription_text = get_option('wpucs_subscription_text', '');
	$wpucs_subscription_text_color = get_option('wpucs_subscription_text_color', '');
	$wpucs_subscription_text_color_rgba = get_option('wpucs_subscription_text_color_rgba', '');
	$wpucs_subscription_text_height = get_option('wpucs_subscription_text_height','');
	$wpucs_subscription_button_background_color = get_option('wpucs_subscription_button_background_color', '');
	$wpucs_subscription_button_text_color = get_option('wpucs_subscription_button_text_color', '');
	$wpucs_subscription_button_background_color_rgba = get_option('wpucs_subscription_button_background_color_rgba', '');
	$wpucs_subscription_button_text_color_rgba = get_option('wpucs_subscription_button_text_color_rgba', '');	
	$wpucs_subscription_button_background_hover_color = get_option('wpucs_subscription_button_background_hover_color', '');
	$wpucs_subscription_button_text_hover_color = get_option('wpucs_subscription_button_text_hover_color', '');
	$wpucs_subscription_button_background_hover_color_rgba = get_option('wpucs_subscription_button_background_hover_color_rgba', '');
	$wpucs_subscription_button_text_hover_color_rgba = get_option('wpucs_subscription_button_text_hover_color_rgba', '');
	$wpucs_box_container_size = get_option('wpucs_box_container_size', '');
?>