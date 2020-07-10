<?php get_header(); ?>
  <main class="container site-content">
    <section class="error-404">
      <h2>Erreur 404</h2>
      <h3>La page n'existe pas(sorry).</h3>
      <a href="<?php echo get_bloginfo('url'). '/blog'; ?>">
        <button type="button" class="call-to-action">
          Retourner à l'accueil!!
        </button>
    </a>
    </section>
  </main>
<?php get_footer();?>
