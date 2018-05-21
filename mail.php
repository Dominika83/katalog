<?php
$to = 'dominika.sobiecka@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];

$subject = 'Email z ProdukterFraPolen';
$message = $_POST['message'];

$headers = 'From: webmaster@example.com' . "\r\n";

mail($to, $subject, $message, $headers);
?>