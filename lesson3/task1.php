<?php
// Задание 1. Подготовьте два массива одинаковой размерности, но не менее 10 
// элементов, с произвольными числовыми значениями. Разработайте скрипт для 
// запуска из командной строки, выполняющий перемножение элементов двух 
// массивов и выводящий результат в консоль с помощью print_r. 
// Умножение должно выполняться только между элементами соответствующих 
// индексов, то есть нулевой элемент первого массива умножается на 
// нулевой элемент второго массива;

$array1 = [15, 13, 12, 19, 17, 6, 11, 1, 9, 18, 10, 5, 20, 4, 2];
$array2 = [14, 3, 6, 4, 19, 13, 15, 5, 12, 18, 1, 8, 9, 7, 10];
$array3 = [];

for ($i = 0; $i < count($array1); $i++) {
  $array3[] = $array1[$i] * $array2[$i];
}
print_r($array3);
