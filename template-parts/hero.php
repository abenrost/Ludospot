
<!-- afficher l'image mise en avant en background -->
    <?php $posthumb = get_the_post_thumbnail_url(); ?>
    <div class="hero" style="background-image: url('<?php echo $posthumb;?>')">
        <div class="cont-titre">
            <h2><?php the_field( 'titrehero' ); ?></h2>
            <span><?php the_field( 'spanhero' ); ?></span>
        </div>
    </div>