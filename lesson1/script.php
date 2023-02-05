<?php
$userName = readline('Как вас зовут?' . PHP_EOL);
// $userAge = readline('Сколько вам лет?' . PHP_EOL);
// echo("Вас зовут $userName, вам $userAge лет.");
$task1 = readline('Какая задача стоит перед вами сегодня?' . PHP_EOL);
$time1 = readline('Сколько примерно времени эта задача займет?' . PHP_EOL);
$task2 = readline('Какая задача стоит перед вами сегодня?' . PHP_EOL);
$time2 = readline('Сколько примерно времени эта задача займет?' . PHP_EOL);
$task3 = readline('Какая задача стоит перед вами сегодня?' . PHP_EOL);
$time3 = readline('Сколько примерно времени эта задача займет?' . PHP_EOL);
echo("$userName, сегодня у вас запланировано 3 приоритетных задачи на день:" . PHP_EOL);
echo("- $task1 ($time1 ч)" . PHP_EOL);
echo("- $task2 ($time2 ч)" . PHP_EOL);
echo("- $task3 ($time3 ч)" . PHP_EOL);
$totalTime = $time1+$time2+$time3;
echo("Примерное время выполнения плана = $totalTime ч" . PHP_EOL);

?>