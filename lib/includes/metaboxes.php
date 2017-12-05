<?php

/**

 * Custom Metaboxes

 *

 * This file contains any custom metaboxes 

 *

 * @package      Core_Functionality

 * @since        1.0.0

 * @link         https://github.com/billerickson/Core-Functionality

 * @author       Jason Chafin <Jason@blackbirdconsult.com>

 * @copyright    Copyright (c) 2012, Jason Chafin

 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License

 */

 
/**
 * Create custom metabox Social Media Directory
 * @since 1.0.0
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action('admin_init', __NAMESPACE__ .'\admin_init');
add_action('save_post', __NAMESPACE__ .'\save_sticky');

function admin_init(){
    add_meta_box("smSticky-meta", "Social Media Sticky", __NAMESPACE__ ."\meta_options", "s_m_directory", "side", "low");
}
 
 
function meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $sticky = $custom["sticky"][0];
?>
<label>Sticky:</label><input name="sticky" value="<?php echo $sticky; ?>" />
<?php
}


function save_sticky(){
global $post;
update_post_meta($post->ID, "sticky", $_POST["sticky"]);
}