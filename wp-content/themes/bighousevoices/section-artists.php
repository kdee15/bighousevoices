<?php
    $args = array(
        'post_type' => 'artists',
        'post_status' => 'publish',
        'caller_get_posts'=> 1
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