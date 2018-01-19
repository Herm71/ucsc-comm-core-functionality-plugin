<?php

/**

 * Custom Sidebars

 *

 * This file contains any custom sidebar registration

 *

 * @package      Core_Functionality

 * @since        1.0.0

 * @link         https://github.com/billerickson/Core-Functionality

 * @author       Jason Chafin <Jason@blackbirdconsult.com>

 * @copyright    Copyright (c) 2012, Jason Chafin

 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License

 */

function bb_register_custom_sidebars(){
	/** Register Top-Row Search widget area */
	 genesis_register_widget_area( array(
		
			'id'			=> 'top-row-search',
		
			'name'			=> __( 'Top Row Search Widget'),
		
			'description'	=> __( 'This is the search widget for the header top row.'),
		
		) );
	/** Register Editorial Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'editorial-page-sidebar',
	
		'name'			=> __( 'Editorial Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Editorial Page'),
	
	) );
	/** Register Media Relations Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'media-relations-page-sidebar',
	
		'name'			=> __( 'Media Relations Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Media Relations Page'),
	
	) );
	/** Register Email Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'email-page-sidebar',
	
		'name'			=> __( 'Email Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Email and iModules Page'),
	
	) );
		}
		
		add_action ('widgets_init','bb_register_custom_sidebars');