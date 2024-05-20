<?
error_reporting(E_ALL);
include_once ("../connect.php");

if ($_POST['hit'] == 'on') {
    $hit = 1;
} else {
    $hit = 0;
}

if ($_POST['new'] == 'on') {
    $new = 1;
} else {
    $new = 0;
}

if ($_POST['stock'] == 'on') {
    $stock = 1;
} else {
    $stock = 0;
}

if ($_POST['rec'] == 'on') {
    $rec = 1;
} else {
    $rec = 0;
}

$sql = mysqli_query($connect, "UPDATE card_img SET Name_img = '" . $_POST['Name_img'] . "', synonym = '" . $_POST['synonym'] . "' WHERE Code_img = " . $_GET['id'] . ";");
var_dump($sql);
header("Location: ../admin/image.php?page=0");

?>