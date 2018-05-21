<style type="text/css">
    .error {
        padding: 5px 9px;
        border: 1px solid red;
        color: red;
        border-radius: 3px;
    }

    .success {
        padding: 5px 9px;
        border: 1px solid green;
        color: green;
        border-radius: 3px;
    }

    form span {
        color: red;
    }
</style>

<?php
$response = "";
function my_contact_form_generate_response($type, $message)
{
    global $response;
    $response = "<div class='$type'>$message</div>";
}

function addThumbnailToPost($imageUrl, $mimeType, $postId)
{
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($imageUrl);
    $filename = basename($imageUrl);
    if (wp_mkdir_p($upload_dir['path'])) {
        $file = $upload_dir['path'] . '/' . $filename;
    } else {
        $file = $upload_dir['basedir'] . '/' . $filename;
    }

    file_put_contents($file, $image_data);

    $attachment = array(
        'post_mime_type' => $mimeType,
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment($attachment, $file, $postId);

    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    $res1 = wp_update_attachment_metadata($attach_id, $attach_data);
    $res2 = set_post_thumbnail($postId, $attach_id);
}

//response messages
$not_human = "Niepoprawna weryfikacja.";
$missing_content = "Podaj wszystkie informacje.";
$email_invalid = "Nieprawidłowy adres e-mail.";
$message_unsent = "Wiadomość nie została wysłana. Spróbuj ponownie.";
$message_sent = "Dziękujemy, firma dodana - oczekuje weryfikacji.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$human = $_POST['message_human'];
$telefon = $_POST['telefon'];
$content = $_POST['message_content'];
$regulamin = $_POST['message_regulamin'];

$thumbnail = $_FILES['thumbnail'];

$wojewodztwo = $_POST['Wojewodztwo'];
$miasto = $_POST['miasto'];
$ulica = $_POST['ulica'];
$kod_pocztowy = $_POST['Kod_pocztowy'];

if ($_POST['submitted']) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        my_contact_form_generate_response("error", $email_invalid);
    } else //email is valid
    {
        //validate presence of name and message
        if (empty($name) || empty($email)) {
            my_contact_form_generate_response("error", $missing_content);
        } else //ready to go!
        {
            /*                $sent = wp_mail($to, $subject, strip_tags($nip), $headers);*/
            $my_post = [
                'post_title' => $name,
                'post_content' => $content,
                'post_type' => "firms",
                'meta_input' => [
                    'Telefon' => $telefon,
                    'Email' => $email,
                    'Wojewodztwo' => $wojewodztwo,
                    'Kod_pocztowy' => $kod_pocztowy,
                    'Miasto' => $miasto,
                    'Ulica' => $ulica,

                ],
                'post_category' => array(8, 39)
            ];

            $postId = wp_insert_post($my_post);

            if ($thumbnail !== null) {
                $imageUrl = $thumbnail['tmp_name'];
                $imageMimeType = $thumbnail['type'];
                addThumbnailToPost($imageUrl, $imageMimeType, $postId);
            }
            wp_set_post_terms($postId, $_POST['terms'], 'cousine-type');

            if ($postId > 0) {
                my_contact_form_generate_response("success", $message_sent);
            } else {
                my_contact_form_generate_response("error", $message_unsent);
            }
        }
    }
}

$allTerms = get_terms('cousine-type', array(
    'hide_empty' => false,
));

?>

<?php get_header('main'); ?>

<div id="primary" class="site-content">
    <div class="container" id="content" role="main">
        <div class="row">
            <div id="respond" class="col-md-12">
                <?= $response; ?>
                <!--                --><? //= var_export(get_taxonomies(), true) ?>

                <form class="row" action="<?php the_permalink(); ?>" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <p>
                            <label for="name">Nazwa firmy: <span>*</span> <br>
                                <input type="text" name="message_name"
                                       value="<?= esc_attr($_POST['message_name']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="content">Opis: <span>*</span> <br>
                                <textarea class="add_firm" name="message_content">
                                    <?= esc_attr($_POST['message_content']); ?>
                                </textarea>
                            </label>
                        </p>
                        <p>
                            <label for="telefon">Wybierz branże: <span>*</span> <br>
                                <?php foreach ($allTerms as $term) : ?>
                                    <label class="branze">
                                        <input type="checkbox" name="terms[]" value="<?= $term->term_id ?>"/>
                                        <?= $term->name ?>
                                    </label>

                                <?php endforeach; ?>
                            </label>
                        </p>
                        <p class="regulamin_checkbox">
                            <input type="checkbox" name="message_email"
                                   value="<?= esc_attr($_POST['message_regulamin']); ?>">
                            Akceptacja <a href="<?php echo esc_url(home_url('/regulamin')); ?>"><span>Regulaminu</span></a>
                        </p>
                    </div>

                    <div class="col-md-6">
                        <p>
                            <label for="message_email">Email: <span>*</span> <br>
                                <input type="text" name="message_email"
                                       value="<?= esc_attr($_POST['message_email']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="telefon">Telefon_komorkowy: <span>*</span> <br>
                                <input type="text"
                                       name="telefon"
                                       value="<?= esc_attr($_POST['telefon']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="wojewodztwo">Wojewodztwo: <span>*</span> <br>
                                <input type="text" name="wojewodztwo" value="<?= esc_attr($_POST['Wojewodztwo']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="kod_pocztowy">Kod: <span>*</span> <br>
                                <input type="text" name="kod_pocztowy" value="<?= esc_attr($_POST['Kod_pocztowy']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="miasto">Miasto: <br>
                                <input type="text" name="miasto" value="<?= esc_attr($_POST['miasto']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="ulica">Ulica: <span>*</span> <br>
                                <input type="text" name="ulica" value="<?= esc_attr($_POST['ulica']); ?>">
                            </label>
                        </p>
                        <p>
                            <label for="message_human">
                                Miniatura: <br>
                                <input type="file" name="thumbnail">
                            </label>
                        </p>
                        <input type="hidden" name="submitted" value="1">
                        <p class="przeslij_firme"><input type="submit"></p>
                    </div>
                </form>
            </div>


        </div><!-- .entry-content -->


    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>