<?php
include_once ('../connect.php');

if (isset($_POST['query'])) {
    $query = "SELECT * FROM clients WHERE names LIKE '{$_POST['query']}%' AND admin != 2 AND admin != 1 LIMIT 100";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {
            echo "<div id=items>$res[Code_clients]. $res[surname] $res[names] $res[patryo]</div>";
        }

    } else {
        echo "<div class='alert alert-danger mt-3 text-center' role='alert'>Пользователь не найден</div>";
    }
}
?>