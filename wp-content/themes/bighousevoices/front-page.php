<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage crio-msv
 */

get_header(); ?>

<?php get_template_part( 'content', 'front' ); ?>

<?php if ( is_active_sidebar( 'homepage' ) ) : ?>
    
    <section class="section__widgets">

        <div class="container">
            <?php dynamic_sidebar( 'homepage' ); ?>
        </div><!-- #primary-sidebar -->

    </section>

<?php endif; ?>
 

<?php get_footer(); ?>