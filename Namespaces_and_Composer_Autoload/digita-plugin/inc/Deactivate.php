<?php

/**
* Trigger this file on Plugin uninstall
* 
* @package DigitaPlugin
*/

namespace Inc;

class Deactivate{

	public static function deactivate(){

		flush_rewrite_rules();
		
	}

}