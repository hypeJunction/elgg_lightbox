Lightbox for Elgg
================
![Elgg 2.0](https://img.shields.io/badge/Elgg-2.0.x-orange.svg?style=flat-square)

Lightbox component for Elgg

## Features

* Converts lightbox to AMD module
* Custom imageless theme

![Lightbox](https://raw.github.com/hypeJunction/elgg_lightbox/master/screenshots/lightbox.png "Lightbox")

## Usage

As an AMD module:

```js

define(function(require) {
	var lightbox = require('elgg/lightbox');
	var spinner = require('elgg/spinner');
	
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

You can also add `.elgg-lightbox` or `.elgg-lightbox-photo` class to your HTML elements (with a `href` or `src`) attribute.
Additional parameters can be passed with `data-colorbox-opts` as a json_encoded object.

Note that for the `rel` options to take effect, you will need to call a colorbox on a selector, e.g.

```js
require(['elgg/lightbox'], function() {
	$('.elgg-lightbox-photo').colorbox({photo: true});
});

```

## Notes

* This drop `elgg.ui.lightbox` namespace. Use AMD module instead.
