<?php get_header();

$home_blog_posts = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC',
    'category_name' => 'uncategorised'
));

?>

	<div class="full-width">
		<code>this is home.php</code><br />

		<?php if (have_posts()) :
			while ($home_blog_posts->have_posts()) : $home_blog_posts->the_post(); ?>

				<article class="listing-group">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php the_excerpt(); ?>
          <a href="<?php echo get_permalink(); ?>"> Read More...</a>
				</article>

			<?php endwhile;
			wp_reset_postdata();
		endif; ?>
	</div>

<?php get_footer(); ?>
