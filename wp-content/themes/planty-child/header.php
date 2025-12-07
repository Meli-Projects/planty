<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
      <div id="branding">
         <!-- Mise en place du logo à la place du <h1> texte du thème parent -->
        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
          <?php if ( function_exists('the_custom_logo') && has_custom_logo() ) : ?> 
            <?php the_custom_logo(); ?> <!--affichage du logo -->
          <?php else : ?>
            <?php if ( is_front_page() || is_home() ) echo '<h1>'; ?> <!--sinon affichage du nom du site -->
              <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home" itemprop="url">
                <span itemprop="name"><?php echo esc_html( get_bloginfo('name') ); ?></span>
              </a>
            <?php if ( is_front_page() || is_home() ) echo '</h1>'; ?>
          <?php endif; ?>
        </div>
        <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>>
          <?php bloginfo( 'description' ); ?>
        </div>
      </div>
      <!-- Utilisation de wp_nav_menu pour gérer le menu depuis l’administration + suppression du formulaire de recherche présent dans le header du thème parent -->
      <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement"> 
        <?php wp_nav_menu( array(
          'theme_location' => 'main-menu',
          'link_before' => '<span itemprop="name">',
          'link_after' => '</span>' ) ); ?>
      </nav>
    </header>
    <div id="container">
      <main id="content" role="main">
