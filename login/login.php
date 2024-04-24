<?php
include_once ("../connect.php");
session_start();
if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT * FROM clients WHERE login='$login' AND password='$password'";
    $res = mysqli_query($connect, $query);
    $user = mysqli_fetch_assoc($res);
    if (!empty($user)) {
        $_SESSION['auth'] = true;
        echo "1";
    } else {
        echo "Неверный логин или пароль, повторите попытку";
    }
}

?>