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
                                <p><?php the_field('meble'); ?></p>
                            </a>
                        </li>
                        <li>
                            <a class="schody"
                               href="<?php echo get_term_link('schody', 'cousine-type') ?>">
                                <i class="fas fa-signal fa-3x"></i>
                                <p><?php the_field('schody'); ?></p>
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

    <section id="search">
        <div class="container caption firms">
            <div class="row pos-center">
                <div class="col-md-12">
                    <?php $search = getQuerySingleParam('search'); ?>

                    <form class="search" method="get" action="<?php getCurrentPageUrl(); ?>">
                        <label for="search">Znajdź firmę:</label>
                        <fieldset>
                            <input type="text" name="search" id="search" value="<?php echo $search ?>"/>
                            <input type="submit" value=""/>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section id="firms">
        <div class="container">
            <div class="row">
                <div class="col-md-8 firms_left">

                    <?php if (isset($search)): ?>
                        <h4 class="search-results">Wynik wyszukiwania:</h4>
                    <?php endif; ?>


                    <?php
                    $query_params = getQueryParams();
                    if (isset($query_params['search'])) {
                        $query_params['post_title_like'] = $query_params['search'];
                        unset($query_params['search']);
                    }

                    $loop = new WP_Query($query_params);
                    ?>


                    <?php if ($loop->have_posts()) : ?>

                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>


                            <section id="firms-<?php the_ID(); ?>" <?php post_class('row', 'firms__box'); ?>>

                                <?php if (get_post_format($post->ID) == 'gallery'): ?>

                                    <div class="col-md-4">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                    <div class="col-md-8 description">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div>
                                            <?php printFirmsCategories($post->ID) ?>
                                            <ul class="difficulty dark">
                                                <?php printRanking($post->ID); ?>
                                            </ul>
                                        </div>
                                        <p><?php the_excerpt_max_charlength(173); ?></p>
                                        <!--
                                        <a class="more" href="<?php the_permalink(); ?>">...</a>
                                        -->
                                    </div>

                                <?php else: ?>

                                    <div class="col-md-8 description width">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <div>
                                            <?php printFirmsCategories($post->ID) ?>
                                            <ul class="difficulty dark">
                                                <?php printRanking($post->ID); ?>
                                            </ul>
                                        </div>
                                        <p><?php the_excerpt_max_charlength(173); ?></p>
                                        <a class="more" href="<?php the_permalink(); ?>">...</a>
                                    </div>


                                <?php endif; ?>
                            </section>


                        <?php endwhile; ?>

                    <?php else: ?>
                        <h4>Nie ma żadnych postów</h4>

                    <?php endif; ?>

                    <div class="pagination">
                        <?php generatePagination(get_query_var('paged'), $loop); ?>
                    </div>
                </div>

                <?php get_sidebar('firms-archive'); ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>