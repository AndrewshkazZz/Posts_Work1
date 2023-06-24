<?php
    require_once('../boot.php');
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['nick']))
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $nick = $_POST['nick'];
        $sql = "INSERT INTO users(login, password, nick) values('$login', '$password', '$nick')";
        $stmt = get_mysqli()->query($sql);
        header("Location: ../login/login.php");
    }
?>