<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/mnb3060/mnbwp
 * @since             1.0.0
 * @package           Mnb_Helper
 *
 * @wordpress-plugin
 * Plugin Name:       MNB
 * Plugin URI:        https://github.com/mnb3060/mnbwp
 * Description:       a handy tool for me!
 * Version:           1.0.0
 * Author:            mnb
 * Author URI:        https://github.com/mnb3060/mnbwp/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mnb-helper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MNB_HELPER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mnb-helper-activator.php
 */
function activate_mnb_helper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mnb-helper-activator.php';
	Mnb_Helper_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mnb-helper-deactivator.php
 */
function deactivate_mnb_helper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mnb-helper-deactivator.php';
	Mnb_Helper_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mnb_helper' );
register_deactivation_hook( __FILE__, 'deactivate_mnb_helper' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mnb-helper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mnb_helper() {

	$plugin = new Mnb_Helper();
	$plugin->run();

}
run_mnb_helper();
