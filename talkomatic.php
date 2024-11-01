<?php
/*
Plugin Name: Talkomatic
Plugin URI: http://just.thinkofit.com/talkomatic-wordpress-plugin/
Description: Embed a Talkomatic chat room in a WordPress page or post
Version: 1.1.0
Author: David R. Woolley
Author URI: http://thinkofit.com/drwool
*/

/*  Copyright 2015 David R. Woolley  (email : drwool@thinkofit.com)

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
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/* 
	This plugin provides a shortcode for embedding a Talkomatic chat room in
	a WordPress page or post, using an iframe. See the readme.txt file for instructions.
*/

function drw_talkomatic_func ( $attr ) {

	$width = isset($attr['width']) ? $attr['width'] : 900;
	$height = isset($attr['height']) ? $attr['height'] : 850;

	$out = '<iframe src="http://talko.cc';

	if (isset($attr['room'])) {
		$out .= '/go?r=' . toZvvyCode($attr['room'], 46);
	}

	$out .= '" width="' . $width . '" height="' . $height . '"></iframe>';
	return $out;
}


//
//	toZvvyCode: Convert a string to ZvvyCode encoding.
//		written by David R. Woolley, Thinkofit, Inc.	www.thinkofit.com
//
//
//	Arguments:
//		str		String to be encoded
//		escChr	Character code to use as the escape character, given as a numeric value.
//				(For example, to make backslash the escape character, use a value of 92 or 0x5c.)
//				MUST NOT BE A LETTER (a-z, A-Z) OR DIGIT (0-9). Any other character code is valid.
//
//	Returns:
//		ZvvyCode encoded string, or empty string if original string is empty
//
//	The fromZvvyCode function, which decodes a ZvvyCoded string, is not included here, 
//	but it can be found at:  http://just.thinkofit.com/zvvycode
//
//

function toZvvyCode ($str, $escChr) {

	if ($str == '') {
		// If string is empty, return empty.
		return ('');
	}

	$lth = strlen($str);
	$escChrStr = chr($escChr);

	// Begin with two escape characters, the "zvvy" identifier, and two more escapes.
	$rs = $escChrStr.$escChrStr."zvvy".$escChrStr.$escChrStr;

	for ($i = 0; $i < $lth; $i++) {
		$ch = ord($str{$i});
		if (($ch >= 0x30 && $ch <= 0x39) || ($ch >= 0x41 && $ch <= 0x5A) || ($ch >= 0x61 && $ch <= 0x7A)) {
			// Copy a-z, A-Z, and 0-9 as-is.
			$rs .= $str{$i};
		}
		else {
			// Output a hex character value surrounded by escape characters.
			$rs .= $escChrStr . dechex($ch) . $escChrStr;
		}
	}
	return ($rs);
}


add_shortcode ('talkomatic', 'drw_talkomatic_func');

?>
