<?php get_header(); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="mast">

            <div class="container">

               
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


                    <div class="entry">
                    <?php the_content(); ?>
                    </div>

                    <div class="postmetadata">
                    <?php the_tags('Tags: ', ', ', '<br />'); ?>
                    Posted in <?php the_category(', ') ?> | 
                    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                    </div>

                </div>

                <?php endwhile; ?>

                <?php else : ?>

                <h2>Not Found</h2>

                <?php endif; ?>

                
            </div>
        
    </section>

    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->

    <!-- C.3. SITE FOOTER ----------------------------------------------------------------------------------------- -->

    <?php get_footer(); ?>

    <!-- C.3. END ------------------------------------------------------------------------------------------------- -->

    <!-- C.4. MOBILE MENU ----------------------------------------------------------------------------------------- -->


    <!-- C.4. END ------------------------------------------------------------------------------------------------- -->

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- D.1. GOOGLE ANALYTICS [UNIVERSAL] -->

    <?php include('inc/google-analytics.php'); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->