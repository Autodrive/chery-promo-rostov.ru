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
        'image' => 'BF_1920x1280CHERY_T8PM_0311_NoLogo_NoTXT.jpg',
        'image-mobile' => 'BF_1920x1280CHERY_T8PM_0311_NoLogo_NoTXT.jpg',
        'utm' => '',
        'text' => '<div class="column">
                        <div>
                            <p class="title" style="margin-bottom:5px;">Финал продаж автомобилей CHERY по низким ценам!<br>
                                Выгода до <nobr><span class="title_benefit">1&nbsp;000&nbsp;000 ₽</span></nobr></p>
                            <p class="title"><span class="title_benefit">в подарок</span> зимняя резина и КАСКО *</p>
                        </div>
                    </div>'
    )
);

