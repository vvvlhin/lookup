<?
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

// $sql = "";
$sql = mysqli_query($connect, "INSERT INTO `Tovar` (`Code_tovar`, `Name_tovar`, `image`, `Groups_tovar`, `Type_obz`, `Kisl`, `gorech`, `polnotel`, `cost250`, `cost500`, `cost1000`, `description`, `short_description`, `hit`, `recommend`, `new`, `stock`) VALUES (NULL, '" . $_POST['Name_tovar'] . "', " . $_POST['img'] . ", " . $_POST['group'] . ", " . $_POST['rate'] . ", " . $_POST['K'] . ", " . $_POST['G'] . ", " . $_POST['P'] . ", " . $_POST['cost250'] . ", " . $_POST['cost500'] . ", " . $_POST['cost1000'] . ", '" . $_POST['description'] . "', '" . $_POST['short_description'] . "', " . $hit . ", " . $rec . ", " . $new . ", " . $stock . ")");
// var_dump($sql);
?>