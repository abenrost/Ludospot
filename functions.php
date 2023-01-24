<?php
// enregistrer le menu
register_nav_menus(array(
'menu' => 'principal'
));
// fin

// Permettre le chargement et afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin


// déclarer les styles
function monstyle() {
    // charger le style.css
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // importer les fonts
    wp_enqueue_style( 'Montserrat',
    "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" );

    wp_enqueue_style( 'Spectral SC',
    "https://fonts.googleapis.com/css2?family=Spectral+SC:wght@400;500;600&display=swap" );
    
    // font-awesome cdnjs
    wp_enqueue_style( 'prefix-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'prefix-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
}
// Lancer la fonction monstyle lors du chargement 
    add_action( 'wp_enqueue_scripts', 'monstyle' );

// barre admin off > supprimer l'espace dedié 
    add_filter( 'show_admin_bar', '__return_false' );

// Charger les scripts js 
function my_theme_scripts() {

    // Déclarer le js du bouton haut de page
    wp_enqueue_script( 'topbtn', get_template_directory_uri() . '/js/topbtn.js');

    // Déclarer le js de la barre de progression
    wp_enqueue_script( 'progressbar', get_template_directory_uri() . '/js/progressbar.js');
}
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );




// Ajouter la configuration du logo 
function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );  
    
    // Add custom-logo support
    add_theme_support( 'custom-logo' );
    
}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

 //ajouter des tailles aux images
 add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
 function wpdocs_theme_setup() {
    add_image_size('idpic', 100, 100, true);
    add_image_size('minipic', 240, 140, false);
    add_image_size('imghome', 350, 350, true);
    add_image_size('imghome2', 550, 450, true);
    add_image_size('single', 640 , 540, false);
    add_image_size('hero', 1280, 874, false);
    add_image_size('extrait_post', 700, 400, false);
    add_image_size('max', 1536, 1536, false);
 }
 //fin

//  Supprimer l'affichage de la vesrion wordpress pour la sécurité
remove_action("wp_head", "wp_generator");

?>