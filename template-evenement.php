<?php 
/* 
* Template name: Évenement
*/
?>

<?php get_header(); ?>

<main class="site__main">
<?php  ?>
    <mark>Événement à venir</mark>
    <?php if(have_posts()) : the_post(); ?>
    <article class="annonce__article">
        <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?>
        <?php 
            $endroit = get_field('endroit');
            $date = get_field('date');
            $heure = get_field('heure');
            $organisateur = get_field('organisateur');
            $resume = get_field('resume');

        ?>
    </article>
    <?php endif ?>
</main>
<?php get_footer(); ?>