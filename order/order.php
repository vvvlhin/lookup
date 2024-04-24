<?php
session_start();
include_once ("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="https://shop.to.coffee/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href=https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <script src="jquery-3.7.1.js"></script>
    <script id="ISDEKscript" type="text/javascript" src="../widget/widjet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Оформление заказа</title>
</head>

<body>
    <div id="wrapper">
        <div class="main-container-header">
            <ul class="wrapper-list">
                <svg id="wrapper-list-hambugrer" width="16" height="12" viewBox="0 0 16 12">
                    <path data-name="Rounded Rectangle 81 copy 4" class="cls-1"
                        d="M872,958h-8a1,1,0,0,1-1-1h0a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1h0A1,1,0,0,1,872,958Zm6-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,953Zm0-5H864a1,1,0,0,1,0-2h14A1,1,0,0,1,878,948Z"
                        transform="translate(-863 -946)"></path>
                </svg>
                <div class="header-logo-container">
                    <img id="logo" src="../img/logo_small.png" alt="">
                </div>
                <div class="nav-scrolled">
                    <ul class="nav-bar-scrolled">
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="">
                                Кофе
                                <ul class="sub-menu">
                                    <a href="">
                                        <li id="sub-menu-item">Ароматизированный кофе</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Кофейные смеси</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Моносорта</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Спешалити</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Ферментированный кофе</li>
                                    </a>
                                </ul>
                            </a>
                        </li>
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="">
                                Чай
                                <ul class="sub-menu">
                                    <a href="">
                                        <li id="sub-menu-item">Белый</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Зеленый</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Пуэр</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Травяной</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Улун</li>
                                    </a>
                                    <a href="">
                                        <li id="sub-menu-item">Черный</li>
                                    </a>
                                </ul>
                            </a>
                        </li>
                        <a href="">
                            <li class="nav-bar-item">акции</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">как купить</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">о компании</li>
                        </a>
                        <a href="">
                            <li class="nav-bar-item">оптовикам</li>
                        </a>
                    </ul>
                </div>
                <div class="nav-menu">
                    <a href="">
                        <div id="search-scroll"></div>
                    </a>
                    <a href="">
                        <div id="acc"></div>
                    </a>
                    <a href="">
                        <div id="stat"></div>
                    </a>
                    <div class="stat_counter" id="nav-menu-item">
                        0
                    </div>
                    <a href="../cart/cart.php">
                        <div id="cart"></div>
                    </a>
                    <div class="cart_counter" id="nav-menu-item">
                        0
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="main-container">
        <header class="header">
            <h1 id="phone">8 800 302-26-54</h1>
            <a href="../main/index.php">
                <div class="logo-container">
                    <img id="logo" src="../img/logo_small.png" alt="">
                </div>
            </a>
            <div class="nav-menu">
                <a href="">
                    <div id="search" id="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="acc" id="nav-menu-item"></div>
                </a>
                <a href="">
                    <div id="stat"></div>
                </a>
                <div class="stat_counter" id="nav-menu-item">
                    0
                </div>
                <a href="../cart/cart.php">
                    <div id="cart" id="nav-menu-item"></div>
                </a>
                <div class="cart_counter" id="nav-menu-item">
                    0
                </div>
            </div>
        </header>
        <nav>
            <ul class="nav-bar">
                <li class="nav-bar-item nav-bar-item-coffee">
                    <a href="">
                        Кофе
                        <ul class="sub-menu">
                            <a href="">
                                <li id="sub-menu-item">Ароматизированный кофе</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Кофейные смеси</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Моносорта</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Спешалити</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Ферментированный кофе</li>
                            </a>
                        </ul>
                    </a>
                </li>
                <li class="nav-bar-item nav-bar-item-coffee">
                    <a href="">
                        Чай
                        <ul class="sub-menu">
                            <a href="">
                                <li id="sub-menu-item">Белый</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Зеленый</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Пуэр</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Травяной</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Улун</li>
                            </a>
                            <a href="">
                                <li id="sub-menu-item">Черный</li>
                            </a>
                        </ul>
                    </a>
                </li>
                <a href="">
                    <li class="nav-bar-item">акции</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">как купить</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">о компании</li>
                </a>
                <a href="">
                    <li class="nav-bar-item">оптовикам</li>
                </a>
            </ul>
        </nav>
    </div>
    <hr>
    <div class="top-block-wrapper">
        <div class="main-container">
            <h1 class="pagetitle">Оформление заказа</h1>
            <ul class="navigation">
                <li>Главная </li>
                <li id="navigation-line"> — </li>
                <li>Оформление заказа</li>
            </ul>
        </div>
    </div>
    <div class="main-container-cart">
        <div class="main-container">
            <div class="row">
                <div class="order-ship">
                    <!-- <div class="order-wrapper">
                        <div class="order-title-container">
                            <img class="order-title-container-ico" src="img/geo.png" alt="">
                            <div class="order-title-container-text">Регион доставки</div>
                        </div>
                        <div class="order-selection-container">
                            <div class="order-selection-container-header">Местоположение
                                <span class="order-selection-container-header-red">*</span>
                            </div>
                            <input class="order-selection-container-input" type="text" placeholder="Введите название">
                        </div>
                    </div> -->
                    <div class="pandd">
                        <div class="order-ship-container">
                            <div class="order-ship-container-header">
                                <img class="order-ship-container-ico" src="../img/ship.png" alt="">
                                <div class="order-ship-container-text">Способ доставки</div>
                            </div>
                            <ul class="order-ship-container-choose">
                                <li class="order-ship-container-choose-item">
                                    <input type="radio" checked name="raz" id="postmat" value="154₽" />
                                    <span id="item-text">
                                        СДЭК (Постматы и пункты выдачи)
                                    </span>
                                    <div class="description154">154₽</div>
                                    <div class="time">1-2 Дня</div>
                                </li>
                                <div class="order-ship-container-choose-container">
                                    <div class="order-ship-container-choose-post" onclick="widjet.open()">Выбрать пункт
                                        выдачи</div>
                                    <!-- <input class="addressPVZ" type="text" name="address"> -->
                                </div>
                                <li class="order-ship-container-choose-item">
                                    <input type="radio" name="raz" id="kurer" value="354₽" />
                                    <span id="item-text">
                                        СДЭК (Курьером)
                                    </span>
                                    <div class="description354">+500₽</div>
                                    <div class="time2"> 1-2 Дня</div>
                                </li>
                            </ul>
                        </div>
                        <div class="pay-method">
                            <div class="pay-method-container-header">
                                <img class="pay-method-container-ico" src="../img/purse.png" alt="">
                                <div class="pay-method-container-text">Способ оплаты</div>
                            </div>
                            <ul class="order-ship-container-choose">
                                <li class="order-ship-container-choose-item">
                                    <input type="radio" checked name="dva" />
                                    <span id="item-text">
                                        Оплата при получении
                                    </span>
                                </li>
                                <!-- <li class="order-ship-container-choose-item">
                                    <input type="radio" name="dva" />
                                    <span id="item-text">
                                        Картой
                                    </span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="clients-info">
                        <div class="clients-info-header">
                            <img class="clients-info-header-img" src="../img/stud.avif" alt="">
                            <div class="clients-info-header-text">Покупатель</div>
                        </div>
                        <?php
                        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['btn-sub']))) {
                            $sql = mysqli_query($connect, "INSERT INTO `Orders` (`City`, `shipping_method`, `names`, `email`, `phone`, `Comment`) VALUES ('" . $_POST['address'] . "', '1', '" . $_POST['Name'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['comment'] . "');");
                            echo "<script>document.location = '../end-page/end_page.php' </script>";
                            $sqli = "SELECT * FROM `Orders` ORDER BY Code_orders DESC LIMIT 1;";
                            if ($result = $connect->query($sqli)) {
                                while ($row = $result->fetch_array()) {
                                    $userid = $row["Code_orders"];
                                    $_SESSION['userid'] = $userid;
                                }
                            }
                            echo $userid;
                            foreach ($_SESSION['array'] as $key => $value) {
                                $sql = mysqli_query($connect, "INSERT INTO `orders_body` (`id`, `id_zakaza`, `code_tovara`, `weight`, `quantity`, `cost`) VALUES (NULL, '" . $userid . "', '" . $value['code_tovara'] . "', '" . $value['weight'] . "', '" . $value['quantity'] . "', '" . $value['costCart'] . "');");
                            }
                        }
                        ?>
                        <form action="order.php" method="POST">
                            <div class="clients-info-inputs">
                                <div class="order-selection-container-header">Имя
                                    <span class="order-selection-container-header-red">*</span>
                                </div>
                                <input style="margin-top: 0;" class="order-selection-container-input" name="Name"
                                    type="text">
                                <div class="order-selection-container-header">E-mail
                                    <span class="order-selection-container-header-red">*</span>
                                </div>
                                <input style="margin-top: 0;" class="order-selection-container-input" name="email"
                                    type="text">
                                <div class="order-selection-container-header">Телефон
                                    <span class="order-selection-container-header-red">*</span>
                                </div>
                                <div id='order-selection-container-header-display'>
                                    <input style="margin-top: 0;" class="order-selection-container-input" name="phone"
                                        type="text">
                                    <div class="order-selection-container-header">
                                        Адрес доставки
                                        <span class="order-selection-container-header-red">*</span>
                                    </div>
                                </div>
                                <input style="margin-top: 0;" class="order-selection-container-input" name="address"
                                    type="text">
                                <div class="order-selection-container-header">Комментарий к заказу</div>
                                <input style="margin-top: 0; padding: 3rem;" name="comment"
                                    class="order-selection-container-input" type="text">
                            </div>
                    </div>
                </div>
                <div class="fixed-ticket">
                    <div class="ur-order">
                        <div class="ur-order-text">Ваш заказ</div>
                        <a href="../cart/cart.php">
                            <div class="ur-order-edit">Изменить</div>
                        </a>
                    </div>
                    <div class="ur-order-cost">
                        <div class="ur-order-cost-text">Товаров на:</div>
                        <div class="ur-order-cost-value">940₽</div>
                    </div>
                    <div class="ur-order-cost-ship">
                        <div class="ur-order-cost-ship-text">Доставка:</div>
                        <div class="ur-order-cost-ship-value">0₽</div>
                    </div>
                    <div class="ur-oreder-total">
                        <div class="ur-oreder-total-text">Итого:</div>
                        <div class="ur-oreder-total-value"></div>
                    </div>
                    <input type="submit" name="btn-sub" class="order" value="Оформить заказ" onclick="hihi()">
                    </input>
                    </form>
                </div>
                <div id="output"></div>
            </div>
        </div>
        <footer>
            <div class="main-container-footer">
                <ul class="footer-items">
                    <li>2024 © интернет-магазин кофе shop.to.coffee</li>
                    <li>
                        <ul class="footer-social-items">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 5 11">
                                    <path data-name="Shape 51 copy 13" class="cls-1"
                                        d="M402.738,141a18.086,18.086,0,0,0,1.136,1.727,0.474,0.474,0,0,1-.144.735l-0.3.257a1,1,0,0,1-.805.279,4.641,4.641,0,0,1-1.491-.232,4.228,4.228,0,0,1-1.9-3.1,9.614,9.614,0,0,1,.025-4.3,4.335,4.335,0,0,1,1.934-3.118,4.707,4.707,0,0,1,1.493-.244,0.974,0.974,0,0,1,.8.272l0.3,0.255a0.481,0.481,0,0,1,.113.739c-0.454.677-.788,1.159-1.132,1.731a0.43,0.43,0,0,1-.557.181l-0.468-.061a0.553,0.553,0,0,0-.7.309,6.205,6.205,0,0,0-.395,2.079,6.128,6.128,0,0,0,.372,2.076,0.541,0.541,0,0,0,.7.3l0.468-.063a0.432,0.432,0,0,1,.555.175h0Z"
                                        transform="translate(-399 -133)"></path>
                                </svg>
                                <h3 id="phone-text">8 800 302-26-54</h3>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 11 11">
                                    <path data-name="Rectangle 583 copy 16" class="cls-1"
                                        d="M367,142h-7a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h7a2,2,0,0,1,2,2v5A2,2,0,0,1,367,142Zm0-2v-3.039L364,139h-1l-3-2.036V140h7Zm-6.634-5,3.145,2.079L366.634,135h-6.268Z"
                                        transform="translate(-358 -133)"></path>
                                </svg>
                                <h3 id="phone-text">shop@to.coffee</h3>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 9 12">
                                    <path class="cls-1"
                                        d="M959.135,82.315l0.015,0.028L955.5,87l-3.679-4.717,0.008-.013a4.658,4.658,0,0,1-.83-2.655,4.5,4.5,0,1,1,9,0A4.658,4.658,0,0,1,959.135,82.315ZM955.5,77a2.5,2.5,0,0,0-2.5,2.5,2.467,2.467,0,0,0,.326,1.212l-0.014.022,2.181,3.336,2.034-3.117c0.033-.046.063-0.094,0.093-0.142l0.066-.1-0.007-.009a2.468,2.468,0,0,0,.32-1.2A2.5,2.5,0,0,0,955.5,77Z"
                                        transform="translate(-951 -75)"></path>
                                </svg>
                                <h3 id="phone-text">г. Владимир, ул. Производственная Зона, 4</h3>
                            </li>
                        </ul>
                    </li>
                </ul>
        </footer>
    </div>
    <script src="order.js"></script>
</body>

</html>