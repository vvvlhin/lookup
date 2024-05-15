<?php
include_once ('../connect.php');

echo $_POST['id'];

if (isset($_POST)) {
    $sql = mysqli_query($connect, "UPDATE `clients` SET `admin` = '" . $_POST['data'] . "' WHERE `clients`.`Code_clients` = " . $_POST['id'] . ";");
    // echo "Нормуля";
    // var_dump($sql);
}
?>