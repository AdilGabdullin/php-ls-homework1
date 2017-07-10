<?php
/**
 * 1. Создайте переменную $str, которой присвойте строковое значение, содержащее отдельные слова разделённые пробелом.
 *    Выведите строку на экран.
 * 2. Затем разбейте строку на массив. Выведите массив. Затем используя циклы while или do-while (на ваше усмотрение)
 *    развернуть массив и склеить в строку используя любой символ, кроме пробела. Вывести результат.
 */

function task8()
{
    $str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
    echo "$str<br>\n";
    $arr = explode(' ', $str);
    print_r($arr);
    echo "<br>\n";
    $i = 0;
    $resultStr = "$arr[0]";
    while (++$i < count($arr)) {
        $resultStr .= '?' . $arr[$i];
    };
    echo "$resultStr";
}

task8();