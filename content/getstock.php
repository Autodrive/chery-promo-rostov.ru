<?php
require_once __DIR__ . '/../lib/xls/Classes/PHPExcel/IOFactory.php';

$keys = [
    'dns', 'priority', 'model', 'compl', 'kpp', 'engine', 'vin', 'color', 'class', 'year', 'price',
    'discount_distribute', 'discount_trade-in', 'discount_loyalty', 'price_special', 'benefit'
];


$xls = PHPExcel_IOFactory::load(__DIR__ . '/list.xls');
$xls->setActiveSheetIndex(0);

$sheet = $xls->getActiveSheet();

$stock = $sheet->toArray();
unset($stock[0]);

$models = array_column($cars, 'name');

array_walk(
    $stock,
    function (&$row) use ($keys) {
        $row = array_combine($keys, $row);
    }
);


$fp = fopen(__DIR__ .'/stock.json', 'w');
fwrite($fp, json_encode($stock));
fclose($fp);