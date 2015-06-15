<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<h1 class="greeting">
		<strong class="name-rob"><?php the_title(); ?></strong>
	</h1>
	<p class="about-me"><?php the_content(); ?></p>

<?php endwhile; ?>

<?php get_footer(); ?>