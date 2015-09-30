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