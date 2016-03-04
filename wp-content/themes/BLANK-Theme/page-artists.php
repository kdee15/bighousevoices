<?php 

/*
Template Name: artists template
*/

get_header(); ?>

    <?php
        $args = array(
            'post_type' => 'artists',
        );
        $artists = new WP_Query( $args );
        if( $artists->have_posts() ) {
          while( $artists->have_posts() ) {
            $artists->the_post();
            ?>

            <article>
                <div>
                    <a href="<?php the_permalink() ?>">

                            <h3><?php the_title() ?></h3>
                        
                        
                    </a>
                </div>
            </article>

            <?php
          }
        }
    ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
