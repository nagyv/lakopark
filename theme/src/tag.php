<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="wrapper style1 align-center">
        <div class="inner">

			<h1><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

        </div>
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
