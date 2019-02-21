<?php
/**
 * Пишем блог с нуля!!!
 *
 * Создать точку входа index.php
 * Определить что значит авторизованный пользователь с точки зрения РНР
 * Если пользователь не авторизован - отправить на авторизацию/регистрацию
 * Сделать форму авторизации/регистрации
 * Написать скрипт регистрации
 * Написать скрипт авторизации
 * Если пользователь авторизован - отправить его в наш блог
 * Написать скрипт добавления комментария в блог
 */

require_once 'init.php';

if (!isUserAuthorized()) {
    // user not authorized
    header('Location: registerForm.php');
    die;
}

echo 'Пользователь авторизован<br>';
// User authorized
echo 'You ID is = ' . $_SESSION['user_id'];

if (!empty($_GET['authorized'])) {
    echo 'You just successfully authorized';
}

include "postForm.php";
echo '<br><hr><br>';
include "blog.php";