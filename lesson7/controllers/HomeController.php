<?php
$pageHeader = 'Header';
$user = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

require_once 'view/home.php';
