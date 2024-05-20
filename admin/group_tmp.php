<?php
include_once ("../connect.php");
$sql = mysqli_query($connect, "INSERT INTO `group_tovar` (`Code_group_tovar`, `name_group`) VALUES (NULL, '" . $_POST['name'] . "');");

?>