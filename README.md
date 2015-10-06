Lightbox for Elgg
================
![Elgg 2.0](https://img.shields.io/badge/Elgg-2.0.x-orange.svg?style=flat-square)

Lightbox component for Elgg

## Features

* Converts lightbox to AMD module
* Custom imageless theme

![Tooltip](https://raw.github.com/hypeJunction/elgg_tooltip/master/screenshots/tooltip.png "Tooltip")

## Usage

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

## Notes

* This drop `elgg.ui.lightbox` namespace. Use AMD module instead.