define(['elgg', 'jquery'], function (elgg, $) {
	return {
		current: elgg.echo('js:lightbox:current', ['{current}', '{total}']),
		previous: '<span class="fa fa-caret-left"></span>',
		next: '<span class="fa fa-caret-right"></span>',
		close: '<span class="fa fa-times"></span>',
		xhrError: elgg.echo('error:default'),
		imgError: elgg.echo('error:default'),
		opacity: 0.5,
		maxWidth: '100%',
		// don't move colorbox on small viewports https://github.com/Elgg/Elgg/issues/5312
		reposition: $(window).height() > 600
	};
});