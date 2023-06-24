<?php
    require_once('../boot.php');
    $title = "Объявления";
    $page_title = "Объявления";
    if(isset($_SESSION['login']))
    {
        $content = '<form action="add_post.php" method="post">
                        <textarea name="post" rows="10" cols="50" maxlength="300" placeholder="Напишите объявление"></textarea>
                        <input type="submit" value="Отправить">
                    </form>';

        $sql = "SELECT * FROM posts";
        $stmt = get_mysqli()->query($sql);
        $content = $content . "<table border = '1'>";
        $count = 0;
        while($row = $stmt->fetch_row())
        {
            $html_row = "";
            $html_row = $html_row . '<tr>';
            $html_row = $html_row . '<td>' . $row[1] . '</td><td>' . $row[2] . '</td>';
            $html_row = $html_row . '</tr>';
            $content = $content . $html_row;
        }
        $content = $content . "</table>";
    }
    else
    {
        $content = "<div>Страница доступна только авторизованным пользователям!</div><br>
                    <form action='../login/login.php'>
                        <button type='submit'>Войти</button>
                    </form>
                ";
    }
    include ("../components/layout.php");
?>