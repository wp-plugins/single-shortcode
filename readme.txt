=== single shortcode ===
Contributors: attosoft
Tags: single page, single post, shortcode, excerpt, hide
Requires at least: 2.5
Tested up to: 3.2.1
Stable tag: trunk

[single] shortcode outputs content only if single page is displayed. It's useful for hiding table of contents, footnotes, relative links, etc.

== Description ==

Using single shortcode plugin, you can hide specified content from [excerpt](http://codex.wordpress.org/Glossary#Excerpt) of post. The content surrounded with [single] tag is output **only** if single page is displayed. It's useful for hiding the following items from excerpt.

* table of contents
* footnotes
* relative links, etc.

Installed this plugin, you can use the following shortcodes.

* [single] shortcode outputs content **only** if single page is displayed
* [excerpt] shortcode outputs content **only** if excerpt is displayed

= Usage =

Surround content with [single] tag.

    [single] ... [/single]

    [single]
     ...
    [/single]

You can use [excerpt] tag as necessary.

    [excerpt] ... [/excerpt]

    [excerpt]
     ...
    [/excerpt]

= Links =
* [Homepage](http://attosoft.info/en/)
* [Plugin Official Site](http://attosoft.info/blog/en/single-shortcode/)

== Installation ==

1. Upload `single-shortcode` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 0.1 =
* Initial release
