<?php
 /**
  * Template header
  * Ve template est intégré dans tous les modèles de thème
  * @link : https://developer.wordpress.org/themes/
  * @package : 31w
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <section class="site">
        <header class="site__header">
            <section class="site__branding">
                <h1>
                    <a href="<?= esc_url( home_url( '/' ) ) ?>">Cegep Maisonneuve</a>
                </h1>
                <h2>
                Venez étudier chez nous !
                </h2>
            </section>
            <!-- <nav class="site__navigation">
            Menu
            </nav> -->
        </header>
        <section class="site__sidebar">
            <h3>Menu</h3>
            <?php wp_nav_menu(array(
                'menu'=> '',
                'container'=> 'nav',
                'container_class'=> 'menu__sidebar',
                'menu_class'=> 'menu__sidebar__ul'
            )) ?>
        </section>
    

