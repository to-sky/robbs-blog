<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php $front_page_id = get_option('page_on_front'); ?>

	<div>
		<h1 class="error-description"><span class="error-name">404</span><br>This page was not found</h1>
		<a href="<?php echo get_home_url($front_page_id); ?>" class="return" >Return to main page</a>
	</div>

<?php get_footer(); ?>