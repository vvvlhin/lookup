<?php
include_once ('../connect.php');

if (isset($_POST)) {
    $sql = mysqli_query($connect, "UPDATE `Orders` SET `Status` = " . $_POST['data'] . " WHERE `Orders`.`Code_orders` = " . $_POST['id'] . ";");
    echo "Нормуля";
}
?>