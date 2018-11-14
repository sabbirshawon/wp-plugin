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
defined ('ABSPATH') or die ('Hey, what are you doing here? You silly human!');

//Define CONSTANTS

if ( file_exists( dirname(__FILE__).'/vendor/autoload.php' ) ){
	require_once dirname(__FILE__).'/vendor/autoload.php';
}


/**
 * The code that runs during plugin activation
 */

function activate_digita_plugin(){
	Inc\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_digita_plugin');

/**
 * The code that runs during plugin deactivation
 */

function deactivate_digita_plugin(){
	Inc\Base\Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'deactivate_digita_plugin');

/**
 * Initialize all the core classes of the plugin
 */

if( class_exists( 'Inc\\Init' ) ){
	Inc\Init::register_services(); 
}