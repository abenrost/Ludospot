<?php get_header();
//Template Name: Blog
?>

<main id="blog">
    
    <!-- charger le composant pour le hero hero.php -->
    <?php get_template_part('./template-parts/hero'); ?>

    <div class="container" >

        <section class="articles">

            <!-- Récuperer les cinq derniers article -->
            <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=5');
            ?>

            <!-- boucle wordpress pour les articles -->
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            
            <!-- afficher l'image de l'article -->
            <div class="jeu-img"><?php the_post_thumbnail('extrait_post');?></div>

            <!-- afficher le titre du post en lien vers l'article -->
            <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

            <!-- permet d'afficher un extrait d'article -->
            <?php the_excerpt(); ?>

            <!-- bouton avec lien vers l'article -->
            <a class="button" href="<?php the_permalink() ?>" rel="bookmark">VOIR PLUS</a>

            <?php endwhile; ?>
            <!-- fin boucle wordpress pour afficher les extraits d'article -->

        </section>

        <?php get_sidebar(); ?>
        
    </div>
    <div>
        <!-- Charger le composant des catégories catmenu.php -->
        <?php get_template_part('./template-parts/catmenu'); ?>
    </div>

</main>

<?php get_footer(); ?>