<?php
function isUserAuthorized(): bool
{
    return isset($_SESSION['user_id']);
}

function getPasswordHash(string $userPassword): string
{
    return sha1($userPassword . '.sdfifao38vj,');
}

function getUserByLogin(string $login): array
{
    $query = "SELECT * FROM users WHERE `name` = '$login' LIMIT 1";
    $ret = getDbConnection()->query($query);
    $users =  $ret->fetchAll();
    return $users[0] ?? [];
}