<?php
/**
 * Template Name: Mod spt
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<table>
		<tr>
			<td>First</td>
			<td>Second</td>
			<td>Third</td>
		</tr>
		<tr>
			<td>First</td>
			<td>Second</td>
			<td>Third</td>
		</tr>
		<tr>
			<td>First</td>
			<td>Second</td>
			<td>Third</td>
		</tr>
	</table>
<?php get_sidebar(); ?>
<?php get_footer(); ?>