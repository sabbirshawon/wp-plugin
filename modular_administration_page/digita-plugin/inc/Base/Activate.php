<?php

/**
* Trigger this file on Plugin uninstall
* 
* @package DigitaPlugin
*/

namespace Inc\Base;


class Activate{

	public static function activate(){

		flush_rewrite_rules();
	}

}