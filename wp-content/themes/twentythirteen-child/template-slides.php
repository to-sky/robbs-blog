<?php
/*
Template Name: Slides
*/

get_header(); ?>
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">

<?php
	$args = array( 'post_type' => 'slider', 'posts_per_page' => -1 );
	$loop = new WP_Query( $args );
?>
<div class="fotorama">
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>				
		<img src="http://s.fotorama.io/1.jpg">
	<?php endwhile; ?>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<?php get_footer(); ?>