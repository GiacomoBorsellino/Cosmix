<?php
/*
 * Template Name: Evento
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div class="content">

    <div class="article">

        <!-- Nome evento -->
        <h2><?php single_post_title(); ?></h2>
        <!-- Copertina evento -->
        <div class="event">
		    <?php the_post_thumbnail('cosmix_single', array('class' => 'event','alt' => get_the_title())); ?>
        </div>
        <!-- Data Evento -->
        <p class="time"><?php the_time('j M , Y') ?></p>
		<!-- Descrizione evento -->
        <p><?php the_content(); ?></p>
		
    </div>

</div>

<?php get_footer(); ?>