<?php
/**
 * @package bighousevoices
 */
?>

<article id="post-<?php the_ID(); ?>" class="one-quarter artist__item">
    <a href="<?php the_permalink() ?>" class="big card">
        <section class="card__header">
            <figure class="figure">
                <img class="image" src="<?php the_field('photo') ?>" />
            </figure>
        </section>
        <section class="card__body">
            <h3 class="title"><?php the_field('name') ?> <?php the_field('surname') ?></h3>
            <ul class="card__nav grid">
            
                <li class="one-quarter">
                    <a class="full yellow button" href="<?php the_field('audio_1') ?>" target="_blank">A</a>
                </li>
                <li class="one-quarter">
                    <a class="full yellow button" href="<?php the_field('audio_2') ?>" target="_blank">B</a>
                </li>
                <li class="one-quarter">
                    <a class="full yellow button" href="<?php the_field('audio_3') ?>" target="_blank">C</a>
                </li>
                <li class="one-quarter">
                    <a class="full yellow button" href="mailto:wes@bighouse.co.za">MAIL</a>
                </li>
            </ul>
        </section>
    </a>
</article>