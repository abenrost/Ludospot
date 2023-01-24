
<!-- Récupérer le header.php en dur pour modifier le titre afin d'afficher la catégorie -->
<!DOCTYPE html>
<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonction pour récupérer les informations de la catégorie -->
    <?php $catID = get_the_category(); ?>
    <!-- afficher le nom de la catégorie en titre -->
    <title><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></title>

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
                    <li><a href="<?php the_permalink(15); ?>">Home</a></li>
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
             
    <!-- Fin header en dur -->

<main id="category">
    <div class="cathero">
        <!-- Fonction pour réuper les informations de la catégorie  -->
        <?php $catID = get_the_category(); ?>
        <!-- afficher l'image de description -->
        <?php echo category_description( $catID[0] ); ?>
        <!-- afficher le nom de la catégorie -->
        <h2>Jeux de <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h2>
    </div>
    <div class="container">

        <div class="articles" >
            <!-- boucle wordpress pour récuperer les articles -->
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php if ( has_post_thumbnail()) : ?>
            
            <div class="jeu-img"><?php the_post_thumbnail('extrait_post'); ?></div>
            <?php endif; ?>
            <!-- afficher la catégorie -->
            <article d="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>

                <!-- bouton avec lien vers l'article -->
            <a class="button" href="<?php the_permalink() ?>" rel="bookmark">VOIR PLUS</a>

            </article>
        
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </div>

        

        <?php get_sidebar(); ?>
        
    </div>
    <div>
        <!-- Charger le composant des catégories catmenu.php -->
        <?php get_template_part('./template-parts/catmenu'); ?>
    </div>

</main>

<?php get_footer(); ?>



