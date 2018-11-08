<?php

/**
* Trigger this file on Plugin uninstall
* 
* @package DigitaPlugin
*/


class DigitaPluginActivate{

	public static function activate(){

		flush_rewrite_rules();
	}

}