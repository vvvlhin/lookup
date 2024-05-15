<?php
include_once ("../connect.php");
session_start();
if (!empty($_POST['Name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])) {
    //$_POST['btn-sub'] = true;
    echo "1";
    // echo $_SESSION['btn-sub'];
} else {
    echo "Заполненны не все поля, повторите попытку";
}

?>