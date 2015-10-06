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

	elgg_unregister_js('lightbox');
	elgg_extend_view('elgg.js', 'lightbox.js');
	
	elgg_unregister_css('lightbox');
	elgg_extend_view('elgg.css', 'elgg/lightbox.css');
	elgg_extend_view('admin.css', 'elgg/lightbox.css');

	elgg_extend_view('theme_sandbox/javascript', 'theme_sandbox/javascript/lightbox-photo');
	elgg_extend_view('theme_sandbox/javascript', 'theme_sandbox/javascript/lightbox-iframe');
}