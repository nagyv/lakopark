<?php

// Start the loop.
while ( have_posts() ) : the_post();

    the_title( '<h2 class="major">', '</h2>' );
    the_content();

// End the loop.
endwhile;

wp_footer();