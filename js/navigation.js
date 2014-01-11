/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
(function($) {
	var $container, $button, $menu;

	$container = $('#site-navigation');
	if ( ! $container.length )
		return;

	$button = $container.find('.menu-toggle');
	if ( ! $button.length )
		return;

	$menu = $container.find('.menu > ul');

	// Hide menu toggle button if menu is empty and return early.
	if ( ! $menu.length ) {
		$button.hide();
		return;
	}

	$button.on( 'click', function() {
		$menu.slideToggle();
	});
}(jQuery));
