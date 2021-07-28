<?php
/*
Plugin Name: WP Never Use Admin Email Check
Description: Say "no no no" to WP when it wants to confirm email admin
Version: 1.0
Author URI: https://blog.julien-maury.dev
*/
defined( "ABSPATH" )
    or die( "trying" );
    
// @since 5.3
add_filter( 'admin_email_check_interval', '__return_zero' );