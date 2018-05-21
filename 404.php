<?php get_header(); ?>
<?php
wp_redirect(wp_login_url($_SERVER['REQUEST_URI']));
?>

<section id="error404" class="content">
    <div class="pos-center">

        <div class="wrapper">
            <div class="code"></div>
            <div class="message">
                <h2>Zarejestruj się, aby dodać firmę</h2>
                <a href="<?php echo esc_url(home_url('/login')); ?>">Logowanie</a>
            </div>
        </div>

    </div>
</section>