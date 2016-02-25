<?php
/**
 * The template used for displaying page content in front-page.php
 *
 * @package crio-msv
 */
?>

<!-- C.2. SITE MAST ----------------------------------------------------------------------------------------------- -->
        
<article class="mast" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- C.2.1. MAST HEADER -->
    <header class="mast__header">

        <div class="mast__header-text">
            
            <?php get_template_part( 'section-carousel' ); ?>

        </div>

        <figure class="mast__header-image">
        </figure>

    </header>

    <!-- C.2.1. END -->
    
    <!-- C.2.1. MAST CONTENT -->
    <div class="mast__content">

        <div class="container">
            
            <section class="grid home__teasers">
            
                <!-- C.2.1.1. Press content widget -->
                <aside class="homepage__widget aside__press grid__half">
                    
                    <?php get_template_part( 'section-press' ); ?>
                
                </aside>
                
                <!-- C.2.1.2. Blog content widget -->
                <aside class="homepage__widget aside__blog grid__half">
                
                    <?php get_template_part( 'section-blog' ); ?>
                
                </aside>
                
            </section>

        </div>

    </div>
    <!-- C.2.1. END -->
    
</article>    

<!-- C.2. END ----------------------------------------------------------------------------------------------------- -->