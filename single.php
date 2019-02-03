<?php get_header(); ?>

	<div class="single-content">

		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>

			<h3><?php the_title(); ?></h3>

			<div class="single-image">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail( 'full' );
					}
				?>
			</div>

			<div class="single-text">
				<?php the_content(); ?>
			</div>

			<?php endwhile;
		endif;
		?>

		<div class="projects-back">
			<p><a href="http://anwen-w.local/">Back to Coding Projects</a> >></p>
		</div>

	</div> <!-- closes single-content -->

<?php get_footer(); ?>
