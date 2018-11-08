<?php

/**
* Trigger this file on Plugin uninstall
* 
* @package DigitaPlugin
*/


class DigitaPluginDeactivate{

	public static function deactivate(){

		flush_rewrite_rules();
		
	}

}