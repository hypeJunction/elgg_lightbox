Lightbox for Elgg
================
![Elgg 1.11](https://img.shields.io/badge/Elgg-1.11.x-orange.svg?style=flat-square)
![Elgg 1.12](https://img.shields.io/badge/Elgg-1.12.x-orange.svg?style=flat-square)

Lightbox component for Elgg

## Features

* Converts lightbox to AMD module



## Usage

With the plugin enabled, you no longer need to use `elgg_load_js('lightbox')`.

```js

define(['elgg', 'jquery', 'elgg/lightbox', 'elgg/spinner'], function(elgg, $, lightbox, spinner) {
	lightbox.open({
		html: '<p>You are welcome</p>',
		onClosed: function() {
			lightbox.open({
				onLoad: spinner.start,
				onComplete: spinner.stop,
				photo: true,
				href: 'https://www.petfinder.com/wp-content/uploads/2012/11/122163343-conditioning-dog-loud-noises-632x475.jpg',
			});
		}
	});
});

```