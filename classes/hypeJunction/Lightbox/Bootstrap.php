<?php

namespace hypeJunction\Lightbox;

use Elgg\PluginBootstrap;

class Bootstrap extends PluginBootstrap {

	public function load() {}

	public function boot() {}

	public function init() {
		\elgg_require_js('elgg/lightbox');
	}

	public function ready() {}

	public function shutdown() {}

	public function activate() {}

	public function deactivate() {}

	public function upgrade() {}
}
