<?php
require_once 'model/TaskProvider.php';
require_once 'model/User.php';

if (!empty($_POST['task'])) {
    $_SESSION['tasksList'][] = $_POST['task'];

    $user = new User($_COOKIE['username']);
    unset($_POST['task']);
    unset($_REQUEST['task']);
}

if (isset($_SESSION['tasksList'])) {
    $tasks = $_SESSION['tasksList'];
} else {
    $tasks = [];
}

require_once 'view/task.php';
