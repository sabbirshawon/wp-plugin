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
if ( file_exists( dirname(__FILE__).'/vendor/autoload.php' ) ){
	require_once dirname(__FILE__).'/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));

if( class_exists( 'Inc\\Init' ) ){
	Inc\Init::register_services(); 
}