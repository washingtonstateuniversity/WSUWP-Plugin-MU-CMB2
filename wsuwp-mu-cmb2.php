<?php
/*
Plugin Name: WSU MU CMB2 Loader
Plugin URI: https://github.com/washingtonstateuniversity/WSUWP-Plugin-MU-CMB2
Description: Provides a method to include an initialize CMB2 as required.
Author: washingtonstateuniversity
Author URI: https://web.wsu.edu
Version: 0.0.1
*/

namespace WSUWP\CMB2;

/**
 * Initialize the CMB2 plugin.
 *
 * Used on demand by plugins and themes that will make use of CMB2
 * for meta fields.
 *
 * @since 0.0.1
 */
function init() {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
}
