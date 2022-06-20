<?php get_header(); ?>

<h1>Mon premier modèle Wordpress - Accueil</h1>
<main>
<?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
        <div class="article-card">
            <h2><?php the_title(); ?></h2>

            <?php $lien = " ... <a class='bouton' href='" . get_permalink() . "'>" . substr(get_the_title(), 0, 8) . "</a>"; 
            ?>
            <p><?= wp_trim_words(get_the_content(), 20, $lien) ; ?></p>
        </div>
        <?php endwhile; ?>

    <?php endif; ?>
</main>
<?php get_footer(); ?>
