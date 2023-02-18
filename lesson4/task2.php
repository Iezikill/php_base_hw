<?php
// Задание 2.
// Разработайте функцию с объявленными типами аргументов и возвращаемого 
// значения, принимающую в качестве аргумента массив целых чисел. 
// Результатом работы функции должен быть массив, содержащий три элемента: 
// max — наибольшее число, min — наименьшее число, avg — среднее 
// арифметическое всех чисел массива;

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function maxMinAvg(array $nums):array{
 return $result = [
    'max' => max($nums),
    'min' => min($nums),
    'avg' => array_sum($nums) / count($nums),
 ];
}

print_r(maxMinAvg($numbers));