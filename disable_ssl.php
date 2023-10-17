<?php
/*
 * Plugin Name:       Disable SSL
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Disable ssl verification of wp
 * Version:           1.0.0
 * Author:            Lucas Dantas
 * Author URI:        https://github.com/lucassdantas
 * License:           GPL v2 or later
 */
defined('ABSPATH') or die;



add_action('http_api_curl', function($handle) {
	curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
});