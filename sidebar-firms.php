<div class="widgets">

    <input type="hidden" id="gmap-address" value="<?php echo get_post_meta($post->ID, 'Adres_Google', true); ?>"/>

    <section class="map">

        <?php dynamic_sidebar('firms-details-widgets') ?>

</div>