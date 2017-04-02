<?php /* Template Name: Korben levo kis kep, jobbra szoveg */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<!-- article -->
		<article id="post-<?php the_ID(); ?>">
		<section class="spotlight onload-image-fade-in onload-content-fade-right style2 fullscreen orient-right image-position-left content-align-center">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php } ?>
        <div class="content">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		<?php endif; ?>

		</div>
		</section>
		</article>
			<!-- /article -->
		<!-- /section -->
	</main>

<?php get_footer(); ?>
