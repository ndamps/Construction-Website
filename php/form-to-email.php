<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

require_once __DIR__.'/vendor/autoload.php';

$transport = new Swift_SmtpTransport('smtp.gmail.com',465,'ssl');
$transport->setUsername("noeldamps1@gmail.com");
$transport->setPassword("oqcpsqlbeypgfhwf")

$mailer = new Swift_Mailer($transport);

$message = new Swift_Message('Test');
$message->setFrom(['noeldamps@icloud.com']);
$message->setTo(['noeldamps@icloud.com']);
$mes = $_POST['message'];
$message->setBody($mes);

$result = $mailer->send($message);


?>