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
	/** Register Brand Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'brand-page-sidebar',
	
		'name'			=> __( 'Brand Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Brand Overview Page'),
	
	) );
	/** Register Editorial Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'editorial-page-sidebar',
	
		'name'			=> __( 'Editorial Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Editorial Overview Page'),
	
	) );
	/** Register Visual Design Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'visual-design-page-sidebar',
	
		'name'			=> __( 'Visual Design Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Visual Design Overview Page'),
	
	) );
	/** Register Media Relations Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'media-relations-page-sidebar',
	
		'name'			=> __( 'Media Relations Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Media Relations Overview Page'),
	
	) );
	/** Register Social Media Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'social-media-page-sidebar',
	
		'name'			=> __( 'Social Media Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Social Media Overview Page'),
	
	) );
	/** Register Web Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'web-page-sidebar',
	
		'name'			=> __( 'Web Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Web Overview Page'),
	
	) );
	/** Register Email Page Sidebar */
	genesis_register_widget_area( array(
		
		'id'			=> 'email-page-sidebar',
	
		'name'			=> __( 'Email Page Sidebar'),
	
		'description'	=> __( 'This is the widget area for the Email and iModules Page'),
	
	) );
		}
		
		add_action ('widgets_init','bb_register_custom_sidebars');