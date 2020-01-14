<?php
/**
 * Plugin Name:  Wickslo Assign Featured Image
 * Plugin URI:   https://wickslo.com
 * Description:  Assigns a featured image when a post is published
 * Version:      1.0.0
 * Author:       Wickslo
 * Author URI:   https://wickslo.com
 *
 * Text Domain: wickfi
 *
 * @package wickfi
 */
/** Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
/** Define Standards for the Plugin */
define( 'WICKFI', '1.0.0' );
define( 'WICKFI_SLUG', plugin_basename( __FILE__ ) );
define( 'WICKFI_URL', plugin_dir_url( __FILE__ ) );
define( 'WICKFI_DIR', plugin_dir_path( __FILE__ ) );
define( 'WICKFI_INIT', __FILE__ );
/** Load core classes */
foreach ( glob( WICKFI_DIR . '/includes/core/*.php' ) as $file ) {
	require $file;
}
/** Call WICKFI */
function run_wickfi() {
		$plugin = new WICKFI\SetImage();
}
/** Start WICKFI */
run_wickfi();
