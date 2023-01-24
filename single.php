<?php get_header(); 
?>

<main id="jeu">

    <!-- boucle wordpress pour chercher les articles-->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <!-- image mise en avant -->
    <div class="posthero">
        <?php the_post_thumbnail ('single'); ?>
    </div>
    <div class="post-container">    
        <article>
            <!-- affiche le titre de l'article -->
            <h2><?php the_title()?></h2> 
            <!--  caractéristiques du jeu -->
            <!--  nombre de joueurs -->
            <div class="carjeu"> 
                <i class="fa-solid fa-users"></i>
                <span><?php the_field( 'nbr' ); ?></span>
            </div>
            <!--  temps de jeu  -->
            <div class="carjeu">
                <i class="fa-solid fa-hourglass-half"></i>
                <span><?php the_field( 'temps' ); ?></span>
            </div>

            <!-- affiche le contenu Gutenberg-->
            <?php the_content(); ?>
            <!-- fin affiche le contenu -->
        
            <!-- infos et source de l'article -->
            <div class="artinfo"> 
                <?php $link = get_field( 'link' ); ?>
                <?php if ( $link ) : ?>
                <span>Source: <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a></span>
                <?php endif; ?>
                 
                <span>Catégorie<?php the_category();?></span>
                <span><?php the_time('j F, Y'); ?></span>
            </div>

            <!-- infos auteur -->
            <div class="autinfo">
                <?php $authorpic = get_field( 'authorpic' ); ?>
                <?php $size = 'idpic'; ?>
                <?php if ( $authorpic ) : ?>
	            <?php echo wp_get_attachment_image( $authorpic, $size ); ?>
                <?php endif; ?>
                <div>
                    <span>à propos de l'auteur</span>
                    <span class="autname"><?php the_author();?></span>
                    <span><?php the_author_meta('description'); ?></span>
                </div>
                
            </div>
        </article>

        <?php get_sidebar(); ?>
        
    </div>
    
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- fin boucle wordpress -->
</main>

<?php get_footer(); 
?>