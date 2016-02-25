<?php /* Template Name: Archives */

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
                    
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1
                            );
                            $our_content = new WP_Query( $args );
                            if( $our_content->have_posts() ) {
                              while( $our_content->have_posts() ) {
                                $our_content->the_post();
                                ?>

                                <?php
                                    /* Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'content', 'teaser' );
                                ?>

                                <?php
                              }
                            }
                        ?>
                    
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
