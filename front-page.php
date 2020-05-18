<?php get_header(); ?>

  <div class="container">

    <div class="cv-banner">
      <?php the_post_thumbnail( 'large' ); // Large resolution (default 1024px x 1024px max) ?>

      <h1 class="cv-title"> <?php bloginfo( 'name' ); ?> </h1>
    </div>

    <?php get_template_part('includes/section','content'); ?>

    <p>Please let this be editable</p>

    <?php
    echo twentytwenty_get_starter_content();
    ?>

  </div>

<?php get_footer(); ?>
