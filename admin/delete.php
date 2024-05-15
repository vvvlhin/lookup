<?
include_once ('../connect.php');


$sql = mysqli_query($connect, "DELETE FROM Tovar WHERE Code_tovar = " . $_POST['id'] . " ");
?>