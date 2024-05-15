<?
include_once ('../connect.php');

$sql = mysqli_query($connect, "UPDATE `clients` SET `admin` = '0' WHERE `clients`.`Code_clients` = " . $_POST['id'] . ";");


?>