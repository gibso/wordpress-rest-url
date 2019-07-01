<?php
/**
 * Plugin Name: Standalone Frontend Site Url Extension
 * Plugin URI: https://github.com/gibso/wordpress-rest-url
 * Description: This plugin replaces in several links the Home Url with the Site Url. When only the Wordpress REST API is used by a standalone frontend service, e.g. links for assets and feeds have to be the Wordpress Url, while links to rendered posts have to use the frontend service Url.
 * Version: 0.0.1
 * Author: Oliver Görtz
 */

add_filter('rest_url', 'replace_home_url_with_site_url');
add_filter('feed_link', 'replace_home_url_with_site_url');
add_filter('podlove_enclosure_url', 'replace_home_url_with_site_url');
add_filter('podlove_image_url', 'replace_home_url_with_site_url');

function replace_home_url_with_site_url($url)
{
    return str_replace(home_url(), site_url(), $url);
}