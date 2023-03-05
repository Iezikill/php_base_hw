<?php

require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Ivan', 'ivanov@mail.ru');
$task = new Task($user, 1, 'New task');
var_dump($task);

$task->setDescription(readline("Какая задача стоит перед вами сегодня?"));
$task->markAsDone();
var_dump($task);

$user2 = new User('Viktoriya', 'viktory@mail.ru');
TaskService::addComment($user2, $task, readline("Напишите Ваш комментарий?"));
var_dump($task);
