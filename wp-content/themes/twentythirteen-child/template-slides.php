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
	<?php while ( $loop->have_posts() ) : $loop->the_post(); 
		$postId = get_the_ID();
		$thumbId = get_post_thumbnail_id($postId);
		$url = wp_get_attachment_thumb_url($thumbId);
	?>			
		<a href="<?php echo  ?>"><img src="<?php echo $url; ?>"></a>
	<?php endwhile; ?>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<?php get_footer(); ?>