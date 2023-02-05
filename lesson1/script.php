<?php
$userName = readline('Как вас зовут?' . PHP_EOL);
// $userAge = readline('Сколько вам лет?' . PHP_EOL);
// echo("Вас зовут $userName, вам $userAge лет.");
$task1 = readline('Какая задача стоит перед вами сегодня? ');
$time1 = readline('Сколько примерно времени эта задача займет? ');
$task2 = readline('Какая задача стоит перед вами сегодня? ');
$time2 = readline('Сколько примерно времени эта задача займет? ');
$task3 = readline('Какая задача стоит перед вами сегодня? ');
$time3 = readline('Сколько примерно времени эта задача займет? ');
$totalTime = $time1+$time2+$time3;
echo"$userName, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ($time1 ч)
- $task2 ($time2 ч)
- $task3 ($time3 ч)
Примерное время выполнения плана = $totalTime ч" . PHP_EOL;

?>