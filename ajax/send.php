<?php

if (empty($_POST))
  return;

require_once 'cmailer.php';

$msg = '';

if (isset($_POST['phone']))
  $msg .= 'Телефон: <b>' . $_POST['phone'] . '</b></br></br>';

$msg .= 'Referer: <b>' . $_SERVER['HTTP_REFERER'] . '</b></br></br>';

$msg .= 'IP: <b>' . $_SERVER['REMOTE_ADDR'] . '</b></br></br>';

$to = ['k.lebedeva@autodrive-agency.ru'];
//$to[] = 'avto_dlya_vas@mail.ru';

var_dump('Отправленно');
$errors = false;

foreach ($to as $recepient) {
    if (!sendmail($recepient, 'Заявка с сайта ' . $_SERVER['SERVER_NAME'], $msg))
        $errors = true;
}