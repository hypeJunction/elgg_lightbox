<?php

$body = elgg_view('output/url', array(
	'text' => 'Open video',
	'href' => 'http://www.youtube.com/embed/VOJyrQa_WR4?rel=0&wmode=transparent',
	'class' => 'elgg-lightbox-iframe',
	'data-colorbox-opts' => json_encode(array(
		'innerWidth' => 640,
		'innerHeight' => 390,
	))
));

echo elgg_view_module('theme-sandbox-demo', 'Lightbox Iframe (.elgg-lightbox-iframe)', $body);