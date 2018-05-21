<?php

$uslugi_query = new WP_Query (array(
    'post_type' => 'firms',
    'tax_query' => array(
        array(
            'taxonomy' => 'cousine-type',
            'field' => 'term_id',
            'terms' => array(25),
        ),
    ),

));

if ($uslugi_query->have_posts()) :

    ?>


    <div class="col-md-3">
        <?php while ($uslugi_query->have_posts()) : $uslugi_query->the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
            <p>Meble kuchenne<span>1</span></p>
            <p>Meble ogrodowe<span>1</span></p>
            <p>Lorem ipsum<span>1</span></p>
            <p>Lorem ipsum<span>1</span></p>

        <?php endwhile; ?>

    </div>

<?php endif; ?>
