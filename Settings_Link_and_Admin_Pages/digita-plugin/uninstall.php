<?php

/**
* Trigger this file on Plugin uninstall
* 
* @package DigitaPlugin
*/

if( ! defined ('WP_UNINSTALL_PLUGIN') ){
	die;
}

// Clear Database stored data

$pharmas = get_posts( array('post_type' => 'pharma', 'numberposts' => -1) );

foreach ( $pharmas as $pharma ) {
	# code...
	wp_delete_post( $pharma->ID, true );

}

//Access the database via SQL

global $wpdb;

$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'pharma' " );

$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");

$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");