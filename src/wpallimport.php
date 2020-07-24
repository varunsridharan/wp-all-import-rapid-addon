<?php

namespace Varunsridharan\WordPress;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

use TheLeague\Database\Query_Builder;

if ( ! class_exists( '\RapidAddon' ) ) {
  require_once __DIR__.'/rapid-addon.php';
}


if ( ! class_exists( '\Varunsridharan\WordPress\WPAllImport' ) ) {
  class WPAllImport extends RapidAddon{
  }
}
