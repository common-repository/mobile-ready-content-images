<?php
/*
Plugin Name: Mobile Ready Content Images
Plugin URI: http://www.mesasix.com
Description: Server side detection of mobile devices to serve appropriate images in wordpress contents.
Version: 0.0.1
Author: Matthew Suan, Felomino Gorne
Author URI:  http://www.mesasix.com
License: GPL2


    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include('simple_html_dom.php');
include('Mobile_Detect.php');

function mobileFilter($content) {

$html = str_get_html($content);
$detect = new Mobile_Detect();
$newHTML = $html;
	foreach($html->find('img') as $e){
	
		if ($detect->isMobile() && !$detect->isTablet() && isset($e->mobile)) {
			$rep = $e->mobile;
			$e->src = $rep; 
			$newHTML = $html;}
		elseif($detect->isTablet() && isset($e->tablet)) {
			$rep = $e->tablet;
			$e->src = $rep;
			$newHTML = $html; }
		else {
		$newHTML = $html;
		}
	}

	return $newHTML;
}
add_filter( 'the_content', 'mobileFilter');
?>