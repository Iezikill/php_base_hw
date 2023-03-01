<?php

require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Ivan', 'ivanov@mail.ru', 'male');
$user->setAge(22);

$task = new Task($user);

$task->setDescription(readline("Какая задача стоит перед вами сегодня?"));
$task->setPriority(readline("Какой приоритет у данной задачи?"));
$task->markAsDone();

$user2 = new User('Viktoriya', 'viktory@mail.ru', 'female');
$user->setAge(30);

TaskService::addComment($user2, $task, readline("Напишите Ваш комментарий?"));

var_dump($task);
