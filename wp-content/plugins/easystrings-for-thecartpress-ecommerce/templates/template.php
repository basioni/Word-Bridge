<?php
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

function tcp_texts_remove_text( $id ) {
	$texts = tcp_texts_get_texts();
	unset( $texts[$id] );
	update_option( 'tcp_texts', $texts );
	return $id;
}

function tcp_texts_add_text( $from, $to ) {
	$texts = tcp_texts_get_texts();
	$id = sanitize_key( $from );
	if ( ! isset( $texts[$id] ) ) {
		$texts[$id] = array(
			'from'	=> $from,
			'to'	=> $to,
		);
		update_option( 'tcp_texts', $texts );
		return $id;
	} else {
		return false;
	}
}

function tcp_texts_modify_text( $id, $from, $to ) {
	$texts = tcp_texts_get_texts();
	$texts[$id] = array(
		'from'	=> $from,
		'to'	=> $to,
	);
	update_option( 'tcp_texts', $texts );
	return $id;
}

function tcp_texts_get_texts() {
	return get_option( 'tcp_texts', array() );
}
?>