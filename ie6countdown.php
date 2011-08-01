<?php
/*
Plugin Name: IE6Countdown
Plugin URI: http://www.patrickgarman.com/
Description: Automatically adds in the code from http://www.ie6countdown.com/join-us.aspx to your website. No need for theme edits.
Version: 1.0
Author: Patrick Garman
Author URI: http://www.patrickgarman.com/
License: GPLv2
*/

/*  Copyright 2011  Patrick Garman  (email : patrickmgarman@gmail.com)

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


add_action('plugins_loaded', 'init_ie6countdown');
function init_ie6countdown() { $ie6countdown= new ie6countdown; }

class ie6countdown {

	function __construct() {
		add_action('wp_footer', array(&$this,'add_code'));
	}

	function add_code() {
		echo '<!--[if lt IE 7]><div style="height:42px; width:100%; text-align:center; position:fixed; top:0;"> <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->';
	}

}