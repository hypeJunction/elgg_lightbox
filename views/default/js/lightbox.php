// <script>

	require(['elgg'], function (elgg) {

		elgg.provide('elgg.ui.lightbox');
		<?php echo elgg_view('js/lightbox/settings') ?>

		require(['jquery', 'elgg/lightbox'], function ($, lightbox) {

			function registerDeprecationError() {
				elgg.deprecated_notice("fancybox lightbox has been replaced by colorbox", '1.9');
			}

			if (typeof $.fancybox === 'undefined') {
				$.fancybox = {
					// error message for firefox users
					__noSuchMethod__: registerDeprecationError,
					close: function () {
						registerDeprecationError();
						$.colorbox.close();
					}
				};
				// support $().fancybox({type:'image'})
				$.fn.fancybox = function (arg) {
					registerDeprecationError();
					if (arg.type === 'image') {
						arg.photo = true;
					}
					this.colorbox(arg);
					return this;
				};
			}

			lightbox.bind(".elgg-lightbox");
			lightbox.bind(".elgg-lightbox-photo", {photo: true});

			$.extend(elgg.ui.lightbox, lightbox);
		});
	});