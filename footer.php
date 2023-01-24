<footer>
    
    <!-- Icones reseaux sociaux -->
    <div class="icons">
        <a class="social" href="#"><i class="fa-brands fa-instagram"></i></a>
        <a class="social" href="#"><i class="fa-brands fa-twitter"></i></a>
        <?php the_custom_logo(); ?>
        <a class="social" href="#"><i class="fa-brands fa-youtube"></i></a>
        <a class="social" href="#"><i class="fa-brands fa-facebook"></i></a>
    </div>


    <!-- inclure le menu footer -->
    <?php
        wp_nav_menu(array(
        'menu' => 'Menu footer',
        'container' => 'nav'
        ));
    ?> 

    <span>@abenrost 2022.</span>

</footer>

<?php wp_footer(); ?>

</body>
</html>