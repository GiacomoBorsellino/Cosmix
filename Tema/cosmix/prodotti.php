<?php
/*
 * Template Name: Prodotti
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="content">

	<h2>Prodotti</h2>
	<p>Archivio di tutti gli albi in arrivo, disponibili o terminati</p>

	<p class="disponibilita"> Disponibile   <img src="<?php echo get_template_directory_uri(); ?>/images/disponibile.png" alt="logo"/>   In Arrivo   <img src="<?php echo get_template_directory_uri(); ?>/images/in-arrivo.png"/>   Non Disponibile   <img src="<?php echo get_template_directory_uri(); ?>/images/non-disponibile.png"/> </p>

	<div class="thumbnails">
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
				<div class="child-thumb">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<?php endwhile; endif; ?>
	</div>

</div>

<?php get_footer(); ?>
