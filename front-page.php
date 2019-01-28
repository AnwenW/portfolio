<?php get_header();

// declare variables
$frontpage_self_projects = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 10,
    'category_name' => 'self-initiated projects'
));

?>

  <?php if(have_posts()) :
		while(have_posts()) : the_post(); ?>

      <div class="page-title-text">
        <h3 class="page-title"><?php the_title(); ?></h3>
        <h4><?php the_content(); ?></h4>
      </div>

		<?php endwhile;
	endif;
	?>

	<section class="projects-group">

		<!-- blog post loop using custom WP_Query rather than standard loop, pulling in content from posts with 'self-initiated' category -->

    <div class="posts-grid">

  		<?php if (have_posts()) :
  			while ($frontpage_self_projects->have_posts()) : $frontpage_self_projects->the_post(); ?>

  				<div class="grid-item">

            <!-- pull in featured images with width and height attributes removed-->
            <?php
          		$thumbnail_id = get_post_thumbnail_id();
  						$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
  					?>

  					<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>"></a>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php the_excerpt();?></p>
            <p class="read-more"><a href="<?php echo get_permalink(); ?>"> Read more</a> >></p>

  				</div>

  			<?php endwhile;
  			wp_reset_postdata();
  		endif; ?>

    </div><!-- close posts-grid -->

	</section><!-- close projects-group -->




<?php get_footer(); ?>
