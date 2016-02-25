<?php /* Template Name: Posts by Category */

get_header(); ?>

	<!-- C.2. SITE MAST ----------------------------------------------------------------------------------- -->
        
    <section class="mast">

        <!-- C.2.1. MAST HEADER -->
        <header class="mast__header">

            <div class="mast__header-text">

                <div class="container">

                    <h1>A little about Matt.</h1>
                    
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
                    
                        <?php 

                            // Willem se kak
                            if (is_category( )) {
                                $cat = get_query_var('cat');
                                $yourcat = get_category ($cat);
                            }

                            // Make a header for the cateogry
                            echo "<h3 class='category-title'>".$yourcat->name."</h3>";

                            // create a custom wordpress query
                            query_posts(array(
                                'cat' => $cat,
                                'posts_per_page' => 100,
                                'post_type' => array('post'),
                            ));

								// start the wordpress loop!
								if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php // create our link now that the post is setup ?>

                                    <?php
                                        /* Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'content', 'teaser' );
                                    ?>

								<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                    
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
