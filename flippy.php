<?php
/*
Plugin Name: flippy
Description: Wordpress plugin to create URLs provided by Coupons Inc Algorithm (which is provided in C#)
Version: 1.0
Author: Benjamin Ashby
Author Email: ben.ashby2@gmail.com
License:

  Copyright 2013 Benjamin Ashby (ben.ashby2@gmail.com)
  
*/



$html = "";



//*************************************************************************//
//Calling of the shortcode from the function as [imgrevolve front='' back='' height='' width='']**//
//***********************************************************************//
function ImgRevolveShortcode() {
	add_shortcode('flippy', 'ImgRevolve');
}

function ImgRevolve($atts, $content = "null" ){
	global $html;

	return $html;
}

add_action( 'init', 'ImgRevolveShortcode' );

?>