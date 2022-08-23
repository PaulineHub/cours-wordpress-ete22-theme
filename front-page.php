<?php get_header(); ?> 
<section class="site__main">
    <h1>Actualités</h1>
    <div class="blocs__horizontaux">
    <?php
        if (have_posts()):
            while(have_posts()) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a>
                </h2>
                <h3><?php the_field('sous_titre'); ?></h3>
                <p><?php the_field('resume'); ?></p>
                <img src="<?php echo esc_url(get_field('image')['url']); ?>" alt="">
            </article>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>   

    <?php wp_nav_menu(array(
                'menu'=> 'evenement',
                'container'=> 'nav'
            )) ?>

    <?php wp_nav_menu(array(
                'menu'=> 'atelier',
                'container'=> 'nav'
            )) ?>
</section>

<?php get_footer(); ?>
