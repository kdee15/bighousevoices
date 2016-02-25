<?php
/**
 * The template for displaying 404 pages (not found).
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

                    <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'crio-msv' ); ?></h1>
                    
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
                    
                        <div class="page-content">
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'crio-msv' ); ?></p>
                            
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="button-skew">Back</a>

                        </div><!-- .page-content -->
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