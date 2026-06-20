<?php
declare(strict_types=1);

/**
 * Plugin Name: X-Tiger Core
 * Plugin URI: https://x-tiger.ru
 * Description: Core functionality layer for the X-Tiger WordPress platform.
 * Version: 0.1.0
 * Requires at least: 6.7
 * Requires PHP: 8.1
 * Author: Интернет-агентство Икс-Тайгер
 * Author URI: https://x-tiger.ru
 * License: GPLv2 or later
 * Text Domain: x-tiger-core
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const X_TIGER_CORE_VERSION = '0.1.0';
const X_TIGER_CORE_FILE    = __FILE__;
const X_TIGER_CORE_PATH    = __DIR__ . '/';
const X_TIGER_CORE_URL     = plugin_dir_url( __FILE__ );

require_once X_TIGER_CORE_PATH . 'includes/Plugin.php';

add_action( 'plugins_loaded', array( \X_Tiger_Core\Plugin::class, 'init' ) );
