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
                <span style="display: flex; justify-content: center; text-align: center;">
                    Отчет реализованных товаров в разрезе номенклатуры <br>
                    За период:
                    <?
                    $start = strtotime($_POST['start']);
                    $end = strtotime($_POST['end']);
                    $start = date('d.m.Y', $start);
                    $end = date('d.m.Y', $end);
                    echo "С " . $start . " ПО " . $end;
                    ?>
                </span>
                <P style="font-family: dejavu sans; font-size: 24px; font-style: normal; font-weight: 400;">
                    <!-- Накладная № -->
                    <?php
                    session_start();
                    echo $_SESSION['userid'];
                    echo '<br>';
                    echo date('d.m.Y Открыт: H:i:s', time());
                    ?>
                </P>
                <table style="margin-top: 30px;">
                    <tbody style="text-align: left;">
                        <tr id="last">
                            <th>Товар</th>
                            <th>Количество</th>
                            <th>Сумма (Всего)</th>
                        </tr>
                        <?
                        include_once ('../connect.php');
                        $sql = mysqli_query($connect, "SELECT date, Tovar.Name_tovar, sum(quantity) as q ,sum(cost) as c FROM orders_body INNER JOIN Orders ON id_zakaza = Orders.Code_orders INNER JOIN Tovar ON code_tovara = Tovar.Code_tovar WHERE date BETWEEN '" . $_POST['start'] . "' AND '" . $_POST['end'] . "' AND Orders.Status = 3 GROUP BY code_tovara;");
                        $products = array();
                        while ($result = mysqli_fetch_array($sql)) {
                            $products[] = $result;
                        }
                        $sql = mysqli_query($connect, "SELECT COUNT(code_tovara) as a, sum(quantity) as q ,sum(cost) as c FROM orders_body INNER JOIN Orders ON id_zakaza = Orders.Code_orders WHERE Orders.Status = 3 GROUP BY code_tovara;");
                        ?>
                        <? foreach ($products as $product): ?>
                            <tr>
                                <td rowspan="<?= $product['a'] ?>">
                                    <? echo $product['Name_tovar'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <? echo $product['q'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <? echo $product['c'] ?> ₽
                                </td>
                            </tr>
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