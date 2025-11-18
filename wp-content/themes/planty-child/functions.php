<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style',get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory(). '/css/theme.css'));
}

    // Emplacement de menu et logo
add_action('after_setup_theme', function () {
    register_nav_menus([
        'main-menu' => 'Menu header', //pour le header
        'footer-menu' => 'Menu footer', //pour le footer
    ]);

    add_theme_support('custom-logo');
    
// Désactive l'ajout automatique des balises <p> dans les formulaires Contact Form 7.
// Ces balises ajoutaient des marges non désirées et empêchaient le centrage correct du texte dans le formulaire de commande.
add_filter('wpcf7_autop_or_not', '__return_false');
});


