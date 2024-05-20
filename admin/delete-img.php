<?
include_once ('../connect.php');
error_reporting(E_ALL);
$sql = mysqli_query($connect, "DELETE FROM card_img WHERE Code_img = " . $_POST['id'] . "");

var_dump("DELETE FROM card_img WHERE Code_img = " . $_POST['id'] . "");
?>