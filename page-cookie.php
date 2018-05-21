<?php get_header('main'); ?>

    <!--HEADER-->
    <section id="header">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer_top_background.jpg" class="top_background">
        <div id="background-balls" style="opacity: 1; top: 7rem;" class=""></div>
        <div class="container header_main">
            <div class="row">
                <div class="col-md-6 animated slideInLeft">
                    <!--
                    <h1 class="header_title">Katalog firm budowlanych</h1>
                    -->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/tytul.png" class="header_title">
                </div>
                <div class="col-md-6 animated slideInRight" style="text-align: center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mapa_polski.png" class="maps">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lupa.png"
                         class="lupa animated infinite pulse">
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="about_title">
                <h1><?php the_field('tytul_cookie'); ?></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><?php the_field('opis1_cookie'); ?></p>
                    <p><?php the_field('opis2_cookie'); ?></p>
                    <p><?php the_field('opis3_cookie'); ?></p>
                    <p><?php the_field('opis4_cookie'); ?></p>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>