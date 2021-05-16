<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="UTF-8">
        <title>Cosmix</title>
        <meta name="description" content="Cosmix">
        <meta name="keywords" content="cosmix, fumetteria, libri">
        <meta name="author" content="Giacomo Borsellino">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">

        <!-- Hooka l'Head -->
        <?php wp_head(); ?>

    </head>

    <!-- Aggiunge una classe custom al body -->
    <body <?php body_class(); ?> >
        <div class="container">

            <header>

                <div class="pan">
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">

                    <img class="logo-menu" src="<?php echo get_template_directory_uri(); ?>/images/menu.png" alt="logo-menu">

                    <?php /* Main Navigation */
                        wp_nav_menu( array(
                        'theme_location' => 'header',
                        'depth' => 2,
                        'container' => true,
                        'menu_class' => 'menu'
                        )
                        );
                    ?>

                    <!--
                    <ul class="menu" style="display: none;">
                        <li><img src="/images/cosmix.png"></li>

                        <li><a href="http://127.0.0.1/wordpress/home/">HOME</a></li>
                        <li><a href="http://127.0.0.1/wordpress/prodotti/">PRODOTTI</a></li>
                        <li><a href="http://127.0.0.1/wordpress/news/">NEWS</a></li>
                        <li><a href="http://127.0.0.1/wordpress/contatti/">CONTATTI</a></li>

                        <li class="close"><img src="/images/x.png"></li>
                    </ul>      
                    -->
                    
                </div>


                <div class="intro">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cosmix.png" alt="cosmix" >
                    <!-- Script php per rendere dinamica la description -->
                    <h2> <?php bloginfo('description'); ?> </h2>
                </div>
                
            </header>