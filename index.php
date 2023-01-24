<?php get_header();
//Template name: Index
?>

    

<main id="accueil">
    
    
   <!-- afficher l'image mise en avant en background -->
    <?php $posthumb = get_the_post_thumbnail_url(); ?>
    <div class="homehero" style="background-image: url('<?php echo $posthumb;?>')">
        <div class="cont-titre">
            <h1><?php the_field( 'titrehero' ); ?></h1>
            <span><?php the_field( 'spanhero' ); ?></span>
        </div>
    </div>

    <!-- page contenant les articles -->

    <?php if ( get_field( 'background' ) ) : ?>
    <section class="page" style="background-image: url('<?php the_field( 'background' ); ?>')">
        <?php endif ?>
        <!-- premier article -->
        <article class="article1">
            <!-- texte de l'article -->
            <div class="cont-art">
                <h3><?php the_field( 'h31' ); ?></h3>
                <h2><?php the_field( 'h21' ); ?></h2>
                <p><?php the_field( 'p1' ); ?></p>
            </div>
            <!-- Contenu multi media -->
            <div class="cont-media">
                <?php $img1 = get_field( 'img1' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $img1 ) : ?>
                <?php echo wp_get_attachment_image( $img1, $size ); ?>
                <?php endif; ?>
                <div class="cont-video">
                    <?php the_field( 'video1' ); ?>
                </div>
            </div>
           
        </article>
        <!-- deuxième article -->
        <article class="article2">
            <!-- texte de l'article -->
            <div class="cont-art">
                <h2><?php the_field( 'h22' ); ?></h2>
                <p><?php the_field( 'p2' ); ?></p>
            </div>
            <!-- contenu miltimedia -->
            <div class="cont-media">
                <?php $img2 = get_field( 'img2' ); ?>
                <?php $size = 'imghome2'; ?>
                <?php if ( $img2 ) : ?>
	            <?php echo wp_get_attachment_image( $img2, $size ); ?>
                <?php endif; ?>
            </div>
           
        </article>

    </section>

    <!-- la galerie -->
    <section class="gallery">
        <!-- champs acf pour la galerie -->
        <h3><?php the_field( 'h3s2' ); ?></h3>

        <h2><?php the_field( 'h2s2' ); ?></h2>

        <p><?php the_field( 'ps2' ); ?></p>
                    
        <div class="img-jeux">

            <!-- Récuperer les six derniers article -->
            <?php
                $recentPosts = new WP_Query();
                $recentPosts->query('showposts=6');
            ?>
            <!-- fin "Récuperer les six derniers article" -->

            <!-- boucle wordpress pour les articles -->
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

            <?php the_post_thumbnail('minipic'); ?>

            <?php endwhile; ?>

        </div>
        <!-- bouton avec le lien dynamique vers la galerie -->
        <a href="<?php the_permalink(24); ?>">Voir plus</a>
    </section>

    <!-- Charger le composant des catégories catmenu.php -->
    <?php get_template_part('./template-parts/catmenu'); ?>
   
    
   
     
   


</main>

<?php get_footer(); ?>