<div class="cont-aside">
            <aside class="catside shadow-drop-center">
                <h3>CATEGORIES</h3>
                <ul>
                    <li><a href="<?php echo get_category_link(6) ; ?>">Cartes</a></li>
                    <li><a href="<?php echo get_category_link(7) ; ?>">Gestion</a></li>
                    <li><a href="<?php echo get_category_link(8) ; ?>">Jeux de Dés</a></li>
                    <li><a href="<?php echo get_category_link(9) ; ?>">Stratégie</a></li>
                </ul>
            </aside>
            <aside class="postside shadow-drop-center">
                <div class="recents">
                    <h3>DERNIER ARTICLE CARTES</h3>
                    <?php 
                        // the query
                        $the_query = new WP_Query( array(
                            'category_name' => 'cartes',
                            'posts_per_page' => 1,
                        )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <a class="minimg" href="<?php the_permalink() ?>"><?php the_post_thumbnail('minipic');?></a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('No News'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="recents">
                    <h3>DERNIER ARTICLE GESTION</h3>
                    <?php 
                        // the query
                        $the_query = new WP_Query( array(
                            'category_name' => 'gestion',
                            'posts_per_page' => 1,
                        )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <a class="minimg" href="<?php the_permalink() ?>"><?php the_post_thumbnail('minipic');?></a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('No News'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="recents">
                    <h3>DERNIER ARTICLE DES</h3>
                    <?php 
                        // the query
                        $the_query = new WP_Query( array(
                            'category_name' => 'des',
                            'posts_per_page' => 1,
                        )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <a class="minimg" href="<?php the_permalink() ?>"><?php the_post_thumbnail('minipic');?></a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('No News'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="recents">
                    <h3>DERNIER ARTICLE STRATEGIE</h3>
                    <?php 
                        // the query
                        $the_query = new WP_Query( array(
                            'category_name' => 'strategie',
                            'posts_per_page' => 1,
                        )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <a class="minimg" href="<?php the_permalink() ?>"><?php the_post_thumbnail('minipic');?></a>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('No News'); ?></p>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
