<?php

return [
	'plugin' => [
		'name' => 'Lightbox for Elgg',
		'version' => '3.1.0',
	],

	'bootstrap' => \hypeJunction\Lightbox\Bootstrap::class,
	'view_extensions' => [
		'elgg.css' => [
			'colorbox.css' => [],
		],
		'admin.css' => [
			'colorbox.css' => [],
		],
	],
	'views' => [
		'default' => [
			'lightbox/elgg-colorbox-theme/colorbox.css' => __DIR__ . '/views/default/elgg/lightbox.css',
			'colorbox.css' => __DIR__ . '/views/default/elgg/lightbox.css',
		],
	],
];
