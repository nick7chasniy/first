<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$a='Вася';
$b='c8837b23ff8aaa8a2dde915473ce0991';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['name'] = trim(strip_tags($_POST['name']));
        $_SESSION['pswd'] = $_POST['pswd'];
        //header('Location: '.$_SERVER['PHP_SELF']);
    }
if(isset($_SESSION['name'])) {
    if ($_SESSION['name'] == $a and md5($_SESSION['pswd']) == $b) {
        echo "Вы авторизовались, как $a!";
        include "logout.html";
    }} else {
        include "loginForm.html";
    }


    if (isset($_POST['exit']))
        session_destroy();
?>