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

    <section id="news">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active news_photo1"
                     style="background-image: url('<?php the_field('slider_1'); ?>')">
                    <div class="carousel-caption animated zoomIn">
                        <h3 class="animated fadeInLeftBig"><?php the_field('tytuł_slider_1'); ?></h3>
                        <p class="animated slideInLeft"><?php the_field('napis_slider_1'); ?></p>
                    </div>
                </div>
                <div class="carousel-item news_photo2" style="background-image: url('<?php the_field('slider_2'); ?>')">
                    <div class="carousel-caption animated zoomIn">
                        <h3 class="animated slideInLeft"><?php the_field('tytuł_slider_2'); ?></h3>
                        <p class="animated slideInLeft"><?php the_field('napis_slider_2'); ?></p>
                    </div>
                </div>
                <div class="carousel-item news_photo3" style="background-image: url('<?php the_field('slider_3'); ?>')">
                    <div class="carousel-caption animated zoomIn">
                        <h3 class="animated slideInLeft"><?php the_field('tytuł_slider_3'); ?></h3>
                        <p class="animated slideInLeft"><?php the_field('napis_slider_3'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <!--REKLAMA-->
    <section class="section-opinions">
        <!-- SLIDER-->
        <div class="row justify-content-center">
            <div class="col-md-6 section-opinions-1">
                <div class="opinions-slider">
                    <div class="slider-box slider-box-photo1">
                        <img src="<?php the_field('zdjecie_reklama_1') ?>" style="width: 25%">
                        <p><?php the_field('tytuł_reklama_1'); ?></p>
                    </div>
                    <div class=" slider-box slider-box-photo2">
                        <img src="<?php the_field('zdjecie_reklama_2') ?>" style="width: 25%">
                        <p><?php the_field('tytuł_reklama_2'); ?></p>
                    </div>
                    <div class=" slider-box slider-box-photo3">
                        <img src="<?php the_field('zdjecie_reklama_3') ?>" style="width: 25%">
                        <p><?php the_field('tytuł_reklama_3'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
    <section id=" search">
                        <div class="container caption firms">
                            <div class="row pos-center">
                                <div class="col-md-12">
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        </div>
    </section>
    -->
    <section id="list_of_firms">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row list_first">
                        <?php

                        $categories = get_categories('taxonomy=cousine-type&post_type=firms');
                        $count = count($categories);


                        foreach ($categories as $parent) {
                            if ($parent->parent == 0) {
                                ?>
                                <div class="col-md-3">
                                    <h2>
                                        <a href="<?php echo get_term_link($parent->term_id); ?>"><?php echo $parent->name ?></a>
                                    </h2>
                                    <?php
                                    foreach ($categories as $child) {
                                        if ($child->parent == $parent->term_id) {

                                            ?>
                                            <p>
                                                <a href="<?php echo get_term_link($child->term_id); ?>"><?php echo $child->name ?></a>
                                                <span><?php echo $child->count ?></span>
                                            </p>

                                            <?php
                                        }
                                    }
                                    ?>
                                </div>

                                <?php

                            }
                        }

                        ?>

                    </div>

                </div>
                <?php get_sidebar('main'); ?>

            </div>
        </div>

    </section>

<?php get_footer(); ?>