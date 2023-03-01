<?php

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>

    <?php if (isset($user)) : ?>
        <div style="display:flex">
            <h1>Пользователь:_</h1>
            <h1><?= $username ?></h1>
        </div>
        <a href="?controller=task">Планировщик задач</a>
        <hr>
        <a style="background-color: white; color: black;" href="?action=logout">Выход</a>

    <?php else : ?>
        <h3>Выполните авторизацию</h3>
        <a href="?controller=security&action=signin">Вход</a>
    <?php endif; ?>
</body>

</html>