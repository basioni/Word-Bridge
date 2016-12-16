<?php
/*
Plugin Name: Languages Easy Strings
Plugin URI: http://extend.thecartpress.com/ecommerce-plugins/easystrings/
Description: Easy Strings for Languages
Version: 1.1
Author: TheCartPress team
Author URI: http://thecartpress.com
License: GPL
Parent: thecartpress
*/

/**
 * This file is part of TheCartPress-easystrings.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

define( 'TCP_TEXT_FOLDER'			, dirname( __FILE__ ) . '/' );
define( 'TCP_TEXT_ADMIN_FOLDER'		, TCP_TEXT_FOLDER . 'admin/' );
define( 'TCP_TEXT_TEMPLATES_FOLDER'	, TCP_TEXT_FOLDER . 'templates/' );

class TCPEasyStrings {

	function __construct() {
		add_action( 'admin_menu', array( &$this, 'admin_menu' ), 40 );
		add_action( 'admin_init', array( &$this, 'admin_init' ) );
		add_filter( 'gettext', array( &$this, 'gettext' ), 10, 3 );
		add_filter( 'ngettext', array( &$this, 'ngettext' ), 10, 5 );
	}

	function tcp_texts() {
		$to_do = isset( $_REQUEST['to_do'] ) ? $_REQUEST['to_do'] : false;
		switch( $to_do ) {
		case 'add' :
			$from = isset( $_REQUEST['from'] ) ? $_REQUEST['from'] : false;
			if ( $from ) {
				$to = isset( $_REQUEST['to'] ) ? $_REQUEST['to'] : '';
				$id = tcp_texts_add_text( $from, $to );
				if ( $id === false ) exit( 0 );
				else exit( $id );
			} else {
				exit( 0 );
			}
		case 'remove' :
			$id = isset( $_REQUEST['id'] ) ? $_REQUEST['id'] : false;
			tcp_texts_remove_text( $id );
			exit( 1 );
		case 'modify' :
			$id = isset( $_REQUEST['id'] ) ? $_REQUEST['id'] : false;
			$from = isset( $_REQUEST['from'] ) ? $_REQUEST['from'] : false;
			if ( $from ) {
				$to = isset( $_REQUEST['to'] ) ? $_REQUEST['to'] : '';
				tcp_texts_modify_text( $id, $from, $to );
				exit( $id );
			}
			exit( 0 );
		default :
			exit( 0 );
		}
	}

	function admin_menu() {
		global $thecartpress;
		if ( $thecartpress ) {
			$base = $thecartpress->get_base_tools();
			add_submenu_page( $base, __( 'Easy strings', 'tcp-txt' ), __( 'Easy strings', 'tcp-txt' ), 'tcp_edit_settings', TCP_TEXT_ADMIN_FOLDER . 'texts.php' );
		}
	}

	function admin_init() {
		add_action( 'wp_ajax_tcp_texts', array( $this, 'tcp_texts' ) );
	}

	function gettext( $translation, $text, $domain ) {
		//if ( strpos( $domain, 'tcp', 0) === 0 ) {
			$texts = tcp_texts_get_texts();
			foreach( $texts as $text )
				$translation = str_replace( $text['from'], $text['to'], $translation );
		//}
		return $translation;
	}

	function ngettext( $translation, $single, $plural, $number, $domain ) {
		return $this->gettext( $translation, $single, $domain );
	}
}

new TCPEasyStrings();

require_once( TCP_TEXT_TEMPLATES_FOLDER . 'template.php' );
?>