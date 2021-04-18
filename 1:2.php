<?php
//Функция, которая вычисляет сумму всех чётных элементов массива.
$arr = [1, 3, 4, 5, 7, 8, 12, 15];

function sum_fun(array $arr): int
{
    $acc = 0;
    foreach ($arr as $value) {
        if (($value % 2) === 0) {
            $acc += $value;
        }
    }
    return $acc;
}

$a = sum_fun($arr);
echo $a;

