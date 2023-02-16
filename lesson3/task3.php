<?php
// Задание 3. Подготовьте многомерный ассоциативный массив следующего вида:
// $students = [
//    'ИТ20' => [
//        'Иванов Иван' => 5,
//        'Кириллов Кирилл' => 3
//    ],
//    'БАП20' => [
//        'Антонов Антон' => 4
//    ]
// ];
// В качестве ключей массива используются названия групп. 
// В качестве элементов — отношение студента и его оценки. 
// Добавьте произвольные имена студентов и их оценки в обе группы. 
// После подготовки массива, реализуйте скрипт командной строки, 
// выполняющий следующие вычисления:
// a) Вычислить арифметическое среднее по всем оценкам в рамках группы. 
// Вывести на экран название группы с самым большим вычисленным 
// значением успеваемости;
// b) Составить список на отчисление, в который попадают студенты из 
// любой группы, имеющие оценку ниже трёх. В списке студенты должны быть 
// сгруппированы по их группе. Выведите полученные данные в консоль, 
// с помощью функции print_r;

$students = [
   'ИТ20' => [
       'Иванов Иван' => 5,
       'Кириллов Кирилл' => 3,
       'Окулова Ульяна' => 4,
       'Широкова Анна' => 2,
       'Поздняков Александр' => 2,
       'Соколова Мария' => 4,
       'Лапин Алексей' => 5,
   ],
   'БАП20' => [
       'Антонов Антон' => 4,
       'Смирнов Фёдор' => 5,
       'Кузин Михаил' => 2,
       'Дмитриев Артём' => 3,
       'Борисова Анастасия' => 2,
       'Орлов Михаил' => 3,
       'Воробьева Вероника' => 4,
       'Ефимова София' => 5,
   ]
];

foreach ($students as $group) {
    $sum = 0;
    foreach ($group as $student => $mark) {
        $sum += $mark; 
        if ($mark < 3) {
           $expulsion[] = $student;
        }
    };
    $average[] = $sum / count($group);
};
$max = max($average);
$key = array_search(max($average), $average);
echo "Лучшая группа по успеваемости: ";
print_r (array_keys($students)[$key] . PHP_EOL);
echo "Список на отчисление:" . PHP_EOL;
print_r (implode("\n", $expulsion));