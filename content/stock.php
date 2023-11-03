<?php

$fp = fopen(__DIR__ . '/stock.json', 'r');
$stock = (array)json_decode(fread($fp, filesize(__DIR__ . '/stock.json')));
fclose($fp);

foreach ($stock as &$car) {
    $car = (array)$car;

    unset($car);
}

$priority = array_column($stock, 'priority');
array_multisort($stock, SORT_DESC, $priority);

foreach ($stock as &$car) {
    $color = substr($car['color'], 0);
    $dir = isset($car['dir']) ? substr($car['dir'], 0) : '\/static\/';
    foreach ($models as $model) {
        if (isset($car['model']) ? strpos($car['model'], $model) !== false : '')
            $car['image'] = $dir . '/' . $color . '/default.png';
    }
}

foreach ($cars as &$car) {
    $car['count'] = count(
        array_filter($stock,
            function ($item) use ($car) {
                return (isset($item['model']) ? (strpos($item['model'], $car['model']) !== false &&
                    (strpos(substr($item['model'], strlen($car['model']), strlen($item['model'])), 'NEW') === false)) : '');
            }
        )
    );

    unset($car);
}
shuffle($stock);







