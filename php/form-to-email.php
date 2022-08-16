<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$to = "noeldamps@icloud.com";

$email_from = "noeldamps@icloud.com";
$email_subject = "Neue Nachricht von $name";
$email_body = "Nachricht: $message";
$header = "Neue Nachricht von $name";

// Send Email
mail($to,$email_subject,$email_body,$header)
