<?php get_header(); ?>

<h1>Mon premier modèle Wordpress - Articles</h1>

<?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php
                $titre = get_the_title();
                $sigle = substr()
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

<?php get_footer(); ?>
