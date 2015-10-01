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

	elgg_define_js('jquery.colorbox', array(
		'src' => '/vendors/jquery/colorbox/jquery.colorbox-min.js',
		'deps' => array('jquery'),
	));
	
}