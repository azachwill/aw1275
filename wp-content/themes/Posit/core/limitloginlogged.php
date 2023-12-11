<?php
//Daily purge for the logs for the Limit Login Plugin  
if (!wp_next_scheduled('limitloginlogged_hook')) {
    wp_schedule_event( time(), 'daily', 'limitloginlogged_hook' );
    }
    add_action ( 'limitloginlogged_hook', 'limitloginlogged' );
    function limitloginlogged() {

            // Bootstrap WordPress.
        //    require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';
            global $wpdb;
            // 
            $wpdb->update('wp_options', array('option_value' => 'a:0:{}'), array('option_name' => 'limit_login_logged'));
          
    //wp_mail( 'andrew.williams@posit.co', 'Limit Login Logged', 'Updated!' );
    } 

//stop enumeration:
if (!is_admin()) {
    // default URL format
    if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die(); add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
    }
    function shapeSpace_check_enum($redirect, $request) {
    // permalink URL format
    if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die(); else return $redirect;
    }
 