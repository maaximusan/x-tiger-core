<?php
declare(strict_types=1);

/**
 * Plugin Name: X-Tiger Core
 * Plugin URI: https://x-tiger.ru
 * Description: Core functionality layer for the X-Tiger WordPress platform.
 * Version: 0.1.0
 * Requires at least: 6.7
 * Requires PHP: 7.4
 * Author: Интернет-агентство Икс-Тайгер
 * Author URI: https://x-tiger.ru
 * License: GPLv2 or later
 * Text Domain: x-tiger-core
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'x_tiger_core_admin_notice' ) ) {
	function x_tiger_core_admin_notice( string $message ): void {
		add_action(
			'admin_notices',
			static function () use ( $message ): void {
				printf(
					'<div class="notice notice-error"><p>%s</p></div>',
					esc_html( $message )
				);
			}
		);
	}
}

if ( defined( 'X_TIGER_CORE_FILE' ) && X_TIGER_CORE_FILE !== __FILE__ ) {
	x_tiger_core_admin_notice( __( 'X-Tiger Core is already loaded from another location. Deactivate duplicate plugin copies before activating this one.', 'x-tiger-core' ) );
	return;
}

if ( ! defined( 'X_TIGER_CORE_VERSION' ) ) {
	define( 'X_TIGER_CORE_VERSION', '0.1.0' );
}

if ( ! defined( 'X_TIGER_CORE_FILE' ) ) {
	define( 'X_TIGER_CORE_FILE', __FILE__ );
}

if ( ! defined( 'X_TIGER_CORE_PATH' ) ) {
	define( 'X_TIGER_CORE_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'X_TIGER_CORE_URL' ) ) {
	define( 'X_TIGER_CORE_URL', plugin_dir_url( __FILE__ ) );
}

$x_tiger_core_required_classes = array(
	'X_Tiger_Core\Plugin'   => 'includes/Plugin.php',
	'X_Tiger_Core\Settings' => 'includes/Settings.php',
	'X_Tiger_Core\Blocks'   => 'includes/Blocks.php',
);

foreach ( $x_tiger_core_required_classes as $class_name => $relative_path ) {
	if ( class_exists( $class_name, false ) ) {
		continue;
	}

	$file = X_TIGER_CORE_PATH . $relative_path;

	if ( ! is_readable( $file ) ) {
		x_tiger_core_admin_notice(
			sprintf(
				/* translators: %s: missing plugin file path. */
				__( 'X-Tiger Core could not load required file: %s', 'x-tiger-core' ),
				$relative_path
			)
		);
		return;
	}

	require_once $file;
}

if ( ! class_exists( 'X_Tiger_Core\Plugin', false ) || ! class_exists( 'X_Tiger_Core\Settings', false ) || ! class_exists( 'X_Tiger_Core\Blocks', false ) ) {
	x_tiger_core_admin_notice( __( 'X-Tiger Core could not load required classes.', 'x-tiger-core' ) );
	return;
}

add_action( 'plugins_loaded', array( \X_Tiger_Core\Plugin::class, 'init' ) );
