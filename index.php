<!-- HEADER
====================== -->
<?php get_header(); ?>


<!-- CONTENT
====================== -->
<section class="wrap">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="entry">
    <div class="entryBody">
      <h3><?php the_date(); ?></h3>
      <h2 class="heads"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
  </div>

  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</section>

  <!--
    can't close the body here!, since we need to call wp_footer() from footer
    right before closing of body tag.
  -->

<!-- FOOTER
====================== -->
<?php get_footer(); ?>
