<?php
/**
 * 1. Создайте константу и присвойте ей значение.
 * 2. Проверьте, существует ли константа, которую Вы хотите использовать
 * 3. Выведите значение созданной константы
 * 4. Попытайтесь изменить значение созданной константы.
 */

function task3()
{
    define('CONFESSION', 'Pastafarianism');
    if (defined('CONFESSION')) {
        echo "Константа существует<br>\n";
    };
    echo CONFESSION;
    //CONFESSION = 'Satanism';
    //Попытка изменения константы вызывает синтаксическую ошибку.
}

task3();