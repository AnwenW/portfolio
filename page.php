<?php get_header(); ?>

	<div class="standard-page">

    <?php if(have_posts()) :
  		while(have_posts()) : the_post();
		?>

		<div class="page-title-text">
		<h3 class="page-title"><?php the_title(); ?></h3>
		</div>

		<div class="page-content"><?php the_content(); ?></div>

  	<?php endwhile;
  		endif;
  	?>

	</div> <!-- closes standard-page -->

<?php get_footer(); ?>
