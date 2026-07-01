<?php

namespace hypeJunction\Lightbox;

use Elgg\PluginBootstrap;

/**
 * Plugin bootstrap for elgg_lightbox.
 */
class Bootstrap extends PluginBootstrap {

	/**
	 * {@inheritdoc}
	 */
	public function load() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function boot() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function init() {
		// jquery.colorbox is a classic jQuery plugin imported by elgg/lightbox.mjs,
		// but Elgg 7 ships no such importmap module and nothing registered it ->
		// "Failed to resolve module specifier jquery.colorbox" aborted the lightbox.
		// Register the vendored bundle by absolute URL (theme exposes window.jQuery).
		\elgg_register_esm('jquery.colorbox', \elgg_normalize_url('mod/elgg_lightbox/vendors/colorbox/jquery.colorbox.js'));
		\elgg_import_esm('elgg/lightbox');
	}

	/**
	 * {@inheritdoc}
	 */
	public function ready() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function shutdown() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function activate() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function deactivate() {
	}

	/**
	 * {@inheritdoc}
	 */
	public function upgrade() {
	}
}
