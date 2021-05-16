<?php get_header(); ?>

    <div class="content">

        <h2>La nostra storia</h2>
        <p>
            In una galassia lontana lontana...anzi, no, molto più vicino, 
            nasce Cosmix, un portale per tutti gli appassionati di <strong>fumetti</strong>, 
            e non solo! Cosmix nasce nel 1999, con precisione a <strong>Firenze</strong>, dalla 
            passione di <strong>Lorenzo</strong> e <strong>Tullio Vasari</strong>, 2 ragazzi con la passione smodata
            per la narrativa e i mondi fantasy. Un giorno, nel bel mezzo di un'avventura
            nelle terre rigogliose di Pelor (n.d.r si parla di D&Ds), i 2, presi dal fomento
            di una battaglia campale, decidono di condividere la loro passione con altri.
            E proprio in quel momento nacque <strong>"Cosmix"</strong>, prima semplice <strong>fumetteria</strong>, poi vero
            e proprio luogo di ritrovo per nerd "impenitenti" di ogni età. 
            Insomma, un posto dove poter viaggiare nell'infinito <strong>"cosmo"</strong> del fantasy!
        </p>

		<div class="front">
		<?php the_post_thumbnail('cosmix_single', array('class' => 'front','alt' => get_the_title())); ?>
		</div>

    </div>

<?php get_footer(); ?>
