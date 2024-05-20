<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
            }
        </style>
        <div style="display: flex; justify-content: center; margin-top: 20px;" class="wrapper">
            <div style="display: flex; justify-content: center; flex-direction: column;" class="max-width">
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
                    <!-- Накладная № -->
                    <?php
                    session_start();
                    echo $_SESSION['userid'];
                    echo '<br>';
                    echo date('d.m.Y Открыт: H:i:s', time());
                    ?>
                </P>
                <table>
                    <tbody style="text-align: left;">
                        <tr id="last">
                            <th>Номер заказа</th>
                            <th>Товар</th>
                            <th>Вес</th>
                            <th>Количество</th>
                            <th>Адрес</th>
                            <th>Доставлено</th>
                        </tr>
                        <?
                        include_once ('../connect.php');
                        $sql = mysqli_query($connect, "SELECT Code_orders,date, City, COUNT(orders_body.code_tovara) as jopa FROM `Orders`, orders_body WHERE date BETWEEN '" . $_POST['start'] . "' AND '" . $_POST['end'] . "' AND orders_body.id_zakaza = Orders.Code_orders GROUP BY Orders.Code_orders;");
                        $products = array();
                        while ($result = mysqli_fetch_array($sql)) {
                            $products[] = $result;
                        }
                        $sql = mysqli_query($connect, "SELECT id_zakaza, COUNT(code_tovara) as jopa FROM `orders_body` GROUP BY id_zakaza;");
                        $c = array();
                        while ($result = mysqli_fetch_array($sql)) {
                            $c[] = $result;
                        }
                        ?>
                        <? foreach ($products as $product): ?>
                            <tr>
                                <td rowspan="<?= $product['jopa'] ?>">
                                    <? echo $product['Code_orders'] ?>
                                </td>
                                <?
                                $arr = array();
                                $sql = mysqli_query($connect, "SELECT id, id_zakaza, Tovar.Name_tovar, weight, quantity FROM `orders_body` INNER JOIN Tovar ON Tovar.Code_tovar = orders_body.code_tovara WHERE id_zakaza = " . $product['Code_orders'] . ";");
                                while ($result = mysqli_fetch_array($sql)) {
                                    $arr[] = $result;
                                }
                                ?>
                                <? foreach ($arr as $a): ?>
                                    <td>
                                        <? echo $a['Name_tovar'] ?>
                                    </td>
                                    <td>
                                        <? echo $a['weight'] ?>
                                    </td>
                                    <td>
                                        <? echo $a['quantity'] ?>
                                    </td>
                                    <td>
                                        <? echo $product['City'] ?>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            <? endforeach ?>
                        <? endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        var opt = {
            margin: 1,
            filename: 'myfile.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            // html2canvas: { scale: 0.5 },
            jsPDF: { unit: 'cm', format: 'A4', orientation: 'l' }
        };
        function generatePDF() {
            html2pdf().set(opt).from(document.querySelector('.suda')).save('myDocument.pdf')
        }
        generatePDF();
        cart = [], counter = 0;
        window.localStorage.setItem("cart", JSON.stringify(cart));
        window.localStorage.setItem("counter", JSON.stringify(counter));
    </script>
</body>

</html>