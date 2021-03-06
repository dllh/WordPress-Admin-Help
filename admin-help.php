<?php
/**
 *
 * @package   Admin_Help
 * @author    Chris Reynolds <me@chrisreynolds.io>
 * @license   GPLv3
 * @link      http://make.wordpress.org/docs/tag/admin-help/
 * @copyright 2013 Admin Help Team
 *
 * @wordpress-plugin
 * Plugin Name:       Admin Help
 * Plugin URI:        http://wordpress.org
 * Description:       Redefining help in the WordPress admin. A feature plugin intended for WordPress 3.9
 * Version:           1.0.0
 * Author:            The WordPress Admin Help Team led by Chris Reynolds
 * Author URI:        http://chrisreynolds.io/
 * Text Domain:       admin-help-locale
 * License:           GPLv3
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/jazzsequence/WordPress-Admin-Help
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-admin-help.php' );
require_once( plugin_dir_path( __FILE__ ) . 'class-admin-help-admin.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Admin_Help', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Admin_Help', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Admin_Help', 'get_instance' ) );
add_action( 'plugins_loaded', array( 'Admin_Help_Admin', 'get_instance' ) );