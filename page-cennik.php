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

    <section id="cennik">
        <div class="container">
            <div class="about_title">
                <h1><?php the_field('tytul_cennik'); ?></h1>
            </div>
            <div class="row cennik_boxes">
                <div class="col-md-4 box1">
                    <div class="">
                        <div class="box__inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/basic.png">
                            <h1>Basic</h1>
                            <p><?php the_field('basic_opis1'); ?></p>
                            <p><?php the_field('basic_opis2'); ?></p>
                            <p><?php the_field('basic_opis3'); ?></p>
                            <p><?php the_field('basic_opis4'); ?></p>
                        </div>
                        <p><a><?php the_field('basic_cena'); ?></a></p>
                    </div>
                </div>
                <div class="col-md-4 box2">
                    <div class="">
                        <div class="box__inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/standard.png">
                            <h1>Standard</h1>
                            <p><?php the_field('standard_opis1'); ?></p>
                            <p><?php the_field('standard_opis2'); ?></p>
                            <p><?php the_field('standard_opis3'); ?></p>
                            <p><?php the_field('standard_opis4'); ?></p>
                            <p><?php the_field('standard_opis5'); ?></p>
                            <p><?php the_field('standard_opis6'); ?></p>
                        </div>
                        <p><a><?php the_field('standard_cena'); ?></a></p>
                    </div>
                </div>
                <div class="col-md-4 box3">
                    <div class="">
                        <div class="box__inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/premium.png">
                            <h1>Premium</h1>
                            <p><?php the_field('premium_opis1'); ?></p>
                            <p><?php the_field('premium_opis2'); ?></p>
                            <p><?php the_field('premium_opis3'); ?></p>
                            <p><?php the_field('premium_opis4'); ?></p>
                            <p><?php the_field('premium_opis5'); ?></p>
                            <p><?php the_field('premium_opis6'); ?></p>
                            <p><?php the_field('premium_opis7'); ?></p>
                            <p><?php the_field('premium_opis8'); ?></p>
                            <p><?php the_field('premium_opis9'); ?></p>
                            <p><?php the_field('premium_opis10'); ?></p>
                        </div>
                        <p><a><?php the_field('premium_cena'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>