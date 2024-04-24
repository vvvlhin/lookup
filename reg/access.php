<?php
include_once ("../connect.php");
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($connect, $_POST['login']);
    $query = "select count(*) as cntUser from clients where login='" . $username . "'";
    $result = mysqli_query($connect, $query);
    $response = "<span style='color: green;'>Доступно</span>";
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $response = "<span style='color: red;'>Занят</span>";
        }

    }

    echo $response;
    die;
}