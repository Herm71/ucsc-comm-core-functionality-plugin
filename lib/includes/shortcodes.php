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