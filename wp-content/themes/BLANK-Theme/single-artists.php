<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<!-- C.2. MAST -->
<section id="mast">

    <!-- C.2.1 Our Work -->

    <section id="our-work" class="section-banner">

        <section class="image-banner">

            <div class="scaler">

                <div class="container">

                    <div class="wrapper">

                        <h1>One throat to throttle</h1>

                        <a href="<?php bloginfo('url'); ?>/contact">get in touch</a>

                    </div>

                </div>	
            </div>

        </section>

    </section>

    <!-- C.2.1 End -->

    <?php if (have_posts()) : while (have_posts()) : the_post();?>

    <!-- C.2.2 Page Introduction -->

    <section class="section intro-text">
        <div class="container panel">
            <div class="wrapper">
                <p>From strategic brand experiences to creative marketing, Colourworks is dedicated to meeting our clients’ business needs, solving marketing challenges and ensuring that brands receive a return on event or marketing investment.<?php the_field('page_intro') ?></p>
            </div>
        </div>
    </section>

    <!-- C.2.2 End -->

    <?php endwhile; endif; ?>

    <!-- C.2.3 Page Content -->

    <section class="section-content">

        <div class="container panel">

            <!-- C.2.4.1.1. Dynanic Content area -->

            <?php while ( have_posts() ) : the_post(); ?>

            <h3><?php the_title(); ?></h3>

            <?php the_content(); ?>

            <?php endwhile; // end of the loop. ?>

            <!-- C.1.1 End -->

            <!-- C.1.2 Back link -->
            
            <!-- C.1.2 End -->

        </div>

    </section>

    <!-- C.2.3 End -->

    <div class="back-section">
        <a class="link-back" href="<?php bloginfo('url'); ?>/our-work">Back</a>
    </div>

    <!-- C.2.4 Media -->

    <?php get_template_part( 'connect' ); ?>

    <!-- C.2.4 End -->

</section>

<!-- C.2. END -->


<?php get_footer(); ?>