<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="wrapper style1 align-center">
        <div class="inner">

			<h1><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

        </div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
