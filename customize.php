<?php

/**
 * Plugin Name: SSA Customization - Custom Styling
 * Plugin URI:  https://simplyscheduleappointments.com
 * Description: Customize the admin app or booking app in Simply Schedule Appointments with custom CSS.
 * Version:     1.0.0
 * Author:      Simply Schedule Appointments
 * Author URI:  https://simplyscheduleappointments.com
 * Donate link: https://simplyscheduleappointments.com
 * License:     GPLv2
 * Text Domain: simply-schedule-appointments
 * Domain Path: /languages
 *
 * @link    https://simplyscheduleappointments.com
 *
 * @package Simply_Schedule_Appointments
 * @version 1.0.6
 *
 */

/**
 * Copyright (c) 2024 Simply Schedule Appointments (email : support@ssaplugin.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1401  USA
 */

add_action( 'admin_head', 'custom_ssa_backend_admin_head' );
function custom_ssa_backend_admin_head() {
    ?>
    <style>
       /* Add custom CSS for the SSA BACKEND admin app here */
    </style>
    <?php
}

add_action( 'ssa_booking_head', 'custom_ssa_booking_head' );
function custom_ssa_booking_head() {
    ?>
    <style>
	/* Add custom CSS for the SSA booking app here */
    </style>
    <?php
}

add_action( 'ssa_admin_head', 'custom_ssa_frontend_admin_head' );
function custom_ssa_frontend_admin_head() {
    ?>
    <style>
	/* Add custom CSS for the SSA FRONTEND admin app here */
    </style>
    <?php
}
