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
 * Plugin URI:        https://github.com/Jerick97/autoalt-image-alt-text
 * Description:       AutoAlt autocompleta automáticamente los atributos ALT de tus imágenes en WordPress, mejorando la accesibilidad y el SEO de tu sitio sin esfuerzo.
 * Version:           1.0.0
 * Author:            Jerick
 * Author URI:        https://github.com/Jerick97/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       autoalt-image-alt-text
 * Domain Path:       /languages
 */

function auto_image_alt($attachment_id)
{
	$mime_type = get_post_mime_type($attachment_id); //image/jpeg
	if (strpos($mime_type, 'image') !== false) { //check if the mime type is an image
		$image_title = get_the_title($attachment_id); //get the title of the image
		update_post_meta($attachment_id, '_wp_attachment_image_alt', $image_title); //update the alt text with the title
	}
}

add_action('add_attachment', 'auto_image_alt');
