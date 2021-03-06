<?php

namespace Inc\Pages;

use Inc\Api\SettingsApi;

use Inc\Base\BaseController;

use \Inc\Api\Callbacks\AdminCallbacks;

/**
* 
*/

class Admin extends BaseController
{
	public $settings;

	public $callbacks;

	public $pages = array();

	public $subpages = array();

	public function register() 
	{
		$this->settings = new SettingsApi();

		$this->callbacks = new AdminCallbacks();

		$this->setPages();
		
		$this->setSubpages();

		$this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
	}
	
	public function setPages() 
	{
		$this->pages = array(
			array(
				'page_title' => 'Digita Plugin', 
				'menu_title' => 'Digita', 
				'capability' => 'manage_options', 
				'menu_slug' => 'digita_plugin', 
				'callback' => array( $this->callbacks, 'adminDashboard' ), 
				'icon_url' => 'dashicons-store', 
				'position' => 110
			)
		);
	}
	public function setSubpages()
	{
		$this->subpages = array(
			array(
				'parent_slug' => 'digita_plugin', 
				'page_title' => 'Custom Post Types', 
				'menu_title' => 'CPT', 
				'capability' => 'manage_options', 
				'menu_slug' => 'digita_cpt', 
				'callback' => array( $this->callbacks, 'adminCpt' )
			),
			array(
				'parent_slug' => 'digita_plugin', 
				'page_title' => 'Custom Taxonomies', 
				'menu_title' => 'Taxonomies', 
				'capability' => 'manage_options', 
				'menu_slug' => 'digita_taxonomies', 
				'callback' => array( $this->callbacks, 'adminTaxonomy' )
			),
			array(
				'parent_slug' => 'digita_plugin', 
				'page_title' => 'Custom Widgets', 
				'menu_title' => 'Widgets', 
				'capability' => 'manage_options', 
				'menu_slug' => 'digita_widgets', 
				'callback' => array( $this->callbacks, 'adminWidget' )
			)
		);
	}
}