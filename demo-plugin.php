<?php
/*
Plugin Name: Demo Plugin
Plugin URI: https://www.jessenickles.com/plugins/demo-plugin
Description: Demo plugin for WordPress
Version: 1.0.0
Requires PHP: 7.0
Author: Jesse Nickles
Author URI: https://www.jessenickles.com
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: jessuppi/demo-plugin
Primary Branch: main
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// disable wordpress.org updates for this plugin
add_filter( 'gu_override_dot_org', 'demo_plugin_disable_wporg_updates', 999 );
function demo_plugin_disable_wporg_updates( $overrides ) {
    $overrides[] = 'demo-plugin/demo-plugin.php';
    return $overrides;
}

// display a non-dismissible yellow admin notice
add_action( 'admin_notices', 'demo_plugin_admin_notice' );
function demo_plugin_admin_notice() {
    echo '<div class="notice notice-warning"><p>';
    esc_html_e( 'This is a demo admin notice from Demo Plugin', 'demo-plugin' );
    echo '</p></div>';
}

// Ref: ChatGPT
