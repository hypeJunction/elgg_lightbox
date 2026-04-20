<?php

namespace hypeJunction\Lightbox;

use Elgg\IntegrationTestCase;

class BootstrapTest extends IntegrationTestCase {

	public function up() {}
	public function down() {}

	/**
     * @return void
     */
    public function testPluginLoads(): void {
		$plugin = elgg_get_plugin_from_id('elgg_lightbox');
		$this->assertNotNull($plugin, 'Plugin elgg_lightbox should be loadable');
	}

	/**
     * @return void
     */
    public function testViewExists(): void {
		$this->assertTrue(
			elgg_view_exists('elgg/lightbox.css'),
			'View elgg/lightbox.css should exist'
		);
	}

	/**
     * @return void
     */
    public function testLightboxJsViewExists(): void {
		$this->assertTrue(
			elgg_view_exists('elgg/lightbox.js'),
			'View elgg/lightbox.js should exist'
		);
	}
}
