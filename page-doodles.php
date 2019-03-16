<?php get_header();

// declare variables
$doodlespage_posts = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'posts_per_page' => 12,
    'category_name' => 'doodles'
));

?>

	<div class="standard-page">

		<?php if(have_posts()) :
			while(have_posts()) : the_post();
		?>

			<div class="page-title-text">
				<h3 class="page-title"><?php the_title(); ?></h3>
				<h4><?php the_content(); ?></h4>
			</div>

		<?php endwhile;
			endif;
		?>



		<div class="doodles-grid">

			<?php if (have_posts()) :
				while ($doodlespage_posts->have_posts()) : $doodlespage_posts->the_post(); ?>

					<div class="doodles-grid-item">

						<!-- pull in featured images with width and height attributes removed-->
						<?php
							$thumbnail_id = get_post_thumbnail_id();
							$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
						?>


            <!-- <a href="<?php echo get_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>"></a> -->

						<img src="<?php echo $thumbnail_url[0]; ?>">


            <!-- // trying to get the current (clicked) post id... this gets thumbnail id // -->
            <!-- <a href="#modalPopup-<? the_ID(); ?>" data-id="<?php the_ID(); ?>"> -->
              <?php echo get_the_id();?>
            <!-- </a> -->


            <!--  echo get_the_id();  returns ID of the current post,
                  the_id();           prints it -->


					</div> <!-- closes doodles-grid-item -->

				<?php endwhile;
				wp_reset_postdata();
			endif; ?>

    <!-- // What's the difference between wp_reset_query and wp_reset_postdata? // -->
    <!-- <?php wp_reset_query(); ?> -->

		</div> <!-- closes doodles-grid -->

	</div> <!-- closes standard-page -->


  <!-- MODAL POPUP BOX -->

  <div id="modalPopup">

    <div class="modalContent">

      <span class="modalClose">&times;</span>



      <!-- <?php if (!$_GET) { ?>

        <?php if(have_posts()) :
    			while(have_posts()) : the_post(); ?>

    				<?php
    					if ( has_post_thumbnail() ) {
    						the_post_thumbnail( 'full' );
    					}
    				?>

    				<?php the_content(); ?>

    			<?php endwhile;
    		endif;
    		?>

      <?php } ?> -->



    </div><!-- closes modalContent -->

  </div><!-- closes modalPopup -->


<?php get_footer(); ?>
