<?php

if (empty($_POST)) return;


if (function_exists($_POST['method']))
    $_POST['method']($_POST['params']);
else
    getStock();


function getFields($filter)
{
    if (!$filter) return false;

    $_filter = [];
    $accept = ["kpp", "compl", "color"];
    parse_str($filter, $_filter);

    $filter = $_filter;

    $model = $filter['model'];

    unset($filter['model']);

    $fp = fopen(__DIR__ . '/../content/stock.json', 'r');
    $stock = (array)json_decode(fread($fp, filesize(__DIR__ . '/../content/stock.json')));
    fclose($fp);

    foreach ($stock as &$car) {
        $car = (array)$car;

        unset($car);
    }

    $stock = array_filter($stock,
        function ($car) use ($model) {
            return (strpos($car['model'], $model) !== false);
        }
    );


    foreach ($filter as $field => $value) {

        if ($filter[$field] && in_array($field, $accept)) {
            $stock = array_filter($stock,
                function ($car) use ($field, $value) {
                    return ($car[$field] ===  $value);
                }
            );
        }
    }

    $compl = array_values(array_unique(array_column($stock, 'compl')));
    $kpp = array_values(array_unique(array_column($stock, 'kpp')));
    $color = array_values(array_unique(array_column($stock, 'color')));

    echo json_encode([
        'compl' => $compl,
        'kpp' => $kpp,
        'color' => $color,
    ]);
}

function getStock()
{

    $fp = fopen(__DIR__ . '/../content/stock.json', 'r');
    $stock = (array)json_decode(fread($fp, filesize(__DIR__ . '/../content/stock.json')));
    fclose($fp);

    foreach ($stock as &$car) {
        $car = (array)$car;

        unset($car);
    }

    $count = count($stock);

    if (!empty($_POST['model'])) {
        $param = $_POST['model'];

        $stock = array_filter($stock,
            function ($car) use ($param) {
                return ((strpos($car['model'], $param) !== false)  && (strlen($car['model']) === strlen($param)));
            }
        );
    }


    if (!empty($_POST['compl'])) {
        $param = $_POST['compl'];

        $stock = array_filter($stock,
            function ($car) use ($param) {
                return (strpos($car['compl'], $param) !== false);
            }
        );
    }

    if (!empty($_POST['kpp'])) {
        $param = $_POST['kpp'];

        $stock = array_filter($stock,
            function ($car) use ($param) {
                return (strpos($car['kpp'], $param) !== false);
            }
        );
    }

    if (!empty($_POST['color'])) {
        $param = $_POST['color'];

        $stock = array_filter($stock,
            function ($car) use ($param) {
                return (strpos($car['color'], $param) !== false);
            }
        );
    }
    shuffle($stock);
    
    $models = json_decode($_POST['models']);

    foreach ($stock as &$car) {
        $color = substr($car['color'], 0);
        $dir = substr($car['dir'], 0);
        foreach ($models as $model) {
            if (strpos($car['model'], $model) !== false)
                $car['image'] = $dir . '/' . $color . '/default.png';
        }
    }

    if ($count === count($stock)) $stock = array_splice($stock, 0, 8);

    echo json_encode(['stock' => array_values($stock)]);

}