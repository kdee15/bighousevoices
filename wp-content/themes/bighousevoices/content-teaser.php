<?php
/**
 * @package bighousevoices
 */
?>

<article id="post-<?php the_ID(); ?>" class="one-third">
    
    <a href="<?php the_permalink() ?>" class="big card">

        <section class="card__header">
            <figure class="figure">
                <img class="image" src="<?php the_field('photo') ?>" />
            </figure>
        </section>

        <section class="card__body">
            <h3 class="title"><?php the_field('name') ?> <?php the_field('surname') ?></h3>
            <ul class="grid">
            
                <li class="one-quarter"><a class="full yellow button">A</a></li>
                <li class="one-quarter"><a class="full yellow button">B</a></li>
                <li class="one-quarter"><a class="full yellow button">C</a></li>
                <li class="one-quarter"><a class="full yellow button">MAIL</a></li>
            
            </ul>
        </section>

    </a>

</article>