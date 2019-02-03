<?php get_header(); ?>

	<div class="standard-page">

    <?php if(have_posts()) :
  		while(have_posts()) : the_post(); ?>

		<div class="page-title-text">
			<h3 class="page-title"><?php the_title(); ?></h3>
			<section class="page-content"><?php the_content(); ?></section>
		</div>

  		<?php endwhile;
  	endif;
  	?>

      <!-- Advanced Custom Fields? What's this doing? -->
  		<!-- <?php get_template_part('templates/loop')?>

  		<?php if (is_page('Supplementary')) { the_field('basic'); } ?>

  		<?php // set variable, use get to pull in data from appropriate field
  			$data =  get_field('basic'); ?>

  		<?php // if page is supplementary echo out content in html
  			if (is_page('Supplementary')) {

  				// echo '<div>' . the_field('basic') . '</div>';
  				echo '<div class="test">' . $data . '</div>';
  				echo '<div class="test">' . $data . '</div>';

  		} ?> -->

	</div> <!-- closes standard-page -->

<?php get_footer(); ?>
