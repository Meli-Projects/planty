</main>
<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<nav id="footer-nav" aria-label="Pied de page">
    <?php
    wp_nav_menu([
      'theme_location' => 'footer-menu',
      'container'      => false,
      'menu_class'     => 'footer-menu',
      'fallback_cb'    => false,
    ]);
    ?>
  </nav>
</footer>