<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-home'); ?>
<main class="page">
  <div>

    <?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
      //
      // Post Content here
      the_content();
      //
    } // end while
  } // end if
  ?>

  </div>
  <?php get_template_part( 'template-parts/flexible-content' ) ?>
</main>
<?php get_footer() ?>