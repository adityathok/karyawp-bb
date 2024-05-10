<?php
/**
 * @wordpress-plugin
 * Plugin Name:       KaryaWP Beaver Builder
 * Plugin URI:        https://github.com/adityathok/karyawp-bb
 * Description:       KaryaWP Addons Beaver Builder
 * Version:           0.0.1
 * Author:            Aditya Thok
 * Author URI:        https://github.com/adityathok/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       karyawp-bb
 * Domain Path:       /languages
 * 
 * 
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Define constants
 */
define('KARYAWPBB_VERSION', '0.0.1'); // Plugin version constant
define('KARYAWPBB_PLUGIN_DIR', plugin_dir_path(__FILE__)); // Plugin directory absolute path with the trailing slash. Useful for using with includes eg - /var/www/html/wp-content/plugins/karyawp-bb/
define('KARYAWPBB_PLUGIN_URL', plugin_dir_url(__FILE__)); // URL to the plugin folder with the trailing slash. Useful for referencing src eg - http://localhost/wp/wp-content/plugins/karyawp-bb/

function karyawpbb_load_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        $modules = [
            'karyawpbb-imagecarousel',
        ];        
        foreach ($modules as $module) {
            require_once(KARYAWPBB_PLUGIN_DIR . 'modules/'.$module.'/'.$module.'.php');
        }
    }
}
add_action( 'init', 'karyawpbb_load_module' );
