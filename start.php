<?php

/**
 * Lightbox component
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */
elgg_register_event_handler('init', 'system', 'elgg_lightbox_init');

/**
 * Initialize the plugin
 * @return void
 */
function elgg_lightbox_init() {

	if (!elgg_is_active_plugin('mrclay_combiner')) {
		elgg_unregister_js('lightbox');
		elgg_unregister_css('lightbox');
	}

	if (version_compare('2.2', elgg_get_version(true), '<')) {
		elgg_extend_view('elgg.js', 'elgg/lightbox.js');
		elgg_extend_view('elgg.css', 'colorbox.css');
		elgg_extend_view('admin.css', 'colorbox.css');
	}

	elgg_require_js('elgg/lightbox');
}
