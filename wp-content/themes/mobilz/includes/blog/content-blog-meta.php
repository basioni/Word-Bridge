<?php 
	global $nz_ninzio;
?>
<div class="post-meta nz-clearfix">
	<?php if (is_single()): ?>
	<div class="single-post-date"><span class="icon-calendar"></span> <?php echo get_the_date(); ?></div>
	<?php endif ?>
	<div class="post-author"><span class="icon-user7"></span><?php echo __("Posted by", TEMPNAME); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>" title="<?php echo __('View all posts by', TEMPNAME); ?> <?php the_author(); ?>"><?php the_author(); ?></a></div>
	<div class="post-category nz-clearfix"><span class="icon-list3"></span><?php the_category("<span class='comma'>, </span>"); ?></div>
	<?php if ($nz_ninzio['blog-comments'] && $nz_ninzio['blog-comments'] == 1): ?>
		<div class="post-comments">
			<span class="icon-thumbs-up"></span>
			<?php if (comments_open()) : ?>
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', TEMPNAME) . '</span>', __( 'One comment so far', TEMPNAME), __( 'View all % comments', TEMPNAME) ); ?>
			<?php else : ?>
				<?php echo __('Comments are off for this post', TEMPNAME); ?>
			<?php endif;?>
		</div>
	<?php endif ?>
</div>