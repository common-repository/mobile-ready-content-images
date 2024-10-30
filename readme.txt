=== Mobile Ready Content Images ===
Contributors: jervenmatthew, felomino
Donate link: http://www.mesasix.com
Tags: mobile, content images, images, responsive, responsive images
Requires at least: 3.0.1
Tested up to: 3.5.1
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Server side detection of mobile devices to serve appropriate inline-images in wordpress contents through <img> tags attributes..

== Description ==

Server side detection of mobile devices to serve appropriate images in wordpress contents. Detects all mobile devices including all tablet devices such as iPad, iPhones, Nokia Lumia and or Nexus 10 and 7. This plugin uses Mobile_detect from http://mobiledetect.net/ in detecting mobile devices and Simple HTML DOM Parser from http://simplehtmldom.sourceforge.net.



== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `mobile-ready-images.zip` to the `/wp-content/plugins/` directory
2. Unzip the zipped file.
3. Activate the plugin through the 'Plugins' menu in WordPress
4. In your img tags, just put in the url of the images you want to display in mobile as a "mobile" attribute value. Ex: img src="original-image.png" mobile="image-for-mobile.png" tablet="image-for-tablet.png" 

== Frequently Asked Questions ==

= Can you give an example markup code? =

img src="original-image.png" mobile="image-for-mobile.png" tablet="image-for-tablet.png"

= Can this work on images outside the wordpress $content strings? =

Not yet. As of this moment, this only works on images inside the $content string.

== Screenshots ==

No screenshot.

== Changelog ==

= 0.0.1 =
* alpha version

== Upgrade Notice ==

= 0.0.1 =
No upgrade os of the moment.



== Supported devices ==
1. All mobile phones.
2. All tablet devices.

