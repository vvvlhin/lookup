<?php
include_once ("../connect.php");

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    if ($_POST['password'] == $_POST['confirm']) {
        $login = $_POST['login'];
        $password = md5($_POST['password']);

        $query = "SELECT * FROM clients WHERE login='$login'";
        $user = mysqli_fetch_assoc(mysqli_query($connect, $query));

        if (empty($user)) {
            $query = "INSERT INTO clients SET login='$login', password='$password'";
            mysqli_query($connect, $query);
            $_SESSION['auth'] = true;
            echo "1";
        } else {
            echo "Логин занят";
        }
    } else {
        echo "Пароли не совпадают, повторите попытку";
    }
} else {
    echo "Пустой логин или пароль, повторите попытку";
}
?>