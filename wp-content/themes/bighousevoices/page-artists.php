<?php 

/*
Template Name: artists template
*/

get_header(); ?>

<section class="artist section grid">

    <?php
        $args = array(
            'post_type' => 'artists',
        );
        $artists = new WP_Query( $args );
        if( $artists->have_posts() ) {
          while( $artists->have_posts() ) {
            $artists->the_post();
            ?>
    
            <article id="post-<?php the_ID(); ?>" class="one-quarter artist__item">
                <a class="big card showhide" href="#card__flyout">
                    <section class="card__header">
                        <figure class="figure">
                            <img class="image" src="<?php the_field('photo') ?>" />
                        </figure>
                    </section>
                    <section class="card__body">
                        <h3 class="title"><?php the_field('name') ?> <?php the_field('surname') ?></h3>
                    </section>
                    <section class="card__flyout hidden" id="card__flyout">
                        HELLO
                    </section>
                </a>
            </article>

            <?php
          }
        }
    ?>

</section>

<?php get_footer(); ?>