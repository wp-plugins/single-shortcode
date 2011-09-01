<?php
/*
Plugin Name: single shortcode
Plugin URI: http://attosoft.info/blog/en/single-shortcode/
Description: [single] shortcode outputs content only if single page is displayed. It's useful for hiding table of contents, footnotes, relative links from excerpt. And [excerpt] shortcode outputs content only if excerpt is displayed.
Version: 0.1.1
Author: attosoft
Author URI: http://attosoft.info/en/
*/

/*  Copyright 2010-2011 attosoft (contact@attosoft.info)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// [single] shortcode outputs content only if single page is displayed
function single_shortcode($atts, $content = null) {
    return is_single() ? $content : '';
}
add_shortcode("single", "single_shortcode");

// [excerpt] shortcode outputs content only if excerpt is displayed
function excerpt_shortcode($atts, $content = null) {
    return is_home() || is_category() || is_tag() || is_archive() || is_search() || is_feed() ? $content : '';
}
add_shortcode("excerpt", "excerpt_shortcode");

// Additional links on the Plugins page
add_filter('plugin_row_meta', 'add_single_shortcode_links', 10, 2);
function add_single_shortcode_links($links, $file) {
    if ($file == plugin_basename(__FILE__)) {
        $links[] = '<a href="http://wordpress.org/extend/plugins/single-shortcode/" target="_blank">' . __('Show Details') . '</a>';
        $links[] = '<a href="http://attosoft.info/blog/en/contact/" target="_blank">' . __('Contact Me') . '</a>';
    }
    return $links;
}
?>
