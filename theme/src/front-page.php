<?php /* Template Name: Kozepso szoveg, korbe keppel */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<article id="post-<?php the_ID(); ?>">
		<section class="banner style2 onload-image-fade-in onload-content-fade-right fullscreen orient-center content-align-center image-position-center">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php } ?>
        <div class="content">
				<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'widget-area-1' ); ?>
					</div>
				<?php endif; ?>
			<header>
			<img src="/wp-content/uploads/sites/14/2017/06/holtmaros_logo_fa_szurke.png" />
			<h1><?php the_title(); ?></h1>
			<p><?php bloginfo( 'description' ); ?></p>
			</header>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		<?php endif; ?>

		</div>
		</section>
		</article>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
