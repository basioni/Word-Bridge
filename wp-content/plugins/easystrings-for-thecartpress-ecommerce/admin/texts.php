<?php
/**
 * This file is part of TheCartPress-texts.
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
?>

<div class="wrap">
<h2><?php _e( 'Easy strings', 'tcp-txt' ); ?> <img src="<?php echo admin_url( 'images/loading.gif' ); ?>" id="tcp_texts_feedback" style="display: none;"/></h2>


<div id="dashboard-widgets-wrap">

	<div id="dashboard-widgets" class="metabox-holder">

		<div id="postbox-container-1" class="postbox-container" style="width:70%;">

			<div id="normal-sortables" class="meta-box-sortables ui-sortable">

				<div id="easystrings_table" class="postbox ">

					<h3 class="hndle"><span><?php _e( 'Texts to change', 'tcp' ); ?></span></h3>

					<div class="inside">

						<table class="widefat fixed" cellspacing="0">
						<thead>
						<tr>
							<th scope="col" class="manage-column"><?php _e( 'Text', 'tcp-txt' ); ?></th>
							<th scope="col" class="manage-column"><?php _e( 'Change to', 'tcp-txt' ); ?></th>
							<th scope="col" class="manage-column" style="width: 20%;">&nbsp;</th>
						</tr>
						</thead>

						<tfoot>
						<tr>
							<th scope="col" class="manage-column"><?php _e( 'Text', 'tcp-txt' ); ?></th>
							<th scope="col" class="manage-column"><?php _e( 'Change to', 'tcp-txt' ); ?></th>
							<th scope="col" class="manage-column" style="width: 20%;">&nbsp;</th>
						</tfoot>
						<tbody>
							<tr id="tcp_row_new">
								<td>
									<input type="text" id="tcp_texts_from_new" value="" size="20" maxlength="50" />
								</td>
								<td>
									<input type="text" id="tcp_texts_to_new" value="" size="20" maxlength="50" />
								</td>
								<td>
									<a href="#" class="tcp_add" ><?php _e( 'Add', 'tcp-txt' ); ?></a>
								</td>
							</tr>

						<?php $texts = tcp_texts_get_texts();
						//sanitize_key
						if ( is_array( $texts ) || count( $texts ) > 0 ) :
							foreach( $texts as $id => $text ) : ?>
							<tr id="tcp_row_<?php echo $id; ?>">
								<td>
									<input type="text" id="tcp_texts_from_<?php echo $id; ?>" value="<?php echo $text['from']; ?>" size="20" maxlength="50" readonly="true"/>
								</td>
								<td>
									<input type="text" id="tcp_texts_to_<?php echo $id; ?>" value="<?php echo $text['to']; ?>" size="20" maxlength="50" />
								</td>
								<td>
									<a href="#" class="tcp_modify" target="<?php echo $id; ?>"><?php _e( 'Modify', 'tcp-txt' ); ?></a> |
									<a href="#" class="tcp_delete" target="<?php echo $id; ?>"><?php _e( 'Delete', 'tcp-txt' ); ?></a>
									<div id="tcp_delete_form_<?php echo $id; ?>" style="display: none;" class="tcp_delete_form">
									<p><?php _e( 'Do you really want to delete this text?', 'tcp-txt' ); ?></p>
									<a href="#" class="tcp_delete_yes" target="<?php echo $id; ?>"><?php _e( 'Yes', 'tcp-txt' ); ?></a>|
									<a href="#" class="tcp_delete_no" target="<?php echo $id; ?>"><?php _e( 'No, I don\'t', 'tcp-txt' ); ?></a>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						<?php else : ?>
							<tr>
								<td colspan="3"><?php _e( 'No texts', 'tcp-txt' ); ?></td>
							</tr>
						<?php endif; ?>
						</tbody>
						</table>

					</div><!-- #inside -->

				</div><!-- #easystrings_table -->

			</div><!--#normal-sortables-->

		</div><!-- #postbox-container-1-->

		<div id="postbox-container-2" class="postbox-container" style="width:30%;">

			<div id="side-sortables" class="meta-box-sortables ui-sortable">

				<div id="thecartpress_info" class="postbox ">

					<h3 class="hndle"><span><?php _e( 'Support', 'tcp' ); ?></span></h3>

					<div class="inside">
					HOLAAAAA
					</div><!-- #inside -->

				</div><!-- #thecartpress_info -->

			</div><!--#side-sortables-->

		</div><!-- #postbox-container-2-->

	</div><!--#dashboard-widgets -->

</div><!--dashboard-widgets-wrap-->

<script>
jQuery(document).ready(function() {
	jQuery(".tcp_add").click(function() {
		var from = jQuery('#tcp_texts_from_new').val();
		var to = jQuery('#tcp_texts_to_new').val();
		jQuery('#tcp_texts_feedback').show();
		jQuery.ajax({
	    	async	: true,
			type    : "GET",
			url		: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
			data	: {
				action	: 'tcp_texts',
				to_do	: 'add',
				from	: from,
				to		: to,
			},
			success : function(response) {
				jQuery('#tcp_texts_feedback').hide();
				if (response != '0') {
					id = response;
		var html = '<tr id="tcp_row_' + id + '">';
		html += '<td><input type="text" id="tcp_texts_from_' + id + '" value="' + from + '" size="20" maxlength="50" readonly="true" >';
		html += '</td><td>';
		html += '<input type="text" id="tcp_texts_to_' + id + '" value="' + to + '" size="20" maxlength="50" >';
		html += '</td><td>';
		html += '<a href="#" class="tcp_modify" target="' + id + '"><?php _e( 'Modify', 'tcp-txt' ); ?></a> |';
		html += '<a href="#" class="tcp_delete" target="' + id + '"><?php _e( 'Delete', 'tcp-txt' ); ?></a>';
		html += '<div id="tcp_delete_form_' + id + '" style="display:none;" class="tcp_delete_form">';
		html += '<p><?php _e( 'Do you really want to delete this text?', 'tcp-txt' ); ?></p>';
		html += '<a href="#" class="tcp_delete_yes" target="' + id + '"> <?php _e( 'Yes', 'tcp-txt' ); ?> </a>|';
		html += '<a href="#" class="tcp_delete_no" target="' + id + '"> <?php _e( 'No', 'tcp-txt' ); ?> </a>';
		html += '</div></td></tr>';
					jQuery('#tcp_row_new').after(html);
					activate_links(id);
					jQuery('#tcp_texts_from_new').val('')
					jQuery('#tcp_texts_to_new').val('')
				}
			},
			error	: function(response) {
				jQuery('.tcp_texts_feedback').hide();
			},
		});
		return false;
	});

	jQuery('.tcp_delete').each(function() {
		var id = jQuery(this).attr('target');
		activate_links(id);
	});
});

function activate_links(id) {

	jQuery('.tcp_modify[target=' + id + ']').click(function() {
		var from = jQuery('#tcp_texts_from_' + id).val();
		var to = jQuery('#tcp_texts_to_' + id).val();
		jQuery('#tcp_texts_feedback').show();
		jQuery.ajax({
	    	async	: true,
			type    : "GET",
			url		: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
			data	: {
				action	: 'tcp_texts',
				to_do	: 'modify',
				id		: id,
				from	: from,
				to		: to,
			},
			success : function(response) {
				jQuery('#tcp_texts_feedback').hide();
				if (response != '1') {
					jQuery('#tcp_texts_to_' + id).val(to);
				}
			},
			error	: function(response) {
				jQuery('.tcp_texts_feedback').hide();
				jQuery('#tcp_texts_to_new').val(to);
			},
		});
		return false;
	});

	jQuery('.tcp_delete_yes[target=' + id + ']').click(function() {
		jQuery('#tcp_texts_feedback').show();
		jQuery.ajax({
	    	async	: true,
			type    : "GET",
			url		: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
			data	: {
				action	: 'tcp_texts',
				to_do	: 'remove',
				id		: id,
			},
			success : function(response) {
				jQuery('#tcp_texts_feedback').hide();
				jQuery('#tcp_row_' + id).remove();
			},
			error	: function(response) {
				jQuery('.tcp_texts_feedback').hide();
			},
		});
		return false;
	});
	jQuery('.tcp_delete[target=' + id + ']').click(function() {
		jQuery('.tcp_delete_form').hide();
		jQuery('#tcp_delete_form_' + id).show(200);
		return false;
	});
	jQuery('.tcp_delete_no[target=' + id + ']').click(function() {
		jQuery('#tcp_delete_form_' + id).hide(100);
		return false;
	});
}
</script>

</div>