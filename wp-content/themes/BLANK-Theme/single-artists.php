<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage bighousevoices
 */

get_header(); ?>

<p>single custom</p>

<!-- C.2. MAST -->
<section>

            <?php while ( have_posts() ) : the_post(); ?>

            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>

            <?php endwhile; // end of the loop. ?>

</section>

<!-- C.2. END -->


<?php get_footer(); ?>