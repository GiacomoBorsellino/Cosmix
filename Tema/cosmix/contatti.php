<?php
/*
Template Name: contatti
*/
?>

<?php get_header(); ?>

    <div class="content">

        <div class="map">
            <!-- Dove trovarci -->
            <h2>Dove trovarci</h2>
            <!-- Mappa -->
            <?php echo do_shortcode('[leaflet-map lat=43.776059161076304 lng=11.25645578388888 zoom=17 !scrollwheel] [leaflet-marker]'); ?>
            <p>Via Cavour n° 13 - Firenze (FI)</p>
        </div>

        <div class="form">
            <!-- Messaggio contatti -->
            <h2>Inviaci un messaggio o contattaci ai nostri social</h2>
            <!-- Form Contatti -->
            <?php echo do_shortcode('[contact-form-7 id="408" title="Modulo di contatto"]'); ?>
        </div>

    </div>

<?php get_footer(); ?>


