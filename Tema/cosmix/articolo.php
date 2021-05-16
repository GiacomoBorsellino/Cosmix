<?php
/*
 * Template Name: Articolo
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="content">

    <div class="article">

        <!-- Nome articolo -->
        <h2><?php single_post_title(); ?></h2>
        <!-- Copertina articolo -->
		<div>
		<?php the_post_thumbnail('cosmix_single', array('class' => 'articolo','alt' => get_the_title())); ?>
		</div>
		<!-- Descrizione articolo -->
        <p><?php the_content(); ?></p>
		
    </div>

</div>

<?php get_footer(); ?>