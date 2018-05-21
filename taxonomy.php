<?php get_header('main'); ?>

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

    <section id="header_category">
        <div class="container caption">
            <div class="row pos-center">
                <h2>Przeglądasz kategorię: <?php echo ucfirst(single_cat_title('', false)); ?></h2>
            </div>
        </div>
    </section>

    <section id="firms">
        <div class="container">
            <div class="row">
                <div class="col-md-8 firms_left">

                    <?php
                    $category_desc = category_description();
                    if (!empty($category_desc)) :
                        ?>

                        <div class="taxonomy-desc">
                            <h2><?php echo ucfirst(single_cat_title('', false)); ?></h2>
                            <p><?php echo $category_desc; ?></p>
                        </div>

                    <?php endif; ?>

                    <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <section class="row entry">
                                <div class="col-md-4">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="col-md-8 description width">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <div>
                                        <ul class="difficulty dark">
                                            <?php printRanking($post->ID); ?>
                                        </ul>
                                    </div>

                                    <p><?php the_excerpt_max_charlength(336); ?></p>
                                    <a class="more" href="<?php the_permalink(); ?>">...</a>
                                </div>
                            </section>
                        <?php endwhile; ?>

                    <?php else : ?>

                        <h4 class="no-entries">Brak postów</h4>

                    <?php endif; ?>

                    <div class="pagination">
                        <ul>
                            <?php
                            global $wp_query;
                            echo generatePagination(get_query_var('paged'), $wp_query);
                            ?>
                        </ul>
                    </div>
                </div>


                <?php get_sidebar(''); ?>
            </div>
        </div>
    </section>

<? get_footer(); ?>