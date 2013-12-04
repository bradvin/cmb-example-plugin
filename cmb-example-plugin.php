<?php
/**
 * Custom Metaboxes And Fields Showcase
 *
 * This plugin simply demonstrates how to include Custom Metaboxes And Fields within a plugin. Create a new page to see the new metaboxes added to the page post type.
 *
 * @package   CMB_Showcase
 * @author    Brad Vincent <bradvin@gmail.com>
 * @license   GPL-2.0+
 * @link      https://github.com/bradvin/cmb-example-plugin
 * @copyright 2013 Brad Vincent
 *
 * @wordpress-plugin
 * Plugin Name:       Custom Metaboxes And Fields Showcase
 * Plugin URI:        https://github.com/bradvin/cmb-example-plugin
 * Description:       This plugin simply demonstrates how to include Custom Metaboxes And Fields within a plugin. Create a new page to see the new metaboxes added to the page post type.
 * Version:           0.0.1
 * Author:            Brad Vincent
 * Author URI:        http://themergency.com
 * Text Domain:       CMB_Showcase
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/bradvin/cmb-example-plugin
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function cmb_showcase_load_metabox() {
	require_once( 'includes/metabox/example-functions.php' );
	require_once( 'includes/metabox/init.php' );
}

//only need to add metaboxes in admin!
if (is_admin()) {
	add_action( 'init', 'cmb_showcase_load_metabox' );
}