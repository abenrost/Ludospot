<?php get_header();
//Template Name: Contact 
?>

<main id="contact">
    <!-- charger le composant pour le hero hero.php -->
    <?php get_template_part('./template-parts/hero'); ?>

    <!-- Contenu Gutenberg -->
    <section class="container">
        <?php the_content(); ?>
    </section>

</main>

<?php get_footer(); ?>