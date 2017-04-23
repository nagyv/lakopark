<?php get_header(); ?>

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
				<form method="post" action="#">
					<div class="field half first">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" value="" />
					</div>
					<div class="field half">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" value="" />
					</div>
					<div class="field">
						<label for="department">Department</label>
						<div class="select-wrapper">
							<select name="department" id="department">
								<option value="">- Category -</option>
								<option value="1">Manufacturing</option>
								<option value="2">Shipping</option>
								<option value="3">Administration</option>
								<option value="4">Human Resources</option>
							</select>
						</div>
					</div>
					<div class="field third first">
						<input type="radio" id="priority-low" name="priority" checked />
						<label for="priority-low">Low Priority</label>
					</div>
					<div class="field third">
						<input type="radio" id="priority-normal" name="priority" />
						<label for="priority-normal">Normal Priority</label>
					</div>
					<div class="field third">
						<input type="radio" id="priority-high" name="priority" />
						<label for="priority-high">High Priority</label>
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="6"></textarea>
					</div>
					<div class="field half first">
						<input type="checkbox" id="copy" name="copy" />
						<label for="copy">Email me a copy of this message</label>
					</div>
					<div class="field half">
						<input type="checkbox" id="human" name="human" checked />
						<label for="human">I am a human and not a robot</label>
					</div>
					<ul class="actions">
						<li><input type="submit" name="submit" id="submit" value="Send Message" /></li>
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
