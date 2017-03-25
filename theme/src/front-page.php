<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="banner style2 onload-image-fade-in onload-content-fade-right fullscreen orient-center content-align-center image-position-center">
        <div class="content">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</div>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php } ?>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
