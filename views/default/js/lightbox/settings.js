define(['elgg', 'jquery'], function (elgg, $) {
	elgg.provide('elgg.ui.lightbox');
	var settings = {
		current: elgg.echo('js:lightbox:current', ['{current}', '{total}']),
		previous: elgg.echo('previous'),
		next: elgg.echo('next'),
		close: elgg.echo('close'),
		xhrError: elgg.echo('error:default'),
		imgError: elgg.echo('error:default'),
		opacity: 0.5,
		maxWidth: '100%',
		// don't move colorbox on small viewports https://github.com/Elgg/Elgg/issues/5312
		reposition: $(window).height() > 600
	};
	if (typeof elgg.ui.lightbox.getSettings === 'function') {
		settings = elgg.ui.lightbox.getSettings();
	}
	return elgg.trigger_hook('settings', 'lightbox', {}, settings);
});