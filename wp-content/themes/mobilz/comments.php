<?php
	
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
		die ('Please do not load this page directly.');
	}

	if ( post_password_required() ) { ?>
		<?php echo __('This post is password protected. Enter the password to view comments.', TEMPNAME); ?>
	<?php
		return;
	}

?>

<div id="comments" class="post-comments-area">

	<?php if ( have_comments() ) : ?>

		<h3 class="comments-title">
			<?php printf( _nx( '1 comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), TEMPNAME), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
		</h3>

		<!-- cooment list start -->
		<section class="comment-list">
	        <?php

				function ninzio_comment( $comment, $args, $depth ) {

					$GLOBALS['comment'] = $comment;

					switch ( $comment->comment_type ) :
						case 'pingback' :
						case 'trackback' :
						
					?>
					<div <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
						<?php echo __( 'Pingback:', TEMPNAME); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', TEMPNAME ), '<span class="edit-link">', '</span>' ); ?>
					</div>
					<?php

						break;
						default :

						global $post;
					?>
					<div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

						<article id="comment-<?php comment_ID(); ?>" class="comment-body">
							
							<?php if ( '0' == $comment->comment_approved ) : ?>
								<p class="comment-awaiting-moderation"><?php __( 'Your comment is awaiting moderation.', TEMPNAME); ?></p>
							<?php endif; ?>

							<?php if ("" !=  get_avatar($comment, 60)): ?>

								<aside class="comment-gavatar ninzio-gavatar">
									<?php echo get_avatar( $comment, 60 ); ?>
								</aside>
								
							<?php endif ?>

							<section class="comment-content">

								<header class="comment-meta">

									<div class="comment-author">
										<?php printf( '<cite>%1$s %2$s</cite>', get_comment_author_link(), ( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', TEMPNAME) . '</span>' : ''); ?>
									</div>
									<div class="comment-date-time">
										<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>', esc_url( get_comment_link( $comment->comment_ID ) ), get_comment_time( 'c' ), sprintf( __( '%1$s at %2$s', TEMPNAME), get_comment_date(), get_comment_time() )); ?>
									</div>
									<div class="replay">
										<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', TEMPNAME), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
									</div>

								</header>

								<article class="comment-text nz-clearfix">
									<?php comment_text(); ?>
								</article>

								<?php edit_comment_link( __( 'Edit', TEMPNAME), '<span class="edit-link">', '</span>' ); ?>

							</section>

						</article>
					</div>
					<?php
						break;
					endswitch;
				}

				wp_list_comments( array( 'callback' => 'ninzio_comment' ) );

			?>
		</section>
		<!-- cooment list end -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

			<nav class="navigation comment-navigation" role="navigation">
				<h3 class="screen-reader-text section-heading"><?php echo __( 'Comment navigation', TEMPNAME); ?></h3>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', TEMPNAME) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', TEMPNAME) ); ?></div>
			</nav>

		<?php endif; ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
			<p><?php echo __( 'Comments are closed', TEMPNAME); ?></p>
		<?php endif; ?>

	<?php endif;?>

	<?php 

		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$fields =  array(
			'author' => '<p class="comment-form-author"><input class="ninzio-placeholder" name="author" type="text" tabindex="1" data-placeholder="'.__('Name *', TEMPNAME).'" value="'.__('Name *', TEMPNAME).'" size="30" ' . $aria_req . ' /></p>',
			'email'  => '<p class="comment-form-email"><input class="ninzio-placeholder" name="email" type="text" tabindex="2" data-placeholder="'.__('E-Mail *', TEMPNAME).'" value="'.__('E-Mail *', TEMPNAME).'" size="30" ' . $aria_req . ' /></p>',
			'url' 	 => '<p class="comment-form-url"><input class="ninzio-placeholder" name="url" type="text" tabindex="3" data-placeholder="'.__('Website', TEMPNAME).'" value="'.__('Website', TEMPNAME).'" size="30" /></p>'
		);

		$comments_args = array(

			'fields'              => $fields,
			'comment_field'       => '<div class="nz-clearfix"></div><p class="respond-textarea"><textarea id="comment" name="comment" aria-required="true" cols="58" rows="10" tabindex="4"></textarea></p>',
			'comment_notes_after' => '',
			'label_submit'        => __('Submit comment', TEMPNAME)
		);

		comment_form($comments_args);

	?>

</div>