<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php
		$section_class = get_post_meta(get_theID(), "section-class", true);
		?>
		<!-- section -->
		<section class="wrapper style1 <?php echo $section_class;?>">
        <div class="inner">

			<h1><?php the_title(); ?></h1>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
		</div>
		</section>
		<?php endwhile; ?>
		<?php else: ?>

		<!-- section -->
		<section class="wrapper style1">
        <div class="inner">

			<h1><?php the_title(); ?></h1>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->
		</div>
		</section>
		<!-- /section -->
		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
