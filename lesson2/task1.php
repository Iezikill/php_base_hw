<?php
// Задание 1
// Разработайте скрипт командной строки, задающий любой исторический вопрос с 
// предоставлением трёх вариантов ответов. Например: «В каком году произошло крещение Руси?». 
// Варианты: 810, 990 или 740 год. В случае, если пользователь ответит вариантом, 
// не входящим в перечень ответов, повторите вопрос. Если пользователь ответил ожидаемым вариантом, 
// но не верно, выведите сообщение о неверном ответе и завершите программу. 
// Если пользователь ответил правильно, поздравьте его и завершите выполнение скрипта.

while (true){
 $year = (int)readline("В каком году распался СССР? (1945, 1991, 1993) ");
if ($year === 1945){
  echo "Неправильный ответ." . PHP_EOL;
  break;
} elseif ($year === 1991){
  echo "Все верно! Поздравляю!" . PHP_EOL;
    break;
}elseif($year === 1993){
  echo "Неправильный ответ." . PHP_EOL;
  break;
}
}





