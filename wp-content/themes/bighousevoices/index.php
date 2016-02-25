<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package crio-msv
 */

get_header(); ?>

	<!-- C.2. SITE MAST ----------------------------------------------------------------------------------- -->
        
    <section class="mast">

        <!-- C.2.1. MAST HEADER -->
        <header class="mast__header">

            <div class="mast__header-text">

                <div class="container">

                    <h1>A little about me.</h1>

                </div>
            </div>

            <figure class="mast__header-image">
            </figure>

        </header>

        <!-- C.2.1. END -->

        <!-- C.2.1. MAST CONTENT -->
        <div class="mast__content">

            <div class="container">

                <?php if ( have_posts() ) : ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h3>LISTINGS</h3>
                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

                <?php else : ?>
                    
                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>

            </div>

        </div>
        <!-- C.2.1. END -->

    </section>

    <!-- C.2. END ----------------------------------------------------------------------------------------- -->

<?php get_footer(); ?>
