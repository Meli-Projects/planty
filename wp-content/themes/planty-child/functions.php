<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style',get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory(). '/css/theme.css'));
}

    // Emplacements menus et logo
add_action('after_setup_theme', function () {
    register_nav_menus([
        'main-menu' => 'Menu header', //pour le header
        'footer-menu' => 'Menu footer', //pour le footer
    ]);

    add_theme_support('custom-logo');
});

// Désactive l'ajout automatique des balises <p> dans les formulaires Contact Form 7.
// Ces balises ajoutaient des marges non désirées et empêchaient le centrage correct du texte dans le formulaire de commande.
add_filter('wpcf7_autop_or_not', '__return_false');

// Ajoute le lien "Admin" dans le menu principal pour les utilisateurs connectés
add_filter('wp_nav_menu_items', 'add_admin_menu', 10, 2);
function add_admin_menu( $items, $args )
{
    // On cible seulement le menu du header : 'main-menu'
    if ($args->theme_location === 'main-menu' && is_user_logged_in()) {

        // On prépare l'item Admin avec la chaine item pour le html et on renvoi vers la back de WP
        $admin_item = '<li class="menu-item menu-item-admin">
                           <a href="' . esc_url(admin_url()) . '">Admin</a> 
                       </li>';

        // On cherche le <li> qui contient "menu-item-16" (Commander) utilisation d'une regex pour rechercher 
        $pattern = '/(<li[^>]*menu-item-16[^>]*>)/';

        if (preg_match($pattern, $items)) {
            // On insère Admin avan le <li> de "Commander"
            $items = preg_replace($pattern, $admin_item . '$1', $items, 1);
        } else {
            // Si on ne trouve pas "menu-item-16",
            // on ajoute Admin à la fin du menu
            $items .= $admin_item;
        }
    }

    return $items;
}
?>