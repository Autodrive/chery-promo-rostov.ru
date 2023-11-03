<?php

$dateTimeZone = new DateTimeZone("Europe/Moscow");
$dateTime = new DateTime("now", $dateTimeZone);
$timeOffset = $dateTimeZone->getOffset($dateTime);

$date = strtotime('+6 day', time());


$d = date('j', $date);
$m = date('m', $date);

$month = array(
    '01' => 'января',
    '02' => 'февраля',
    '03' => 'марта',
    '04' => 'апреля',
    '05' => 'мая',
    '06' => 'июня',
    '07' => 'июля',
    '08' => 'августа',
    '09' => 'сентября',
    '10' => 'октября',
    '11' => 'ноября',
    '12' => 'декабря',
);
$day = $d . ' ' . $month[$m];

$slides = array(
    array(
        'image' => 'chery-november-main-banner.jpg',
        'image-mobile' => 'chery-november-main-banner.jpg',
        'utm' => '',
        'text' => '<div class="column">
                        <div>
                            <p class="title" style="margin-bottom:5px;">Максимальная выгода на покупку<br> нового Chery в КЛЮЧАВТО</p>
                        </div>
                    </div>'
    )
);

