<div id="mobile-post-area">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="not-found">
			<img src="<?php echo get_template_directory_uri(); ?>/images/not-found.png" width="250">
		</div>
		<p>We're sorry, but the post or page you are looking for is not here. It may have been removed before you got here or you have a bad link. You can either go back to the <a href="<?php echo home_url(); ?>">homepage</a> or use the search form below to find another post.</p>
		<?php get_search_form(); ?>
	</div><!--End Post Class-->
	<?php wp_link_pages(); ?>
</div><!--End Post Area-->