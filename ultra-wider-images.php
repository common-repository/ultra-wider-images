<?php
/*
Plugin Name: Ultra Wider Images
Plugin URI: http://wordpress.org/plugins/ultra-wider-images/
Description: Insert wider images on your posts. Images are better if big !
Version: 1.1
Author: Marco Dalprato
Author URI: http://www.marcodalprato.it
Text Domain: ultra-wider-images
Domain Path: /languages
*/

/*  Copyright 2018 Marco Dalprato (email : marcodalprato@me.com)

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
// Example 1 : WP Shortcode to display form on any page or post.



function uwi_ultrawilderimages($atts){
	
	/*
		[ultrawilderimages image="https://www.marcodalprato.it/wp-content/uploads/2018/07/img_2044.jpg"  height="800"  copyright="Apple Store, Piazza Liberty" copyright_link="www.apple.com" copyright_color="white"]
		*/

    $image = $atts["image"];
    $copyright= $atts["copyright"];
    $copyright_link= $atts["copyright_link"];
	$height= $atts["height"];
	$copyright_color= $atts["copyright_color"];
	
	if($height == ""){ // height of the image
		$height = "500";
	}
	
	if($copyright_color == ""){ // color of the copyright text
		$copyright_color = "white";
	}
	
$output = '<div style="

width: 50%;
max-width:800px;
margin: 10px auto;
position: relative;
margin-bottom: 20px;">

	<div style="position: relative;
		width: 100vw;
		height: '.$height.'px;
		
		left: calc(-50vw + 50%);
		background: url('.$image.') no-repeat center;
		 background-size: cover;
    background-clip: border-box;">
    
    <span style="
    position: absolute;
  bottom: 0;
  margin-left:10px;
  font-size: 12px;
  color: white;
  "><a  style=" color: '.$copyright_color.' !important;!" target="_blank"  href="'.$copyright_link.'">'.$copyright.'</a><span>
	</div>
</div> ';

return $output;

		
}
add_shortcode('ultrawilderimages', 'uwi_ultrawilderimages');

?>