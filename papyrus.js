/**
 * Papyrus
 *
 * Go ahead, type papyrus.
 *
 * @author Aubrey Portwood <code@aubreypwd.com>
 *
 * @since  1.0.0
 */

/* globals  */

if ( ! window.hasOwnProperty( 'Papyrus' ) ) {
	window.Papyrus = ( function( $, pub, prv ) {
		const $body = $( 'body' );
		const word = 'papyrus';

		let input = '';

		/**
		 * Reset Input
		 *
		 * @author Aubrey Portwood <code@aubreypwd.com>
		 * @since  1.0.0
		 */
		prv.selectAvatarFromDropdown = function() {
			input = '';
		};

		/**
		 * Give them time to type `papyrus`.
		 *
		 * @author Aubrey Portwood <code@aubreypwd.com>
		 * @since  1.0.0
		 */
		pub.watchAvatar = function() {
			setInterval( prv.selectAvatarFromDropdown, 3000 );
		};

		/**
		 * Listen for `papyrus`
		 *
		 * @author Aubrey Portwood <code@aubreypwd.com>
		 * @since  1.0.0
		 */
		pub.ryanGosling = function() {
			document.body.addEventListener( 'keypress', function( ev ) {
				input += String.fromCharCode( ev.keyCode );

				if ( input === word ) {
					$body.addClass( 'papyrus' );
					prv.selectAvatarFromDropdown();
				}
			} );
		};

		return pub; // Return public things.
	} ( jQuery, {}, {} ) );

	window.Papyrus.ryanGosling();
	window.Papyrus.watchAvatar();
}
