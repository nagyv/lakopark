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
			<header>
			<h1><?php the_title(); ?></h1>
			<p><?php bloginfo( 'description' ); ?></p>
			</header>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
				<?php html5blank_nav(1); ?>

		<?php endwhile; ?>

		<?php else: ?>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		<?php endif; ?>

		</div>
		</section>
		</article>
		<!-- /section -->
		<!-- Gallery -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Gallery</h2>
							<p>This is a <strong>Gallery</strong> element. It can behave as a lightbox (when given the <code>lightbox</code> class), and you can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-gallery">details</a>).</p>
						</div>

						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in">
								<article>
									<a href="images/gallery/fulls/01.jpg" class="image">
										<img src="images/gallery/thumbs/01.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/02.jpg" class="image">
										<img src="images/gallery/thumbs/02.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/03.jpg" class="image">
										<img src="images/gallery/thumbs/03.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/04.jpg" class="image">
										<img src="images/gallery/thumbs/04.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/05.jpg" class="image">
										<img src="images/gallery/thumbs/05.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/06.jpg" class="image">
										<img src="images/gallery/thumbs/06.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/07.jpg" class="image">
										<img src="images/gallery/thumbs/07.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/08.jpg" class="image">
										<img src="images/gallery/thumbs/08.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/09.jpg" class="image">
										<img src="images/gallery/thumbs/09.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/10.jpg" class="image">
										<img src="images/gallery/thumbs/10.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/11.jpg" class="image">
										<img src="images/gallery/thumbs/11.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/12.jpg" class="image">
										<img src="images/gallery/thumbs/12.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
							</div>

					</section>
	</main>

<?php get_footer(); ?>
