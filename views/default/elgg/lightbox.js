define(function (require) {

	var elgg = require('elgg');
	var $ = require('jquery');
	require('jquery.colorbox');
	var settings = require('elgg/lightbox/settings');
	
	var lightbox = {
		settings: settings,
		/**
		 * Bind colorbox lightbox click to HTML
		 *
		 * @param {Object} selector CSS selector matching colorbox openers
		 * @param {Object} opts     Colorbox options. These are overridden by data-colorbox-opts options
		 */
		bind: function (selector, opts) {
			if (!$.isPlainObject(opts)) {
				opts = {};
			}
		
			$(document).on('click', selector, function (e) {
				e.preventDefault();
				var $this = $(this),
						href = $this.prop('href') || $this.prop('src'),
						// Note: data-colorbox was reserved https://github.com/jackmoore/colorbox/issues/435
						dataOpts = $this.data('colorboxOpts');

				if (!$.isPlainObject(dataOpts)) {
					dataOpts = {};
				}

				if (!dataOpts.href && href) {
					dataOpts.href = href;
				}

				// merge data- options into opts
				lightbox.open($.extend({}, opts, dataOpts));
			});
		},
		open: function(opts) {
			if (!$.isPlainObject(opts)) {
				opts = {};
			}
			$.colorbox($.extend({}, settings, opts));
		},
		/**
		 * Close the colorbox
		 */
		close: function () {
			$.colorbox.close();
		}
	};

	return lightbox;
});