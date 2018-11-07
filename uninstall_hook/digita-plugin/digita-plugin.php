<?php
/**
* @package DigitaPlugin

*/

/*
Plugin Name: Digita Plugin
Plugin URI: http://digitainteractive.com/plugin
Description: This is my first attemt on writng a custom Plugin for Digita Interactive
Version: 1.0.0
Author: "Sabbir Shawon"
Author URI: https://sabbirshawon.github.io/
License: GPLv2 or Later
Text Domain: Digita-Plugin

*/



/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2018 Automattic, Inc
*/

//	if ( ! defined('ABSPATH')){	
//		die;
//	}


defined ('ABSPATH') or die ('Hey, you can\t access this file, you silly human!');


/*if (! function_exists('add_action')){
	echo 'Hey, you can\t access this file, you silly human!';
	exit;
}*/


class DigitaPlugins 
{
	//methods
	function __construct(){
		add_action ( 'init', array( $this, 'custom_post_type') );
	}
	function activate(){
		// generate a CPT

		$this-> custom_post_type();
		// flush rewrite rules

		flush_rewrite_rules();

	}

	function deactivate(){
		// flush rewrite rules

		flush_rewrite_rules();
	}

	function uninstall(){
		// delete CPT
		// delete all the plugin data from DB
	}

	function custom_post_type(){
		register_post_type( 'pharma' , ['public' => true, 'label' => 'Pharma']);
	}



}
if ( class_exists('DigitaPlugins') ){
	$digitaPlugin = new DigitaPlugins();
}


// activation

register_activation_hook ( __FILE__ , array($digitaPlugin,'activate'));



// deactivation

register_deactivation_hook ( __FILE__ , array($digitaPlugin,'deactivate'));

// uninstall

register_uninstall_hook ( __FILE__ , array($digitaPlugin,'uninstall'));

// register_activation_hook (__FILE__, array(digitaPlugin,'activate'));