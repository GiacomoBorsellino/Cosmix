<?php
/*
 * Template Name: News
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="content">

	<h2>News ed Eventi</h2>
	<p>Tutti gli eventi, passati, presenti e futuri</p>

	<div class="news">
		<?php
			global $post;
			$child_pages_query_args = array(
				'post_type'   => 'page',
				'post_parent' => $post->ID,
				'orderby'     => 'menu_order'
			);

			$child_pages = new WP_Query( $child_pages_query_args );

			if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();
				?>
				<div class="child-event">
					<!-- Anteprima evento -->
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<!-- Titolo evento -->
					<a class="tit" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<!-- Estratto evento -->
                    <a><?php the_excerpt(); ?></a>
				</div>
				<?php endwhile; endif; ?>
	</div>

</div>

<?php get_footer(); ?>
