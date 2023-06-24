<?php
    $title = "Главная";
    $page_title = "Главная";
    $content = "<form action='login/login.php'>
    <button type='submit'>Войти</button>
    </form>

    <form action='reg/reg.php'>
    <button type='submit'>Зарегистрироваться</button>
    </form>";
    include ("components/layout.php");
?>