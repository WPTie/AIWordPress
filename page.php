<?php
/**
 * Page Template
 * 
 * The template for displaying all pages.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 	1.0.0
 * @package AIWP
 */

get_header(); ?>

	<div class="aiwp_wrap">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'assets/views/content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</div>
	<!-- /.aiwp_wrap -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>