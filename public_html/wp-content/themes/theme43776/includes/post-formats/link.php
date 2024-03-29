<article id="post-<?php the_ID(); ?>" <?php post_class('post__holder'); ?>>
	<?php $url =  get_post_meta(get_the_ID(), 'tz_link_url', true); ?>
	<header class="post-header">
		<h2 class="post-title">
			<a target="_blank" href="<?php echo $url; ?>" title="<?php _e('Permalink to:', CURRENT_THEME);?> <?php echo $url; ?>"><span><?php the_title(); ?></span></a>
		</h2>		
	</header>
	
	<!-- Post Content -->
	<div class="post_content">
		<?php the_content(''); ?>
		<div class="clear"></div>
	</div>
	<!-- //Post Content -->
	
	<?php get_template_part('includes/post-formats/post-meta'); ?>

</article><!--//.post-holder-->