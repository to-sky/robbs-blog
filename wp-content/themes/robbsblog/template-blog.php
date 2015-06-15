<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php
	$args = array( 'post_name' => 'blog', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	$postId = get_the_ID();
	$title = get_the_title($postId);
?>
	<h1 class="title"><?php echo $title; ?></h1>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="post">
			<?php the_post_thumbnail('thumbnail'); ?>
			<h2 class="post-title"><?php the_title(); ?></h2>
			<div class="contact-info clearfix">
				<li><i class="fa fa-calendar-o"></i><?php the_time('j F'); ?></li>
				<li><i class="fa fa-user"></i><?php the_author(); ?></li>
				<li><i class="fa fa-comments"></i><?php comments_number(); ?></li>
			</div>
			<p><?php the_content(); ?></p>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>