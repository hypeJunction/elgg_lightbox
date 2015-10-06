require(['elgg/lightbox'], function (lightbox) {
	lightbox.bind(".elgg-lightbox:not(.cboxElement)");
	lightbox.bind(".elgg-lightbox-photo:not(.cboxElement)", {photo: true});
	lightbox.bind(".elgg-lightbox-iframe:not(.cboxElement)", {iframe: true});
});