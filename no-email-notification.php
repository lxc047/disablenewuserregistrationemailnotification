<?php 
/* 
Plugin Name: Block New User Email Notification 
Plugin URI: http://www.dhaulagiriit.com.np/ 
Description: Prevent sending email notifications to newely registered users 
Author: Dhaulagiri IT
Version: 1
*/
// disable all new user notification email
if ( ! function_exists( 'wp_new_user_notification' ) ) : 
function wp_new_user_notification( $user_id, $deprecated = null, $notify = '' ) { 
	return; 
} 
endif;