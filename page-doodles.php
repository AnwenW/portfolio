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

        $index = 0;

				while ($doodlespage_posts->have_posts()) : $doodlespage_posts->the_post(); ?>

        <!-- =====  MODAL POPUP BOX  ===== -->

        <div id="modal<?php echo $index; ?>" class="modalPopup">

          <div class="modalContent">

            <!-- <span id="modalClose<?php echo $index; ?>" class="modalClose">&times;</span> -->

            <button aria-label="Close popup window" id="modalClose<?php echo $index; ?>" class="modalClose">&times;</button>

              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'full');
                }
              ?>

              <?php the_content(); ?>
              <!-- <?php echo get_the_id();?> -->

            </div><!-- closes modalContent -->

          </div><!-- closes modalPopup -->


					<div class="doodles-grid-item">

						<!-- pull in featured images with width and height attributes removed-->
						<!-- <?php
							$thumbnail_id = get_post_thumbnail_id();
							$thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
						?> -->
						<!-- <img src="<?php echo $thumbnail_url[0]; ?>"> -->

            <?php $targetModalId = 'modal' . $index; ?>

            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'full', ['data-target-modal' => $targetModalId]);
              }
            ?>

					</div> <!-- closes doodles-grid-item -->

          <?php $index++; ?>

				<?php endwhile;
				wp_reset_postdata();
			endif; ?>

		</div> <!-- closes doodles-grid -->

	</div> <!-- closes standard-page -->

<?php get_footer(); ?>
