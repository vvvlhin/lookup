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
            <div style="width: 608px; display: flex; justify-content: center; flex-direction: column;"
                class="max-width">
                <div style="display: flex; justify-content: center;" class="header">
                    <img style="height: 80px; width: 160px;" src="img/logo_small.png" alt="">
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
    				session_start();
    				echo $_SESSION['userid'];
    				echo '<br>';
    				echo date('d.m.Y Открыт: H:i:s', time());
    				?>
                </P>
                <table>
                    <tbody style="text-align: left;">
                        <tr id="last">
                            <th>Товар</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>

                        <tr>
                            <td style="border: none;"></td>
                            <td style="border: none;"></td>
                            <td>Всего</td>
                            <td id="totalAll">123132</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            let temp = '',
                all, totalKey = 0;
            totalCart = JSON.parse(window.localStorage.getItem("totalCart"));
            // console.log(totalCart)
            totalCart.forEach(element => {
                all = Number(element.quantity) * Number(element.costCart);
                totalKey += all;
                // console.log(totalKey)
                temp += `
    			<tr>
    				<td>${element.name} ${element.weight}</td>
    				<td>${element.quantity}</td>
    				<td>${element.costCart}₽</td>
    				<td>${all}₽</td>
    			</tr>`;
            });
            document.querySelector('#last').insertAdjacentHTML('afterend', temp);
            document.querySelector('#totalAll').innerHTML = Number(totalKey) + "₽";
        </script>
    </div>
    <script>
        function generatePDF() {
            html2pdf().from(document.querySelector('.suda')).save('myDocument.pdf')
        }
        generatePDF();
    </script>
</body>

</html>