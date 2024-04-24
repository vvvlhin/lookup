<?php
session_start();
include_once("connect.php");
if (isset($_POST['myarray'])) {
    $req = false;
    ob_start();
    echo '<pre>';
    $a = $_POST['myarray'];
    foreach ($a as $key => $value) {
        // echo $key, ' ';
        // print_r($value['name']);
        // print_r($value['weight']);
        // print_r($value['quantity']);
        // print_r($value['costCart']);
        // echo '<br>';
    }
    // echo $_SESSION['userid'];
    echo '</pre>';
    error_reporting(E_ALL);
    $_SESSION['array'] = $a;
    $req = ob_get_contents();
    ob_end_clean();
    echo json_encode($req);
    exit;
}