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

    <section id="about">
        <div class="container">
            <div class="about_title">
                <h1>Masz pytania? Chcesz się u nas zareklamować?</h1>
            </div>
            <div class="row reklama">
                <div class="col-md-12">
                    <h2>Wypełnij formularz.<br>Skontaktujemy się z Tobą.</h2>
                    <p id="feedback"><?php echo $feedback; ?></p>
                    <form method="post" action="mail.php">
                        <input class="form-control" type="text" name="name" placeholder="Imię i nazwisko" id="">
                        <input class="form-control" type="email" name="email" placeholder="Adres e-mail" id="">
                        <textarea class="form-control" name="message" id="exampleTextarea"
                                  placeholder="Treść wiadomości"
                                  rows="10"></textarea>
                        <button type="submit" name="submit" class="btn">Wyślij wiadomość</button>
                    </form>
                </div>
            </div>
    </section>

<?php get_footer(); ?>