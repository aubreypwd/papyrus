<?php
/**
 * Plugin Name: Papyrus
 * Plugin URI:  http://github.com/aubreypwd/papyrus
 * Description: when you type <code>papyrus</code> anywhere, you will see it!
 * Version:     1.0.0
 * Author:      Aubrey Portwood
 * Author URI:  http://aubreypwd.com
 * License:     GPL2
 *
 * @package Aubrey Portwood/Papyrus
 * @since   6/28/2019
 */

/*
 * Copyright 2019 Aubrey Portwood <code@aubreypwd.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

namespace aubreypwd\Papyrus;

add_action( 'wp_enqueue_scripts', '\aubreypwd\Papyrus\scripts' );
add_action( 'admin_enqueue_scripts', '\aubreypwd\Papyrus\scripts' );

/**
 * Load Scripts
 *
 * @author Aubrey Portwood <code@aubreypwd.com>
 * @since  1.0.0
 */
function scripts() {
	wp_enqueue_script( 'aubreypwd-papyrus', plugins_url( 'papyrus.js', __FILE__ ), [ 'jquery' ], time(), true );
	wp_enqueue_style( 'aubreypwd-papyrus', plugins_url( 'papyrus.css', __FILE__ ), [], time() );
}
