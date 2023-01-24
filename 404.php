
<?php get_header();
//Template Name: 404
?>


<main id="page404">
    <!-- afficher l'image mise en avant en background -->
    <?php $thumb = get_the_post_thumbnail_url(253); ?>
    <div class="hero404" style="background-image: url('<?php echo $thumb;?>')">
        <div class="container">
            <h2>Mauvais Lancer ! Erreur 404</h2>
            <p>Nous sommes désolé mais la page que vous cherchez n'est pas ou plus 
            disponible. Nous vous suggérons de retenter votre chance sur <a href="<?php the_permalink(15); ?>">la page 
            d'accueil</a> ou sur nos derniers articles</p>
        </div>
        <ul>
            <?php
                $recentPosts = new WP_Query('showposts=5');
                while ($recentPosts->have_posts()) : $recentPosts->the_post();
            ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php
                endwhile;
            ?>
        </ul>
    </div>           

</main>


<?php get_footer(); ?>

