<?php
/**
 * 1. Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега
 *    <table>
 * 2. Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
 * 3. Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
 * 4. Во всех остальных случаях результат выводить просто числом.
 */

function task7()
{
    echo "<table>\n";
    echo "    <caption>Таблица умножения</caption>\n";
    for ($i = 1; $i <= 10; $i++) {
        echo "    <tr>";
        for ($j = 1; $j <= 10; $j++) {
            $cell = $i * $j;
            if     ($i % 2 === 0 && $j % 2 === 0)
                $cell = "($cell)";
            elseif ($i % 2 === 1 && $j % 2 === 1)
                $cell = "[$cell]";
            //Добавлием пробелы до 5 символов, чтобы код страницы был ровным
            $cell = substr('    ', 0, 5 - strlen($cell)) . $cell;
            echo "<td>$cell</td>";
        }
        echo "</tr>\n";
    };
    echo "</table>";
}

task7();
