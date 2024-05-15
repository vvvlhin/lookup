<?php
include_once ("../connect.php");
session_start();
$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "UPDATE clients SET names='$name', phone='$phone', email='$email' WHERE Code_clients='$id'";
echo mysqli_query($connect, $query);

?>