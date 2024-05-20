<?
error_reporting(E_ALL);
include_once ("../connect.php");

$sql = mysqli_query($connect, "UPDATE group_tovar SET name_group = '" . $_POST['name_group'] . "' WHERE Code_group_tovar = " . $_GET['id'] . ";");
header("Location: ../admin/groups.php?page=0");

?>