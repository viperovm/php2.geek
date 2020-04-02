<?php
?>

<nav class="main-nav">
    <ul class="main-menu">
        <li><a href="/">Главная</a></li>
        <li><a href="?controller=gallery">Галлерея</a></li>
        <li><a href="?controller=goods">Каталог товаров</a></li>
        <?php if ($user):?>
        <li><a href="?controller=user&action=info">Личный кабинет</a></li>
        <li><a href="?controller=user&action=logout">Выйти</a></li>
        <?php else: ?>
        <li><a href="?controller=user&action=login">Войти</a></li>
        <li><a href="?controller=user&action=reg">Регистрация</a></li>
        <?php endif ?>
    </ul>
</nav>
