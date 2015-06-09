<?php
/*
Template Name: Books
*/
get_header(); ?>

<?php
	$args = array( 'post_type' => 'book', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
	
	while ( $loop->have_posts() ) : $loop->the_post();

	$postId = get_the_ID();
	$thumbId = get_post_thumbnail_id($postId);
	$url = wp_get_attachment_thumb_url($thumbId);
	$title = get_the_title($postId);
	$author = get_field('author');
	$ph = get_field('publishing_house');
	$series = get_field('series');
	$isbn = get_field('isbn');
	$getThePost = get_post($postId, ARRAY_A);
	$post = $getThePost[post_content];
?>
	<div class="book">
		<div class="clearfix">
			<div class="book-pic">
				<img src="<?php echo $url; ?>" alt="cover">
			</div>
			<div class="book-dif">
				<h2 class="book-title"><?php echo $title; ?></h2>
				<p class="book-desc">Автор: <span><?php echo $author; ?></span></p>
				<p class="book-desc">Издательство: <span><?php echo $ph; ?></span></p>
				<p class="book-desc">Серия: <span><?php echo $series; ?></span></p>
				<p class="book-desc">ISBN <span><?php echo $isbn; ?></span></p>
			</div>
		</div>
		<div class="book-about">
			<p><?php echo $post; ?></p>
		</div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>