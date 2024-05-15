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

$sql = mysqli_query($connect, "UPDATE Tovar SET Name_tovar = '" . $_POST['Name_tovar'] . "', image = '" . $_POST['img'] . "', Groups_tovar = '" . $_POST['group'] . "', Type_obz = '" . $_POST['rate'] . "', Kisl = '" . $_POST['K'] . "', gorech = '" . $_POST['G'] . "', polnotel = '" . $_POST['P'] . "', cost250 = '" . $_POST['cost250'] . "', cost500 = '" . $_POST['cost500'] . "', cost1000 = '" . $_POST['cost1000'] . "', description = '" . $_POST['description'] . "', short_description = '" . $_POST['short_description'] . "', hit = " . $hit . ", new = " . $new . ", recommend = " . $rec . ", stock = " . $stock . " WHERE Code_tovar = " . $_GET['id'] . ";");
var_dump($sql);
// var_dump("UPDATE Tovar SET Name_tovar = '" . $_POST['Name_tovar'] . "', image = '" . $_POST['img'] . "', Groups_tovar = '" . $_POST['group'] . "', Type_obz = '" . $_POST['rate'] . "', Kisl = '" . $_POST['K'] . "', gorech = '" . $_POST['G'] . "', polnotel = '" . $_POST['P'] . "', cost250 = '" . $_POST['cost250'] . "', cost500 = '" . $_POST['cost500'] . "', cost1000 = '" . $_POST['cost1000'] . "', description = '" . $_POST['description'] . "', short_description = '" . $_POST['short_description'] . "', hit = " . $hit . ", new = " . $new . ", rec = " . $rec . ", stock = " . $stock . " WHERE Code_tovar = " . $_GET['id'] . ";");
header("Location: ../admin/goods.php?page=0");

?>