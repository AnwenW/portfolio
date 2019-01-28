<?php get_header(); ?>

  <div class="full-width">
    <h2>This is the index</h2>

    <?php
      if(have_posts()) :
        while(have_posts()) : the_post(); ?>

          <!-- <?php get_template_part('content', get_post_format()); ?> -->
          <h2><?php the_title(); ?></h2>
  				<?php the_content(); ?>

        <?php endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
