<?php
/**
Plugin Name: Chassis Local Dev
Plugin URI: https://github.com/Chassis/local-dev
Description: Changes the WordPress admin bar colour if you're using <a href="https://github.com/Chassis/Chassis" title="Chassis">Chassis</a>.
Version: 0.1
Author: Bronson Quick
Author URI: https://www.bronsonquick.com.au/
License: GPL v3

Chassis Local Dev Plugin
Copyright (C) 2014, Bronson Quick bronson@bronsonquick.com.au

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if this file is directly accessed
if ( ! defined( 'ABSPATH' ) ) exit;

// You can define your own admin bar colour by defining CHASSIS_ADMIN_BAR_COLOUR in your config
defined( 'CHASSIS_ADMIN_BAR_COLOUR' ) or define( 'CHASSIS_ADMIN_BAR_COLOUR', '#58207e' );


class Chassis_Local_Dev {
	private static $instance;

	static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new Chassis_Local_Dev;
		}

		return self::$instance;
	}

	private function __construct() {
		add_action( 'wp_head',    array( $this, 'change_admin_bar_colour' ) );
		add_action( 'admin_head', array( $this, 'change_admin_bar_colour' ) );
	}

	function change_admin_bar_colour() {
		?>
		<style>
			#wpadminbar{
				background: <?php echo CHASSIS_ADMIN_BAR_COLOUR; ?> !important;
			}
		</style>
	<?php
	}
}
// Exit if we're not developing locally as we don't want this to run on the staging or production servers
if ( defined( 'WP_LOCAL_DEV' ) && ( true === WP_LOCAL_DEV ) ) {
	Chassis_Local_Dev::get_instance();
}