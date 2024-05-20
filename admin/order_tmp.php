<?php
include_once ('../connect.php');

// var_dump($_POST['query']);

$res_count = mysqli_query($connect, "SELECT COUNT(*) FROM Orders");
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$limit = 5;
$number = ($page * $limit);
$row = mysqli_fetch_row($res_count);
$total = $row[0];
$str_page = ceil($total / $limit);
if (!empty($_POST['query'])) {
    $query = "SELECT * FROM Orders WHERE Code_orders LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($connect, $query);
} else {
    $result = mysqli_query($connect, "SELECT * FROM Orders ORDER BY Code_orders DESC LIMIT " . $number . ", " . $limit . "");
}

$products = array();
while ($res = mysqli_fetch_array($result)) {
    $products[] = $res;
}
?>
<? foreach ($products as $key => $product): ?>
    <tr class="row__group">
        <td id="id" style="text-align: center;"><?= $product['Code_orders'] ?></td>
        <? $phpdate = strtotime($product['Date']);
        $mysqldate = date('d.m.Y', $phpdate); ?>
        <td><?= $mysqldate; ?></td>
        <td><?= $product['names'] ?></td>
        <td><?= $product['phone'] ?></td>
        <td style="text-align: center;">
            <?
            switch ($product['Status']) {
                case 1:
                    echo "
                      <form id=form>
                      <select style='color: #FF8243;' name=select class=select name=language>
                          <option hidden value=''>Ожидает звонка</option>
                          <option value=2>В работе</option>
                          <option value=3>Получен</option>
                          <option value=4>Отменен</option>
                      </select>
                      ";
                    break;
                case 2:
                    echo "<form id=form>
                      <select style='color: #0862ee;' name=select class=select name=language>
                          <option hidden value='2'>В работе</option>
                          <option value=1>Ожидает звонка</option>
                          <option value=3>Получен</option>
                          <option value=4>Отменен</option>
                      </select>
                      </form>";
                    break;
                case 3:
                    echo "<div style='color: #47A76A;'>Выполнен</div>";
                    break;
                case 4:
                    echo "<div style='color: #d01010;'>Отменен</div>";
                    break;
            }
            ?>
        </td>
        <td><?= $product['City'] ?></td>
        <td><?= $product['totalCost'] ?> ₽</td>
        <td><a href="../admin/pdf.php?Code_orders=<?= $product['Code_orders'] ?>">Чек</a> </td>
        <!-- <td><a href="open.php?id=13"><i class="bx bx-edit-alt"></i></a></td>
                        <td><a href="open.php?del_req=13"><i class="bx bx-trash"></i></a></td> -->
    </tr>
<? endforeach ?>