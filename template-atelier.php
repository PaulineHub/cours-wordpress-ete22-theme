<?php 
/* 
* Template name: Atelier
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
            $animateur = get_field('animateur');
            $type = get_field('type');
            $date = get_field('date');
            $duree = get_field('duree');
            $horaire = get_field('horaire');
            $heure = get_field('heure');
            $difficulte = get_field('difficulte');
            $lieu = get_field('lieu');
            $prix = get_field('prix');
            echo "<p class='annonce__animateur'> L'animateur : " . $animateur . "</p>";
            echo "<p class='annonce__type'> Le type de formation : " . $type . "</p>";
            echo "<p class='annonce__date'> La date de début de l'atelier : " . $date . "</p>";
            echo "<p class='annonce__horaire'> L'heure de debut de l’atelier  : " . $horaire . "</p>";
            echo "<p class='annonce__duree'> La duree (nombre de cours) : " . $duree . "</p>";
            echo "<p class='annonce__heure'> Nombre d'heures par séance : " . $heure . "</p>";
            echo "<p class='annonce__difficulte'> L'heure : " . $$difficulte . "</p>";
            echo "<p class='annonce__lieu'> Lieu ou se déroulera l’atelier  : " . $lieu . "</p>";
            echo "<p class='annonce__prix'> Le prix de l’atelier : " . $prix . "</p>";
    

            $image = get_field('image');
            if(!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif ?>
    </article>
    <?php endif ?>
</main>
<?php get_footer(); ?>