<?php
get_header();
?>
<main id="primary" class="site-main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    page-main.php
  </article>
</main>
<?php
get_footer();
?>