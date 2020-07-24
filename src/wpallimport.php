<?php

namespace Varunsridharan\WordPress;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

use RapidAddon;

if ( ! class_exists( '\RapidAddon' ) ) {
	require_once __DIR__ . '/rapid-addon.php';
}


if ( ! class_exists( '\Varunsridharan\WordPress\WPAllImport' ) ) {
	/**
	 * Class WPAllImport
	 *
	 * @package Varunsridharan\WordPress
	 * @author Varun Sridharan <varunsridharan23@gmail.com>
	 */
	class WPAllImport extends RapidAddon {
	}
}
