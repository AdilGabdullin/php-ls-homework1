<?php
/**
 * 1. Создайте массив $bmw с ячейками:
 *    a. model
 *    b. speed
 *    c. doors
 *    d. year
 * 2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
 * 3. Создайте массивы $toyota и $opel аналогичные массиву $bmw (заполните данными)
 * 4. Объедините три массива в один многомерный массив
 * 5. Выведите значения всех трех массивов в виде:
 *    CAR name
 *    name ­ model ­ speed ­ doors ­ year
 *    Например:
 *    CAR bmw
 *    X5 ­ 120 ­ 5 ­ 2015
 */
function task6()
{
    $bmw = [
        'model'  => 'X5',
        'speed'  => 120,
        'doors'  => 5,
        'year'   => 2015
    ];
    $toyota = [
        'model'  => 'Verso',
        'speed'  => 100,
        'doors'  => 5,
        'year'   => 2016
    ];
    $opel = [
        'model'  => 'Zafira Tourer',
        'speed'  => 110,
        'doors'  => 5,
        'year'   => 2017
    ];
    $cars = [
        'bmw'    => $bmw,
        'toyota' => $toyota,
        'opel'   => $opel
    ];
    foreach ($cars as $name => $records) {
        echo
        "CAR $name<br>\n",
        "$records[model] - $records[speed] - $records[doors] - $records[year]<br>\n";
    };
}

task6();
