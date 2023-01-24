<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php the_title(); ?> </title>

    <?php wp_head(); ?>

</head>
<body>
    <header>
        <!-- Conteneur du menu et logo Desktop-->
        <div class="nav-container">

            <div id="thelogo">
                <?php the_custom_logo(); ?>
            </div>
            <!-- inclure le menu principal -->
            <?php
                wp_nav_menu(array(
                'menu' => 'Menu principal',
                'container' => 'nav'
                ));
            ?>

        </div>

         <!-- menu pour le responsive et burger-->
         <section class="top-nav">
                <div id="thelogo">
                    <?php the_custom_logo(); ?>
                </div>
                <input id="menu-toggle" type="checkbox" />
                <label class='menu-button-container' for="menu-toggle">
                    <div class='menu-button'></div>
                </label>
                <ul class="menu">
                    <li><a href="<?php the_permalink(15); ?>">Accueil</a></li>
                    <li><a href="<?php the_permalink(10); ?>">Blog</a></li>
                    <li><a href="<?php the_permalink(24); ?>">Galerie</a></li>
                    <li><a href="<?php the_permalink(30); ?>">Contact</a></li>
                </ul>
        </section>
        

        <!-- charger le composant de barre de progression -->
        <?php get_template_part('./template-parts/progressbar'); ?>
    </header>
    <!-- bouton haut de page -->
    <button onclick="topFunction()" id="mybtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    

    
