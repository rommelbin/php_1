<?php

//Есть массив с числами [1, -2, 4, 5, 56543, 23, 4, -43435, 43, -3, 0, 1, 23, 4].
// Составьте функцию, которая найдёт первое вхождение числа,
// которое больше -10, но меньше -1.
echo '<pre>';
$array_1 = [1, -2, 4, 5, 56543, 23, 4, -43435, 43, -3, 0, 1, 23, 4,];
function find_first(array $arr)
{
    $found = 0;
    foreach ($arr as $key => $value) {
        if (is_integer($value)) {
            if ($value > -10 && $value < -1) {
                $found = $value;
                echo 'Найдено!' . '<br>' . 'Это' . $value . '<br>';

                break;
            } else {
                echo $value . ' - Не то!' . '<br>';
            }
        } else {
            echo 'Ошибка! ' . $key . ' => ' . $value . '<br>';
            break;
        }


    }
    return $found;
}

find_first($array_1);

echo '</pre>';