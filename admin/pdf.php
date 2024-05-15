<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Чек</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="suda">
        <style>
            * {
                font-family: dejavu sans;
                font-size: 24px;
                font-style: normal;
                font-weight: 400;
            }

            p {
                margin: 10px 0;
            }

            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
                width: 175px;
                text-align: center;
            }
        </style>
        <div style="display: flex; justify-content: center; margin-top: 20px;" class="wrapper">
            <div style="width: 608px; display: flex; justify-content: center; flex-direction: column;"
                class="max-width">
                <div style="display: flex; justify-content: center;" class="header">
                    <img style="height: 80px; width: 160px;" src="../img/logo_small.png" alt="">
                </div>
                <p style="display: flex; justify-content: center; font-size: 15px; text-align: center;">Интернет-магазин
                    кофе shop.to.coffee
                    <br> г. Владимир,
                    ул. Производственная Зона,
                    4
                    <br> shop@to.coffee /
                    8 800 302-26-54
                </p>
                <P style="font-family: dejavu sans; font-size: 24px; font-style: normal; font-weight: 400;">
                    Чек №
                    <?php
                    $all = 0;
                    include_once ("../connect.php");
                    session_start();
                    $order_head = mysqli_query($connect, "SELECT * FROM Orders WHERE Code_orders=" . $_GET['Code_orders'] . "");
                    $head = mysqli_fetch_assoc($order_head);
                    echo $_GET['Code_orders'];
                    echo '<br>';
                    $phpdate = strtotime($head['Date']);
                    $mysqldate = date('d.m.Y', $phpdate);
                    echo "Открыт: " . $mysqldate;
                    ?>
                </P>
                <table style="table-layout: fixed; width: 100%; ">
                    <tbody style="text-align: left;">
                        <tr id="last">
                            <th>Товар</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>
                        <?
                        error_reporting(E_ALL);
                        $sql = mysqli_query($connect, "SELECT id, id_zakaza, Tovar.Name_tovar as names, weight, quantity, cost FROM orders_body INNER JOIN Tovar ON orders_body.code_tovara = Tovar.Code_tovar WHERE id_zakaza=" . $_GET['Code_orders'] . "");
                        $products = array();
                        while ($result = mysqli_fetch_array($sql)) {
                            $products[] = $result;
                        }
                        ?>
                        <? foreach ($products as $body): ?>
                            <tr>
                                <td><?= $body['names'] ?>     <?= $body['weight'] ?></td>
                                <td><?= $body['quantity'] ?></td>
                                <td><?= $body['cost'] ?> ₽</td>
                                <td><?= $body['cost'] * $body['quantity'] ?> ₽</td>
                            </tr>
                            <? $all += $body['cost'] * $body['quantity'] ?>
                        <? endforeach ?>

                        <tr>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td>Всего</td>
                            <td id="totalAll"><? echo $all ?> ₽</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>