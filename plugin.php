<?php
/**
 * Plugin Name: UCSC Communications Core Functionality Plugin
 * Plugin URI: https://github.com/Herm71/blackbird-core-functionality-plugin.git
 * Description: Contains custom post-types, shortcodes, sidebars and taxonomies for the UCSC Communications theme. Theme independent.
 * Version: 1.1.0
 * Author: UC Santa Cruz
 * Author URI: http://www.ucsc.edu/
 * License: GPL2
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

//Include Customization files:

// Post Types
include_once( BB_DIR . '/lib/includes/post-types.php' );

// Taxonomies 
//include_once( BB_DIR . '/lib/includes/taxonomies.php' );

// Shortcodes
include_once( BB_DIR . '/lib/includes/shortcodes.php' );

// Sidebars
include_once( BB_DIR . '/lib/includes/sidebars.php' );

// Metaboxes
include_once( BB_DIR . '/lib/includes/metaboxes.php' );

// General
include_once( BB_DIR . '/lib/includes/do-not-update.php' );
