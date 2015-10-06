<?php

$items = '';

for ($i = 1; $i <= 5; $i++) {
	
	$photo = elgg_view('output/url', array(
		'text' => elgg_view('output/img', array(
			'src' => "//lorempixel.com/100/100/food/$i",
			'width' => 100,
			'height' => 100,
		)),
		'href' => "//lorempixel.com/500/500/food/$i",
		'title' => "Photo $i",
		'class' => 'elgg-lightbox-photo',
		'rel' => 'lb-photos',
	));

	$items .= elgg_format_element('li', ['class' => 'elgg-item'], $photo);
}

$body = elgg_format_element('ul', ['class' => 'elgg-gallery elgg-gallery-users'], $items);

echo elgg_view_module('theme-sandbox-demo', 'Lightbox Photo (.elgg-lightbox-photo)', $body);