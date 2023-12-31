<?php
$models = [];
$cars = array(
    array(
        'name' => 'Arrizo 8',
        'dir' => 'Arrizo 8',
        'benefit' => '',
        'order' => 0,
        'image' => 'default.png',
        'model' => 'Arrizo 8',
        'get' => 'arrizo8',
        'color' => 'color_8_arrizo',
        'discount' => ''
    ),
    array(
        'name' => 'Tiggo 7 PRO MAX',
        'dir' => 'Tiggo 7 PRO MAX',
        'benefit' => '',
        'order' => 1,
        'image' => 'default.png',
        'model' => 'Tiggo 7 PRO MAX',
        'get' => 'tiggo7promax',
        'color' => 'color_7promax',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 4 PRO',
        'dir' => 'Tiggo 4 PRO',
        'benefit' => '',
        'order' => 2,
        'image' => 'default.png',
        'model' => 'Tiggo 4 PRO',
        'get' => 'tiggo4pro',
        'color' => 'color_4_pro',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 7 PRO Plug-in hybrid',
        'dir' => 'Tiggo 7 PRO Plug-in hybrid',
        'benefit' => '',
        'order' => 3,
        'image' => 'default.png',
        'model' => 'Tiggo 7 PRO<br>PLUG-IN <span>HYBRID</span>',
        'get' => 'tiggo7prohybrid',
        'color' => 'color_7prohybrid'
    ),
    array(
        'name' => 'Tiggo 8 PRO span<span>e+</span>',
        'dir' => 'Tiggo 8 PRO e plus',
        'benefit' => '',
        'order' => 4,
        'image' => 'default.png',
        'model' => 'Tiggo 8 PRO <span>e+</span>',
        'get' => 'tiggo8proeplus',
        'color' => 'tiggo_8_pro_e_plus',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 8',
        'dir' => 'Tiggo 8',
        'benefit' => '',
        'order' => 5,
        'image' => 'default.png',
        'model' => 'Tiggo 8',
        'get' => 'tiggo8',
        'color' => 'color_8',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 8 PRO',
        'dir' => 'Tiggo 8 PRO',
        'benefit' => '',
        'order' => 6,
        'image' => 'default.png',
        'model' => 'Tiggo 8 PRO',
        'get' => 'tiggo8pro',
        'color' => 'color_8_pro',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 8 PRO MAX',
        'dir' => 'Tiggo 8 PRO MAX',
        'benefit' => '',
        'order' => 7,
        'image' => 'default.png',
        'model' => 'Новый<br>Tiggo 8 PRO MAX',
        'get' => 'tiggo8promax',
        'color' => 'color_8_pro_max',
        'discount' => 'Зимняя резина в подарок*'
    ),
    array(
        'name' => 'Tiggo 7 PRO',
        'dir' => 'Tiggo 7 PRO',
        'benefit' => '',
        'order' => 8,
        'image' => 'default.png',
        'model' => 'Tiggo 7 PRO',
        'get' => 'tiggo7pro',
        'color' => 'color_7pro'
    ),
    // array(
    //     'name' => 'Tiggo 4',
    //     'dir' => 'Tiggo 4',
    //     'benefit' => '',
    //     'order' => 6,
    //     'image' => 'default.png',
    //     'model' => 'Tiggo 4',
    //     'get' => 'tiggo4',
    //     'color' => 'color_4_7',
    //     'discount' => 'Зимняя резина в подарок*'
    // ),


);

if (isset($_GET['model']) && $_GET['model'] )
    $model = $_GET['model'];

if (isset($model) && $model ){
    $i = 0;

    $count = count(array_filter($cars,
        function ($car) use ($model) {
            return is_numeric(stripos($car['get'], $model));
        })
    );

    foreach ($cars as &$car) {
        if (is_numeric(stripos($car['get'], $model)))
            $car['order'] = $i++;
        else
            $car['order'] += $count;

        unset($car);
    }
}

$order = array_column($cars, 'order');
array_multisort($order, SORT_ASC, $cars);

foreach ($cars as $car) {
    $models[] = $car['model'];
}

$models = array_unique($models);