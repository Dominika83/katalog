<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if (is_search()): ?>
        <meta name="robots" content="noindex, nofollw"/>
    <?php endif; ?>

    <title>

        <?php
        //echo bloginfo('name');
        //echo wp_title();

        if (is_archive()) {
            echo ucfirst(trim(wp_title('', false))) . ' - ';
        } else

            if (!(is_404()) && (is_single()) || (is_page())) {
                $title = wp_title('', false);
                if (!empty($title)) {
                    echo $title . ' - ';
                }
            } else

                if (is_404()) {
                    echo 'Nie znaleziono strony';
                }

        if (is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
        } else {
            echo bloginfo('name');
        }

        global $paged;
        if ($paged > 1) {
            echo ' - strona ' . $paged;
        }

        ?>

    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/min-main.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<header class="one_firm fixed-top">
    <div class="pos-center">

        <nav id="main-nav">
            <?php wp_nav_menu(array(
                'name' => 'Menu Główne'
            ));
            ?>
        </nav>
    </div>

    <img src="<?php echo get_template_directory_uri(); ?>/images/footer_top_background.jpg" class="top_background2">
</header>