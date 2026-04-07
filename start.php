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

	elgg_unregister_css('lightbox');
	elgg_extend_view('elgg.css', 'colorbox.css');
	elgg_extend_view('admin.css', 'colorbox.css');
}
