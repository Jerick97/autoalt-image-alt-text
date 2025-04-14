<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/Jerick97
 * @since      1.0.0
 *
 * @package    Autoalt_Image_Alt_Text
 * @subpackage Autoalt_Image_Alt_Text/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Autoalt_Image_Alt_Text
 * @subpackage Autoalt_Image_Alt_Text/includes
 * @author     Jerick <jerick@ludik.pe>
 */
class Autoalt_Image_Alt_Text_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'autoalt-image-alt-text',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
