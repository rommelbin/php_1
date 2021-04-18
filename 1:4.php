<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Написать функцию, которая принимает один аргумент в виде строки.
// Вся строка кроме двух символов будет состоять из точек. Один символ будет “c” (cat), другой “m” (mouse).
// Функция должна вернуть true если кошка догонит мышь и false в обратном случае.
// Кошка сможет догнать мышку если между ними не более четырёх точек: “c….m” => false, “c...m” => true


function game($game_sit): string
{
    $to_array = str_split($game_sit);
    if ($to_array[0] === 'c' && $to_array[count($to_array) - 1] === 'm') {
        if(count($to_array) > 5) {
            return ($result = false);
        } else
            return ($result = true);
    }
}
$check = game('c......m');
echo $check;