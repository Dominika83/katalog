<?php

add_action('init', 'katalog_firm_init_posttypes');

/**
 *
 */
function katalog_firm_init_posttypes()
{

    /*
     * Register Firms Post Type
     */
    $firms_args = array(
        'labels' => array(
            'name' => 'Firmy',
            'singular_name' => 'Firmy',
            'all_items' => 'Wszystkie firmy',
            'add_new' => 'Dodaj nową firmę',
            'add_new_item' => 'Dodaj nową firmę',
            'edit_item' => 'Edytuj firmę',
            'new_item' => 'Nowa firma',
            'view_item' => 'Zobacz firmę',
            'search_items' => 'Szukaj firmy',
            'not_found' => 'Nie znaleziono żadnych firm',
            'not_found_in_trash' => 'Nie znaleziono żadnych firm w koszu',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
        ),
        'has_archive' => true

    );

    register_post_type('firms', $firms_args);

}


add_action('init', 'katalog_firm_init_taxonomies');

/* rejestruje taksoniomie*/

function katalog_firm_init_taxonomies()
{

    // Cousine Types
    register_taxonomy(
        'cousine-type',
        array('firms'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Rodzaj usług',
                'singular_name' => 'Rodzaj usług',
                'search_items' => 'Wyszukaj rodzaj usług',
                'popular_items' => 'Najpopularniejsze rodzaje usług',
                'all_items' => 'Wszystkie rodzaje usług',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj rodzaj usług',
                'update_item' => 'Aktualizuj',
                'add_new_item' => 'Dodaj nowy rodzaj usług',
                'new_item_name' => 'Nazwa nowego rodzaju usług',
                'separate_items_with_commas' => 'Oddziel rodzaje usług przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń rodzaj usług',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych usług',
                'menu_name' => 'Rodzaj usługi',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'cousine-type')
        ));


    // Cities
    register_taxonomy(
        'city',
        array('firms'),
        array(
            'hierarchical' => FALSE,
            'labels' => array(
                'name' => 'Miasto',
                'singular_name' => 'Miasto',
                'search_items' => 'Wyszukaj miasto',
                'popular_items' => 'Najpopularniejsze miasto',
                'all_items' => 'Wszystkie miasta',
                'most_used_items' => null,
                'parent_item' => null,
                'parent_item_colon' => null,
                'edit_item' => 'Edytuj miasto',
                'update_item' => 'Aktualizuj',
                'add_new_item' => 'Dodaj nowe miasto',
                'new_item_name' => 'Nazwa nowego miasta',
                'separate_items_with_commas' => 'Oddziel miasta przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń miasto',
                'choose_from_most_used' => 'Wybierz spośród najczęściej używanych miast',
                'menu_name' => 'Miasto',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'city')
        ));

}


add_action('admin_head', 'lte_admin_icons');
function lte_admin_icons()
{
    $ICON_URL = KATALOG_FIRM_THEME_URL . 'img/admin/';

    ?>
    <style>
        /* po to żeby w panelu admina zmienić domyślne ikonki custom post types*//* dla menu */

        #menu-posts-firms .wp-menu-image {
            background-repeat: no-repeat;
            background-position: center 0px !important;
        }

        #menu-posts-firms:hover .wp-menu-image,
        #menu-posts-firms.wp-has-current-submenu .wp-menu-image {
            background-repeat: no-repeat;
            background-position: center 0px !important;
        }

        #menu-posts-firms .wp-menu-image {
            background-image: url('<?php echo $ICON_URL.'company.png' ?>');
        }

        .icon32-posts-firms {
            background-position: center center !important;
        }

        /* dla posdtronyu*/
        .icon32-posts-firms {
            background-image: url('<?php echo $ICON_URL.'company.png' ?>') !important;
        }

    </style>
    <?php
}

?>
