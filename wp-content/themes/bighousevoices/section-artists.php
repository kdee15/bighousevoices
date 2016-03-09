
<!-- C.2.6. ARTISTS -->

<section class="section section-bobCasestudies" id="section-casestudies">

    <div class="container">

        <!-- C.2.6.1. Page Title -->

        <section class="section-header">
            <figure class="figure-header"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/casestudies/header-icon.png" alt="page header"></figure>
            <h2>our artists</h2>
            <span></span>
        </section>

        <!-- C.2.6.2. Case Study List -->
        
        <ul class="grid-group casestudies-group">
            

        <?php
            $args = array(
                'post_type' => 'artists',
            );
            $artists = new WP_Query( $args );
            if( $artists->have_posts() ) {
              while( $artists->have_posts() ) {
                $artists->the_post();
                ?>
            
                <li class="grid-item casestudies-item view view-tenth">
                    
                    <img src="<?php the_field('photo') ?>" alt="client logo" class="bob-mainImg" />
                    
                    <div class="mask">
                        <div class="foil">
                            
                            <p class="media-title bob-caseHover">CORPORATE</p>
                            
                            <? php the_content(); ?>
                            
                            <a href="#cs-1" class="reveal button">
                                <span>VIEW CASE STUDY</span>
                            </a>
                        </div>
                    </div>
                    
                </li>
            
                <?php
              }
            }
        ?>

        </ul>

    </div>                 

</section>

<!-- C.2.6. END -->