<?php

namespace hypeJunction\Lightbox;

use Elgg\IntegrationTestCase;

class BootstrapTest extends IntegrationTestCase {

	public function up() {}
	public function down() {}

	public function testPluginLoads(): void {
		$plugin = elgg_get_plugin_from_id('elgg_lightbox');
		$this->assertNotNull($plugin, 'Plugin elgg_lightbox should be loadable');
	}

	public function testPluginIsEnabled(): void {
		$plugin = elgg_get_plugin_from_id('elgg_lightbox');
		$this->assertNotNull($plugin);
		$this->assertTrue($plugin->isEnabled(), 'Plugin elgg_lightbox should be enabled');
	}

	public function testPluginIsActive(): void {
		$plugin = elgg_get_plugin_from_id('elgg_lightbox');
		$this->assertNotNull($plugin);
		$this->assertTrue($plugin->isActive(), 'Plugin elgg_lightbox should be active');
	}

	public function testBootstrapClassLoads(): void {
		$this->assertTrue(class_exists(Bootstrap::class), 'Bootstrap class should be loadable');
	}

	public function testLightboxCssViewExists(): void {
		$this->assertTrue(elgg_view_exists('elgg/lightbox.css'), 'View elgg/lightbox.css should exist');
	}

	public function testLightboxJsViewExists(): void {
		$this->assertTrue(elgg_view_exists('elgg/lightbox.js'), 'View elgg/lightbox.js should exist');
	}

	public function testColorboxCssViewAliasExists(): void {
		$this->assertTrue(elgg_view_exists('colorbox.css'), 'Aliased view colorbox.css should exist');
	}

	public function testColorboxCanonicalViewAliasExists(): void {
		$this->assertTrue(
			elgg_view_exists('lightbox/elgg-colorbox-theme/colorbox.css'),
			'Aliased view lightbox/elgg-colorbox-theme/colorbox.css should exist'
		);
	}

	public function testElggCssExtendsColorboxCss(): void {
		$viewList = array_values(_elgg_services()->views->getViewList('elgg.css'));
		$colorboxInList = in_array('colorbox.css', $viewList)
			|| in_array('lightbox/elgg-colorbox-theme/colorbox.css', $viewList);
		$this->assertTrue($colorboxInList, 'elgg.css should be extended with colorbox CSS');
	}

	public function testAdminCssExtendsColorboxCss(): void {
		$viewList = array_values(_elgg_services()->views->getViewList('admin.css'));
		$colorboxInList = in_array('colorbox.css', $viewList)
			|| in_array('lightbox/elgg-colorbox-theme/colorbox.css', $viewList);
		$this->assertTrue($colorboxInList, 'admin.css should be extended with colorbox CSS');
	}

}
