=== Talkomatic ===
Author: David R. Woolley
Contributors: drwool
Tags: chat, chat rooms, free chat, text chat, live chat, web chat, online chat, group chat, chat plugin, WordPress chat, Talkomatic
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QUY524EZ9D5AA
Requires at least: 3.0
Tested up to: 4.6
Stable tag: trunk
Author URI: http://thinkofit.com/drwool
License: GPLv2
URL: http://just.thinkofit.com/talkomatic-wordpress-plugin/

Embed a Talkomatic chat room in a WordPress page

== Description ==
Talkomatic is a unique text chat facility for the web. It is different from most chat
rooms in that each participant has their own little section of the screen to type into, 
and you see what other people are typing letter-by-letter, as they type it, so the experience 
is more immediate. Talkomatic runs on its own server at http://talko.cc.

The Talkomatic plugin lets you embed a Talkomatic chat room in a page or post on your own 
WordPress site, using a simple shortcode. The chat room appears on your page within an iframe.	

If the shortcode specifies a room name, any user who navigates to the page where
this shortcode is included will automatically enter the named chat room. If no 
room name is specified, the user will enter the Talkomatic lobby, which displays
a list of active rooms and participants and allows the user to choose an existing
room or open a new room, which may be public or private.
	
If the named room is not already open, it will be opened automatically as a public room.
If the named room is already open and is public, the user will enter the room if there is
an open slot. (There is a maximum of five participants per room.) If the room is open as
a private room, the user will be required to type the room key before being allowed in.
The room key is defined by whoever opens the room and designates it as private.
	
Talkomatic chat rooms do not place any burden on your WordPress server because they
are hosted on the independent server at http://talko.cc. For more information about
Talkomatic, see http://talko.cc/about.html
	

Using the Talkomatic shortcode - Examples:
	
	Put user into a specific named room, with default iframe dimensions (900 x 850 pixels):
		[talkomatic room="Elbow Room"]
		
	Put user into a specific named room, with custom iframe dimensions:
		[talkomatic room="Broom Closet" width=600 height=800]
		
	Put user into the Talkomatic lobby, where they can choose a room or open a new one:
		[talkomatic]
		
	Put user into the Talkomatic lobby, with custom iframe dimensions:
		[talkomatic width=650 height=900]
	

== Frequently Asked Questions ==

See http://talko.cc/about.html
	
== Screenshots ==

1. Sample of a Talkomatic chat room with four participants

== WordPress Version Compatibility ==

Regardless of what the "Compatible up to" line says, this plugin should be compatible with all
future versions of WordPress forever. You can count on it because this plugin simply outputs
some HTML text and does not interface to any part of the WordPress core. It could only become 
incompatible if WordPress changes the basics of how shortcodes are defined and called, which is 
extremely unlikely since that would break thousands of plugins, and WordPress has a strong 
commitment to backward compatibility.

== Installation ==

1. Download and unzip the latest release zip file
2. Upload the entire directory to your `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Requirements ==

* PHP 4+
* WordPress 3.0+

== Changelog ==

* 1.0.0 - 2015-10-01 - Initial release version
* 1.1.0 - 2015-11-14 - Simplify the invitation URL shown in the room footer, and tweak documentation.
