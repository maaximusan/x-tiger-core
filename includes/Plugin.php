<?php
declare(strict_types=1);

namespace X_Tiger_Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Plugin {
	public static function init(): void {
		require_once X_TIGER_CORE_PATH . 'includes/Settings.php';
		require_once X_TIGER_CORE_PATH . 'includes/Blocks.php';

		Settings::init();
		Blocks::init();
	}
}
