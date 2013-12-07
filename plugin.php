<?php
/**
 * Plugin Name: Blackbird Core Functionality
 * Plugin URI: https://github.com/billerickson/Core-Functionality
 * Description: This contains all your site's core functionality so that it is theme independent.
 * Version: 1.1.0
 * Author: Jason Chafin
 * Author URI: http://www.blackbirdconsult.com/
 *
 * This code was adapted from Bill Erickson, who's tutorials have helped me tremendously in my development process.
 * http://www.billerickson.net
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

// Plugin Directory 
define( 'BB_DIR', dirname( __FILE__ ) );
 
// Post Types
//include_once( BB_DIR . '/lib/functions/post-types.php' );

// Taxonomies 
//include_once( BB_DIR . '/lib/functions/taxonomies.php' );

// Metaboxes
//include_once( BB_DIR . '/lib/functions/metaboxes.php' );
 
// Facebook Open Graph Tags
// -- Set default image in general.php
include_once( BB_DIR . '/lib/functions/facebook.php' );

// Widgets
//include_once( BB_DIR . '/lib/widgets/widget-social.php' );

// Shortcodes
//include_once( BB_DIR . '/lib/widgets/shortcodes.php' );

// Sidebars
//include_once( BB_DIR . '/lib/widgets/sidebars.php' );

// General
include_once( BB_DIR . '/lib/functions/general.php' );