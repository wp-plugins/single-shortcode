=== single shortcode ===
Contributors: attosoft
Tags: single page, single post, shortcode, excerpt, hide, content
Requires at least: 2.5
Tested up to: 3.2.1
Stable tag: trunk

[single] shortcode outputs content only if single page is displayed. Useful for hiding table of contents, footnotes, relative links from excerpt.

== Description ==

Using single shortcode plugin, you can hide specified content from [excerpt](http://codex.wordpress.org/Glossary#Excerpt) of post. The content enclosed with [single] tag is output **only** if single page is displayed. It's useful for hiding the following items from excerpt.

* table of contents
* footnotes
* relative links, etc.

Installed this plugin, you can use the following shortcodes.

* [single] shortcode outputs content **only** if single page is displayed
* [excerpt] shortcode outputs content **only** if excerpt is displayed

= Usage =

Enclose content with [single] tag.

    [single] ... [/single]

    [single]
     ...
    [/single]

You can use [excerpt] tag as necessary.

    [excerpt] ... [/excerpt]

    [excerpt]
     ...
    [/excerpt]

= Example =

If you write the following code,

    <p>paragraph1</p>
    
    [single]
    <h5>Index</h5>
    <ul>
        <li><a href="#item1">item1</a></li>
        <li><a href="#item2">item2</a></li>
        <li><a href="#item3">item3</a></li>
    </ul>
    [/single]
    
    <p>paragraph2</p>

the excerpt is displayed as follows. (Index is NOT output)

> paragraph1
> 
> paragraph2

And single page is displayed as follows. (Index is output)

> paragraph1
> ## **Index**
> * [item1](#item1)
> * [item2](#item2)
> * [item3](#item3)
> 
> paragraph2

= Links =

* [Homepage (attosoft.info)](http://attosoft.info/en/) \[[Japanese](http://attosoft.info/)\]
* [single shortcode Plugin Official Site](http://attosoft.info/blog/en/single-shortcode/) \[[Japanese](http://attosoft.info/blog/single-shortcode/)\]
* ref. [Function Reference / is_single() (WordPress Codex)](http://codex.wordpress.org/Function_Reference/is_single)

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where is excerpt displayed? =

* Blog homepage (latest posts)
* Archive, Category, Tag page
* Search result
* Posts feed (RSS/Atom)

\* Please see [Glossary](http://codex.wordpress.org/Glossary#Excerpt) for more information.

== Changelog ==

= 0.1.1 =
* [excerpt] shortcode also outputs content in search results and posts feed (RSS/Atom)

= 0.1 =
* Initial release
