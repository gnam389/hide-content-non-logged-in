<?php
/*
Plugin Name: Hide Content from Non-Logged In Users using a Shortcode
Description: Hide Content with shortcode: [hide_content] THIS CONTENT [/hide_content] - The plugin can hide any content from non-logged in users. The code is simple, compact, does not take up storage space or system resources. Works with shortcodes like CF7
Version: 1.0
Author: Hoàng Giang Nam
Author URI:        https://hoanggiangnam.com
*/
function hide_content_for_non_logged_in_users($atts, $content = null) {
    if (is_user_logged_in()) {
        return do_shortcode($content);
    } else {
        return '<div style="background-color: yellow; padding: 10px; border-radius: 5px;">You must log-in to view this content.</div>';
    }
}
add_shortcode('hide_content', 'hide_content_for_non_logged_in_users');
