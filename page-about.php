<?php get_header(); ?>

	<div class="standard-page">

    <?php if(have_posts()) :
  		while(have_posts()) : the_post();
		?>

		<div class="page-title-text">
		<h3 class="page-title"><?php the_title(); ?></h3>
		</div>

		<div class="about-page-content">
			<div class="about-me-grid">
				<?php the_content(); ?>
			</div>
		</div>

  	<?php endwhile;
  		endif;
  	?>

	</div> <!-- closes standard-page -->

<?php get_footer(); ?>
