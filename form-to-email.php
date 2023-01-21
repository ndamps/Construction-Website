<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once '../vendor/autoload.php';

//Setup SMTP Gateway
$transport = new Swift_SmtpTransport('smtp.gmail.com',465,'ssl');
$transport->setUsername("noeldamps1@gmail.com");
$transport->setPassword("oqcpsqlbeypgfhwf");

//Init Mail-Object
$mailer = new Swift_Mailer($transport);

//Build Email
$message = new Swift_Message("Neue Nachricht von ".$_POST['name']);
$message->setFrom([$_POST['email']]);
$message->setTo(['noeldamps@icloud.com']);
$message->setBody($_POST['message']."\nKontaktdaten:\nTelefonnummer: ".$_POST['phone']."\nEmail-Adresse: ".$_POST['email']);

//Send Email
$result = $mailer->send($message);

//Redirect to Homepage
header("Location: ../index.htmll#contact");
exit();

?>
