<?php /* Template Name: Project Archives */

get_header(); ?>

	<!-- C.2. SITE MAST ----------------------------------------------------------------------------------- -->
        
    <section class="mast">

        <!-- C.2.1. MAST HEADER -->
        <header class="mast__header">

            <div class="mast__header-text">

                <div class="container">

                    <h1>Projects Matt's involved in.</h1>

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

                    <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', 'projects', get_post_format() );
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
