<?php
    require_once('../boot.php');
    if(isset($_SESSION['login']) && isset($_POST['post']))
    {
        $login = $_SESSION['login'];
        $sql = "SELECT * FROM users WHERE login = '$login'";
        $stmt = get_mysqli()->query($sql);
        $user_nick = $stmt->fetch_row()[3];
        $post = $_POST['post'];
        $sql = "INSERT INTO posts(user, post) VALUES ('$user_nick', '$post')";
        $stmt = get_mysqli()->query($sql);

        header("Location: posts.php");
    }
?>