<?php /* Template Name: Kapcsolat oldal */ get_header(); ?>

	<main role="main" aria-label="Content">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<?php
		$section_class = get_post_meta(get_the_ID(), "section-class", true);
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
			<section>
				<form method="post" action="https://formspree.io/info@airplastic.hu">
					<div class="field half first">
						<label for="name">Név</label>
						<input type="text" name="name" id="name" value="" />
					</div>
					<div class="field half">
						<label for="email">E-mail</label>
						<input type="email" name="email" id="email" value="" />
					</div>
					<div class="field">
						<label for="message">Üzenet</label>
						<textarea name="message" id="message" rows="6"></textarea>
					</div>
					<input type="hidden" name="_next" value="//jalagati.webfactional.com/lakopark/kapcsolat/uzenet-elkuldve" />
					<ul class="actions">
						<li><input type="submit" name="submit" id="submit" value="Üzenet küldése" /></li>
					</ul>
				</form>
			</section>
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
