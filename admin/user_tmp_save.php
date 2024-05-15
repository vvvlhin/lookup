<?

include_once ('../connect.php');
$id = mb_substr($_POST['mess'], 0, 1);

$sql = mysqli_query($connect, "UPDATE `clients` SET `admin` = '2' WHERE `clients`.`Code_clients` = " . $id . ";");

?>