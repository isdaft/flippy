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



$html = <<<EOD
<style>
.flippy {
	position: relative;
	z-index: 1;
	overflow: visible;
}
.flippy {
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	-o-perspective: 1000px;
	perspective: 1000px;
}
.flippy-content {
	width: 100%;
	height: 100%;
	-webkit-transform-style: preserve-3d;
	-webkit-transition: all 0.50s ease-in-out;
	-moz-transform-style: preserve-3d;
	-moz-transition: all 0.50s ease-in-out;
	-o-transform-style: preserve-3d;
	-o-transition: all 0.50s ease-in-out;
	transform-style: preserve-3d;
	transition: all 0.50s ease-in-out;
}
.flippy:hover .flippy-content, .flippy.hover_effect .flippy-content {
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	transform: rotateY(180deg);
}
.flippy-front, .flippy-back
{
	position: absolute;
	width: 100%;
	height: 100%;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	backface-visibility: hidden;
}
.flippy-back {
	display: block;
	-webkit-transform: rotateY(180deg);
	-webkit-box-sizing: border-box;
	-moz-transform: rotateY(180deg);
	-moz-box-sizing: border-box;
	-o-transform: rotateY(180deg);
	-o-box-sizing: border-box;
	transform: rotateY(180deg);
	box-sizing: border-box;
}
</style>
<div class="flippy" style="[CSS]">
	<div class="flippy-content">
 		<div class="flippy-front">
[FRONT]
 		</div>
 		<div class="flippy-back">
[BACK]
 		</div>
 	</div>
</div>
EOD;



//*************************************************************************//
//Calling of the shortcode from the function as [imgrevolve front='' back='' height='' width='']**//
//***********************************************************************//
function ImgRevolveShortcode() {
	add_shortcode('flippy', 'ImgRevolve');
}

function ImgRevolve($atts, $content = "null" ){
	global $html;

	$css = 'height: ' . $atts['height'] . 'px; width: ' . $atts['width'] . 'px;';

	return str_replace('[FRONT]', $atts['front'], 
		str_replace('[CSS]', $css, 
			str_replace('[BACK]', $atts['back'], $html)));
}

add_action( 'init', 'ImgRevolveShortcode' );

?>