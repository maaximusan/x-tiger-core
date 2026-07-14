<?php
declare(strict_types=1);

namespace X_Tiger_Core;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Plugin {
	public static function init(): void {
		if ( class_exists( Settings::class ) ) {
			Settings::init();
		}

		if ( class_exists( Blocks::class ) ) {
			Blocks::init();
		}
	}
}
