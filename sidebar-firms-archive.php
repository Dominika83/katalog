<div class="col-md-4 sidebar">

    <div class="widgets">
        <h2>Ostatnio dodane</h2>

        <?php

        $recipes_query = new WP_Query(array(
            'numberposts' => 4,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'firms',
            'post_status' => 'publish'
        ));

        if ($recipes_query->have_posts()) :

            ?>

            <ul class="widget_ostatnio_dodane">
                <?php while ($recipes_query->have_posts()) :
                $recipes_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endwhile; ?>
                </li>
            </ul>

        <?php endif; ?>

        <?php dynamic_sidebar('firms-archive-widget') ?>
    </div>
</div>

