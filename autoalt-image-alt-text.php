<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Jerick97
 * @since             1.0.0
 * @package           Autoalt_Image_Alt_Text
 *
 * @wordpress-plugin
 * Plugin Name:       AutoAlt
 * Plugin URI:        https://www.ludik.pe
 * Description:       AutoAlt autocompleta automáticamente los atributos ALT de tus imágenes en WordPress, mejorando la accesibilidad y el SEO de tu sitio sin esfuerzo.
 * Version:           1.0.0
 * Author:            Jerick
 * Author URI:        https://github.com/Jerick97/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autoalt-image-alt-text
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
define( 'AUTOALT_IMAGE_ALT_TEXT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-autoalt-image-alt-text-activator.php
 */
function activate_autoalt_image_alt_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autoalt-image-alt-text-activator.php';
	Autoalt_Image_Alt_Text_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-autoalt-image-alt-text-deactivator.php
 */
function deactivate_autoalt_image_alt_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-autoalt-image-alt-text-deactivator.php';
	Autoalt_Image_Alt_Text_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_autoalt_image_alt_text' );
register_deactivation_hook( __FILE__, 'deactivate_autoalt_image_alt_text' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-autoalt-image-alt-text.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_autoalt_image_alt_text() {

	$plugin = new Autoalt_Image_Alt_Text();
	$plugin->run();

}
run_autoalt_image_alt_text();
