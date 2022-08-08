<?php get_header(); ?> 
<section class="site__main">
    <h1>Présentation de nos cours</h1>
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
            <h2><?php the_field('titre'); ?></h2>
            <h3><?php the_field('sous_titre'); ?></h3>
            <?php $lien = " ... <a class='bouton bouton-colored' href='" 
                    . get_permalink()  
                    . "'>"
                    . substr(get_the_title(),0,8) 
                    ."</a>"; 

    ?>

    <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>


        <?php endwhile; ?>
    <?php endif; ?>    
</section>
<?php get_footer(); ?>