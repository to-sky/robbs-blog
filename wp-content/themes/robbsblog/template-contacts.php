<?php
/*
Template Name: Contacts
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php
	$getThePost = get_post($postId, ARRAY_A);
	$post_content = $getThePost["post_content"];
	$postId = get_the_ID();
	$title = get_the_title($postId);
	$user_info = get_userdata(1);
?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="pic clearfix">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6303.649353979466!2d144.9644761190491!3d-37.81757539330728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sru!4v1433592635866" width="640" height="360" frameborder="0" style="border:0"></iframe>
				</div>
				<h2><?php echo $title; ?></h2>
				<p><?php echo $post_content; ?></p>
				<div class="contact-info clearfix">
					<li><i class="fa fa-home"></i>Lorem ipsum street</li>
					<li><i class="fa fa-phone"></i>+399 (500) 321 9548</li>
					<li><i class="fa fa-envelope-o"></i><?php echo $user_info->user_email; ?></li>
				</div>
				<h2 class="send-msg">Send us a message</h2>
				
<?php echo do_shortcode( '[contact-form-7 id="200" title="Send us a message"]' ); ?>
		
<?php get_footer(); ?>