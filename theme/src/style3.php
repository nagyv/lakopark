<?php /* Template Name: Korben levo kis kep, jobbra szoveg */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="banner onload-image-fade-in onload-content-fade-right style3 fullscreen orient-right image-position-left content-align-center">
        <div class="content">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

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
