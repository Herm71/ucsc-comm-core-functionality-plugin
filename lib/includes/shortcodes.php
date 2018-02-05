<?php

/**

 * Custom Shortcodes

 *

 * This file contains any custom shortcodes 

 *

 * @package      Core_Functionality

 * @since        1.0.0

 * @link         https://github.com/billerickson/Core-Functionality

 * @author       Jason Chafin <Jason@blackbirdconsult.com>

 * @copyright    Copyright (c) 2012, Jason Chafin

 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License

 */

 

 //Jason's Test Functions
function say_hello() {

echo 'Hello!';

}

add_shortcode('say-hello', 'say_hello');



//show current year

function show_current_year(){

	return date('Y');

}
add_shortcode('show_current_year', 'show_current_year');

//social media links

function ucsc_social_sharing(){
    ?>
    
    <div class="footer-social">
    <ul>
    <li><a href="http://twitter.com/ucsc"><i class="fa fa-3x fa-twitter-square" aria-hidden="true"></i></a></li>
    <li><a href="http://instagram.com/ucsc"><i class="fa fa-3x fa-instagram" aria-hidden="true"></i></a></li>
    <li><a href="http://www.facebook.com/ucsantacruz"><i class="fa fa-3x fa-facebook-square" aria-hidden="true"></i></a></li>
    <li><a href="http://youtube.com/ucsantacruz"><i class="fa fa-3x fa-youtube-square" aria-hidden="true"></i></a></li>
    <li><a href="http://www.linkedin.com/groups?home=&gid=102708"><i class="fa fa-3x fa-linkedin-square" aria-hidden="true"></i></a></li>
    </ul>
    </div>
    <?php
    
    }
    
    add_shortcode('ucsc-social', 'ucsc_social_sharing');

    // Editorial Styles Search Form
function ed_styles_search_form(){
    echo '<div class="style-guide-search">';  
    echo    '<form class="search-form" role="search" itemprop="potentialAction" itemscope="" itemtype="https://schema.org/SearchAction" action="'.site_url('/').'" method="get" id="searchform">';
    echo '<meta itemprop="target" content="'.site_url().'/?s={s}">';
    echo '<label class="search-form-label screen-reader-text" for="searchform-editorial-styles">Search Style Guide</label>';
    echo '<input type="search" name="s" id="searchform-editorial-styles" placeholder="Search Style Guide..."/>';
    echo    '<input type="hidden" name="post_type" value="a_z_style_guide" />';
    echo '<input type="submit" value="'.esc_attr( '&#xf179;' ).'" />';
    echo '</form>';
    echo '</div>';
}

add_shortcode('editorial-style-guide-search', 'ed_styles_search_form');