<?php get_header('main'); ?>
<?php the_post(); ?>

    <section id="submenu-firms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="submenu-firms-lista">
                        <li>
                            <a class="meble" href="<?php echo get_term_link('meble', 'cousine-type') ?>">
                                <i class="fas fa-couch fa-3x"></i>
                                <p>Meble</p>
                            </a>
                        </li>
                        <li>
                            <a class="schody"
                               href="<?php echo get_term_link('schody', 'cousine-type') ?>">
                                <i class="fas fa-signal fa-3x"></i>
                                <p>Schody</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('transport', 'cousine-type') ?>">
                                <i class="fas fa-truck fa-3x"></i>
                                <p>Transport</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('uslugi', 'cousine-type') ?>">
                                <i class="fas fa-people-carry fa-3x"></i>
                                <p>Usługi</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-budowlane', 'cousine-type') ?>">
                                <i class="fas fa-dolly fa-3x"></i>
                                <p>M.budowlane</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-stalowe', 'cousine-type') ?>">
                                <i class="fas fa-truck-loading fa-3x"></i>
                                <p>M.stalowe</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-szklane', 'cousine-type') ?>">
                                <i class="fas fa-shipping-fast fa-3x"></i>
                                <p>M.szklane</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza" href="<?php echo get_term_link('inne', 'cousine-type') ?>">
                                <i class="fas fa-cogs fa-3x"></i>
                                <p>Inne</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="submenu-firms-small">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <ul class="submenu-firms-lista">
                        <li>
                            <a class="meble" href="<?php echo get_term_link('meble', 'cousine-type') ?>">
                                <i class="fas fa-couch fa-3x"></i>
                                <p>Meble</p>
                            </a>
                        </li>
                        <li>
                            <a class="schody"
                               href="<?php echo get_term_link('schody', 'cousine-type') ?>">
                                <i class="fas fa-signal fa-3x"></i>
                                <p>Schody</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('transport', 'cousine-type') ?>">
                                <i class="fas fa-truck fa-3x"></i>
                                <p>Transport</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="submenu-firms-lista">
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('uslugi', 'cousine-type') ?>">
                                <i class="fas fa-people-carry fa-3x"></i>
                                <p>Usługi</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-budowlane', 'cousine-type') ?>">
                                <i class="fas fa-dolly fa-3x"></i>
                                <p>M.budowlane</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-stalowe', 'cousine-type') ?>">
                                <i class="fas fa-truck-loading fa-3x"></i>
                                <p>M.stalowe</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="submenu-firms-lista">
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('materialy-szklane', 'cousine-type') ?>">
                                <i class="fas fa-shipping-fast fa-3x"></i>
                                <p>M.szklane</p>
                            </a>
                        </li>
                        <li>
                            <a class="submenu-firms-branza"
                               href="<?php echo get_term_link('inne', 'cousine-type') ?>">
                                <i class="fas fa-cogs fa-3x"></i>
                                <p>Inne</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="header" class="entry">
        <div class="wooden">
            <div class="container pos-center">
                <header>
                    <h3><?php the_title(); ?></h3>
                    <?php printFirmsCategories($post->ID) ?>
                    <ul class="difficulty">
                        <?php printRanking($post->ID); ?>
                    </ul>
                </header>
            </div>
        </div>
    </section>

    <section id="entry" class="container">
        <div class="row">
            <div class="col-lg-8">
                <p class="">
                    <img class="main-pic" src="<?php the_post_thumbnail_url(); ?>"/>
                </p>
                <?php the_content(); ?>
            </div>

            <div class="col-lg-4">
                <section class="overview restaurant">
                    <div class="difficulty">
                        <h5>Adres:</h5>
                        <ul class="difficulty big">
                            <span>Wojewódźtwo: <?php echo get_post_meta($post->ID, 'Wojewodztwo', true); ?></span>
                            <span>Miasto: <?php echo get_post_meta($post->ID, 'Miasto', true); ?></span>
                            <span>Kod_pocztowy: <?php echo get_post_meta($post->ID, 'Kod_pocztowy', true); ?></span>
                            <span>Ulica: <?php echo get_post_meta($post->ID, 'Ulica', true); ?></span>
                        </ul>
                    </div>
                    <div class="difficulty">
                        <h5>Kontakt:</h5>
                        <ul class="difficulty big">
                            <span>Telefon: <?php echo get_post_meta($post->ID, 'Telefon', true); ?></span>
                            <span>E-mail: <?php echo get_post_meta($post->ID, 'Email', true); ?></span>
                        </ul>
                    </div>

                </section>

                <?php get_sidebar('firms'); ?>

            </div>
        </div>
    </section>
    <section id="comments">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>