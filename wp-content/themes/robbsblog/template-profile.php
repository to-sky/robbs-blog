<?php
/*
Template Name: Profile
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php
	$name = get_field("name");
	$birth = get_field("date_of_birth");
	$email = get_field("e-mail");
	$address = get_field("address");
	$phone = get_field("phone");
	$website = get_field("website");
	$getThePost = get_post($postId, ARRAY_A);
	$post_content = $getThePost["post_content"];
	
	$data = array(
		'name' => $name,
		'date of birth' => $birth,
		'e-mail' => $email,
		'address' => $address,
		'phone' => $phone,
		'website' => $website,
	);
?>
	<h1 class="greeting">
		Hello, I am <strong class="name-rob"><?php echo $name; ?></strong>
		<br>
		Designer and Front-end Developer
	</h1>
	<p class="about-me"><?php echo $post_content; ?></p>
	<h2 class="personal-info">Personal Info</h2>
	<div class="wrap-tags clearfix">
		<?php foreach ($data as $key => $value) { ?>
				<div class="row-tags">
					<span class="name-tag"><?php echo $key?></span>
					<span class="value-tag"><?php echo $value; ?></span>
				</div>
		<?php } ?>
	</div>

<?php get_footer(); ?>