<?php
/**
 * Plugin Name: Use WP URL for REST URL
 * Plugin URI: https://github.com/gibso/wordpress-rest-url
 * Description:  This plugin uses for the rest api url links the wordpress url instead of the home url
 * Version: 0.0.1
 * Author: Oliver Görtz
 */
add_filter('rest_url', 'use_site_url_for_rest_url');

function use_site_url_for_rest_url($url)
{
    $home_url = get_bloginfo('url');
    $site_url = get_bloginfo('wpurl');
    $url = str_replace($home_url, $site_url, $url);
    return $url;
}