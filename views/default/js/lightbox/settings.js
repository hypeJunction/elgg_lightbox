define(['elgg', 'jquery'], function (elgg, $) {
	elgg.provide('elgg.ui.lightbox');
	var settings = {};
	if (typeof elgg.ui.lightbox.getSettings === 'function') {
		settings = elgg.ui.lightbox.getSettings();
	}
	return elgg.trigger_hook('settings', 'lightbox', {}, settings);
});