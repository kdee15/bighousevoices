<?php
/**
 * The template for displaying all single posts.
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

                    <h1><?php the_field('page_tagline'); ?></h1>
                    
                </div>
            </div>

            <figure class="mast__header-image">
            </figure>

        </header>

        <!-- C.2.1. END -->

        <!-- C.2.1. MAST CONTENT -->
        <div class="mast__content">

            <div class="container">
                
                <!-- C.2.1.1. Grid area -->
                
                <div class="grid">
                
                    <!-- C.2.1.1.1. Sidebar -->
                    
                    <?php get_sidebar(); ?>
                    
                    <!-- C.2.1.1.1. End -->
                    
                    <!-- C.2.1.1.2. Content -->
                    
                    <div class="grid__content">
                    
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'content', 'single' ); ?>

                            <?php the_post_navigation(); ?>

                        <?php endwhile; // end of the loop. ?>
                    
                    </div>
                    
                    <!-- C.2.1.1.2. End -->
                
                </div>
                
                <!-- C.2.1.1. End -->

            </div>

        </div>
        <!-- C.2.1. END -->

    </section>

    <!-- C.2. END ----------------------------------------------------------------------------------------- -->

<?php get_footer(); ?>