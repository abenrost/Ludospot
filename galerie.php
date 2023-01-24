<?php get_header();
//Template name: Galerie
?>

<main id="galerie">

    <!-- charger le composant pour le hero hero.php -->
    <?php get_template_part('./template-parts/hero'); ?>

    <section class="container">
    <!-- afficher le contenu Gutenberg -->
        <?php the_content(); ?>

    </section>

</main>

<?php get_footer(); ?>