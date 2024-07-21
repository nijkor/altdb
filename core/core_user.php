<?php

/**
 *  Получение данных пользователя
 */

session_start();

if(isset($_SESSION['uid']))
{
    $getUdata = $mysqli->query("SELECT * FROM `users` WHERE `uid`='{$_SESSION['uid']}'");
    $udata['user'] = $mysqli->fetch_assoc($getUdata);

    $getUposts = $mysqli->query("SELECT * FROM `uposts` WHERE `uid`='{$_SESSION['uid']}'");
    $udata['uposts'] = $mysqli->fetch_assoc($getUposts);
}