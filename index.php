<?php get_header(); ?>

<h1>Mon premier modèle Wordpress</h1>

<?php
    if(have_posts()) :
        while(get_post()) : the_post() ?>
            <p>
            <?php the_title(); ?>
            </p>
        <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?>
