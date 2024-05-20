<?php
include_once ("../connect.php");
session_start();
?>

<?php if ($_SESSION['admin'] == false): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../product_card/product_card.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="shortcut icon" href="https://shop.to.coffee/favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../reset.css">
        <script src="../jquery-3.7.1.js"></script>
        <title>Личный кабинет</title>
    </head>

    <body>
        <div id="wrapper">
            <div class="main-container-header">
                <ul class="wrapper-list">
                    <a href="../main/index.php">
                        <div class="header-logo-container">
                            <img id="logo" src="../img/logo_small.png" alt="">
                        </div>
                    </a>
                    <div class="nav-scrolled">
                        <ul class="nav-bar-scrolled">
                            <li class="nav-bar-item nav-bar-item-coffee">
                                <a href="../catalog/coffee/coffee.php">
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
                                <a href="../catalog/tea/coffee.php">
                                    Чай
                                    <ul class="sub-menu">
                                        <a href="../catalog/tea/white.php">
                                            <li id="sub-menu-item">Белый</li>
                                        </a>
                                        <a href="../catalog/tea/green.php">
                                            <li id="sub-menu-item">Зеленый</li>
                                        </a>
                                        <a href="../catalog/tea/puer.php">
                                            <li id="sub-menu-item">Пуэр</li>
                                        </a>
                                        <a href="../catalog/tea/trava.php">
                                            <li id="sub-menu-item">Травяной</li>
                                        </a>
                                        <a href="../catalog/tea/ulun.php">
                                            <li id="sub-menu-item">Улун</li>
                                        </a>
                                        <a href="../catalog/tea/black.php">
                                            <li id="sub-menu-item">Черный</li>
                                        </a>
                                    </ul>
                                </a>
                            </li>

                            <a href="../../buy.php">
                                <li class="nav-bar-item">как купить</li>
                            </a>
                            <a href="../../about.php">
                                <li class="nav-bar-item">о компании</li>
                            </a>

                        </ul>
                    </div>
                    <div class="nav-menu">

                        <?php if (!empty($_SESSION['auth'])): ?>
                            <ul class="profile-box">
                                <svg class="" width="16" height="18" viewBox="0 0 16 18" fill-opacity="0.5" color="#999">
                                    <path data-name="Rounded Rectangle 803 copy" class="cls"
                                        d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                        transform="translate(-920 -943)"></path>
                                </svg>
                                <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5" height="3"
                                    viewBox="0 0 5 3">
                                    <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                                </svg>
                                <ul class="profile-box-sub-menu">
                                    <a href="../personal_account/personal_account.php">
                                        <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
                                    </a>
                                    <a href="../personal_account/order.php">
                                        <li id="profile-box-sub-menu-item">Текущие заказы</li>
                                    </a>
                                    <a href="../personal_account/private.php">
                                        <li id="profile-box-sub-menu-item">Личные данные</li>
                                    </a>
                                    <a href="">
                                        <li id="profile-box-sub-menu-item">История заказов</li>
                                    </a>
                                    <a href="">
                                        <li id="profile-box-sub-menu-item" onclick="exit()">
                                            <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                                    <path class="cls"
                                                        d="M501.849,868.853l-2.011,1.993a0.485,0.485,0,0,1-.694,0,0.506,0.506,0,0,1,0-.707L500.293,869H494.5a0.5,0.5,0,0,1,0-1h5.826l-1.182-1.175a0.5,0.5,0,0,1,0-.7,0.487,0.487,0,0,1,.694,0l2.011,2a0.486,0.486,0,0,1,.138.365A0.492,0.492,0,0,1,501.849,868.853Zm-5.349-3.322a0.486,0.486,0,0,1-.269-0.089l-0.016.024a3.5,3.5,0,1,0,0,6.07l0,0a0.484,0.484,0,0,1,.287-0.1,0.5,0.5,0,0,1,.5.5,0.492,0.492,0,0,1-.242.418l0.008,0.012c-0.022.013-.049,0.018-0.071,0.031h0a4.434,4.434,0,0,1-2.194.6,4.5,4.5,0,1,1,0-9,4.4,4.4,0,0,1,2.057.542A0.5,0.5,0,0,1,496.5,865.531Z"
                                                        transform="translate(-490 -864)"></path>
                                                </svg></i>
                                            Выйти
                                        </li>
                                    </a>
                                </ul>
                            </ul>
                        <?php else: ?>
                            <div id="acc"></div>
                        <?php endif; ?>


                        <a href="../cart/cart.php">
                            <div id="cart"></div>
                        </a>
                        <div class="cart_counter" id="nav-menu-item">
                            <span class="cart-counter-value">0</span>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="main-container-head">
            <header class="header">
                <h1 id="phone">8 800 302-26-54</h1>
                <a href="../main/index.php">
                    <div class="logo-container">
                        <img id="logo" src="../img/logo_small.png" alt="">
                    </div>
                </a>
                <div class="nav-menu">
                    <?php if (!empty($_SESSION['auth'])): ?>
                        <ul class="profile-box">
                            <svg class="" width="16" height="18" viewBox="0 0 16 18" fill-opacity="0.5" color="#999">
                                <path data-name="Rounded Rectangle 803 copy" class="cls"
                                    d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                    transform="translate(-920 -943)"></path>
                            </svg>
                            <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5" height="3"
                                viewBox="0 0 5 3">
                                <path class="cls" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                            </svg>
                            <ul class="profile-box-sub-menu">
                                <a href="../personal_account/personal_account.php">
                                    <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
                                </a>
                                <a href="../personal_account/order.php">
                                    <li id="profile-box-sub-menu-item">Текущие заказы</li>
                                </a>
                                <a href="../personal_account/private.php">
                                    <li id="profile-box-sub-menu-item">Личные данные</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item">История заказов</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item" onclick="exit()">
                                        <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                                xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                                <path class="cls"
                                                    d="M501.849,868.853l-2.011,1.993a0.485,0.485,0,0,1-.694,0,0.506,0.506,0,0,1,0-.707L500.293,869H494.5a0.5,0.5,0,0,1,0-1h5.826l-1.182-1.175a0.5,0.5,0,0,1,0-.7,0.487,0.487,0,0,1,.694,0l2.011,2a0.486,0.486,0,0,1,.138.365A0.492,0.492,0,0,1,501.849,868.853Zm-5.349-3.322a0.486,0.486,0,0,1-.269-0.089l-0.016.024a3.5,3.5,0,1,0,0,6.07l0,0a0.484,0.484,0,0,1,.287-0.1,0.5,0.5,0,0,1,.5.5,0.492,0.492,0,0,1-.242.418l0.008,0.012c-0.022.013-.049,0.018-0.071,0.031h0a4.434,4.434,0,0,1-2.194.6,4.5,4.5,0,1,1,0-9,4.4,4.4,0,0,1,2.057.542A0.5,0.5,0,0,1,496.5,865.531Z"
                                                    transform="translate(-490 -864)"></path>
                                            </svg></i>
                                        Выйти
                                    </li>
                                </a>
                            </ul>
                        </ul>
                    <?php else: ?>
                        <div id="acc"></div>
                    <?php endif; ?>


                    <a href="../cart/cart.php">
                        <div id="cart" id="nav-menu-item">
                            <div class="cart_counter" id="nav-menu-item">
                                <span class="cart-counter-value">0</span>
                            </div>
                        </div>
                    </a>
                </div>
            </header>
            <nav>
                <ul class="nav-bar">
                    <li class="nav-bar-item nav-bar-item-coffee">
                        <a href="../catalog/coffee/coffee.php">
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
                        <a href="../catalog/tea/coffee.php">
                            Чай
                            <ul class="sub-menu">
                                <a href="../catalog/tea/white.php">
                                    <li id="sub-menu-item">Белый</li>
                                </a>
                                <a href="../catalog/tea/green.php">
                                    <li id="sub-menu-item">Зеленый</li>
                                </a>
                                <a href="../catalog/tea/puer.php">
                                    <li id="sub-menu-item">Пуэр</li>
                                </a>
                                <a href="../catalog/tea/trava.php">
                                    <li id="sub-menu-item">Травяной</li>
                                </a>
                                <a href="../catalog/tea/ulun.php">
                                    <li id="sub-menu-item">Улун</li>
                                </a>
                                <a href="../catalog/tea/black.php">
                                    <li id="sub-menu-item">Черный</li>
                                </a>
                            </ul>
                        </a>
                    </li>

                    <a href="../../buy.php">
                        <li class="nav-bar-item">как купить</li>
                    </a>
                    <a href="../../about.php">
                        <li class="nav-bar-item">о компании</li>
                    </a>

                </ul>
            </nav>
        </div>
        <hr>
        <?php
        $sql = mysqli_query($connect, "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, short_description, description , type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000
            FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel WHERE Code_tovar=" . $_GET['t'] . "");
        $products = array();
        while ($res = mysqli_fetch_array($sql)) {
            $products[] = $res;
        }
        ?>
        <? foreach ($products as $product): ?>
            <?
            $c500 = $product['cost500'];
            $c1000 = $product['cost1000'];
            $c250 = $product['cost250'];
            ?>
            <div class="main-container-wrapper">
                <div class="main-container">
                    <ul class="navigation">
                        <li>Главная </li>
                        <li> — </li>
                        <li>Каталог</li>
                        <li> — </li>
                        <li>Кофе</li>
                        <li> — </li>
                        <li><?= $product['Name_tovar'] ?></li>
                    </ul>
                    <div class="goods-list-item">
                        <div class="product-card-image">
                            <div class="spec">
                                <? if ($product['hit'] == '1'): ?>
                                    <div class="hit">Хит</div>
                                <? endif ?>
                                <? if ($product['recommend'] == '1'): ?>
                                    <div class="rec">Рекомендуем</div>
                                <? endif ?>
                                <? if ($product['new'] == '1'): ?>
                                    <div class="new">Новинка</div>
                                <? endif ?>
                                <? if ($product['stock'] == '1'): ?>
                                    <div class="stock">Акция</div>
                                <? endif ?>
                            </div>
                            <img id="milk_blend_img" style=" width: 350px;" src="<?= $product['Name_img'] ?>" alt="">
                        </div>
                        <div class="product-card-text">
                            <div class="properties-name">
                                <?= $product['Name_tovar'] ?>
                            </div>
                            <div class="short-description">
                                <?= $product['short_description'] ?>
                            </div>
                            <div class="product-card-info">
                                <ul class="product-card-properties">
                                    <div class="product-card-properties-flex">
                                        <li class="product-card-properties-item">Тип обжарки</li>
                                        <li style="color: #333333!important;" class="product-card-properties-item">
                                            <?= $product['Name_type_obz'] ?>
                                        </li>
                                    </div>
                                    <div class="product-card-properties-flex">
                                        <li class="product-card-properties-item">Кислотность</li>
                                        <li style="color: #333333!important;" class="product-card-properties-item">
                                            <img style="    width: 60%;" src="<?= $product['K'] ?>" alt="">
                                        </li>
                                    </div>
                                    <div class="product-card-properties-flex">
                                        <li class="product-card-properties-item">Горечь</li>
                                        <li style="color: #333333!important;     width: 60%;"
                                            class="product-card-properties-item">
                                            <img style="    width: 70%;" src="<?= $product['G'] ?>" alt="">

                                        </li>
                                    </div>
                                    <div class="product-card-properties-flex">
                                        <li class="product-card-properties-item">Полнотелость</li>
                                        <li style="color: #333333!important;     width: 60%;"
                                            class="product-card-properties-item">
                                            <img style="    width: 70%;" src="<?= $product['P'] ?>" alt="">
                                        </li>
                                    </div>
                                </ul>
                                <div class="properties">
                                    <div class="cost">
                                        <div class="cost_value">
                                            <?= $product['cost250'] ?>₽
                                        </div>
                                    </div>
                                    <ul class="weight">
                                        <li data-weight="250" data-id="<?= $c250; ?>" class="item border-checked">250 гр
                                        </li>
                                        <li data-weight="500" data-id="<?= $c500; ?>" class="item">500 гр</li>
                                        <li data-weight="1000" data-id="<?= $c1000; ?>" class="item">1000 гр</li>
                                    </ul>
                                    <select id="Combobox">
                                        <option id="Combobox_item" value="">Без помола (В зернах)</option>
                                        <option id="Combobox_item" value="">Для аэропресса</option>
                                        <option id="Combobox_item" value="">Для гейзерной кофеварки</option>
                                        <option id="Combobox_item" value="">Для капельной кофеварки</option>
                                    </select>
                                    <div class="container">
                                        <div class="counter_block">
                                            <span data-name="minus-btn" onclick="addHandlers()" class="minus">
                                                <h3>-</h3>
                                            </span>
                                            <span class="text">
                                                <h3 data-text="" class="text-value">0</h3>
                                            </span>
                                            <span data-name="plus-btn" onclick="addHandlers()" class="plus">
                                                <h3>+</h3>
                                            </span>
                                        </div>
                                        <div class="button_block" data-code="4">
                                            <h3 id="button_block_text">В корзину</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <aside>
                        <div class="main-container-aside-bar">
                            <ul class="aside_bar">
                                <li class="aside-bar-item">
                                    <img id="Free_shipping_img" src="../img/Free_shipping.png" alt="">
                                    <h2 id="Free_shipping_text">Бесплатная доставка</h2>
                                    <p id="Free_shipping_text">Уменьшим стоимость доставки товара <br> на 15% от стоимости
                                        заказа
                                    </p>
                                </li>
                                <li class="aside-bar-item">
                                    <img id="payment_img" src="../img/payment.png" alt="">
                                    <h2 id="Free_shipping_text">Оплата при получении</h2>
                                    <p id="Free_shipping_text">Платите только тогда, когда <br> забрали посылку</p>
                                </li>
                                <li class="aside-bar-item">
                                    <img id="gift_img" src="../img/gift.png" alt="">
                                    <h2 id="Free_shipping_text">Чай в подарок</h2>
                                    <p id="Free_shipping_text">Фирменная чайная смесь в подарок <br> при заказе от 3 000 ₽
                                    </p>
                                </li>
                                <li class="aside-bar-item">
                                    <img id="discount_img" src="../img/discount.png" alt="">
                                    <h2 id="Free_shipping_text">Система скидок</h2>
                                    <p id="Free_shipping_text">Действует накопительная система <br> скидок от суммы заказа
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="bottom-info">
                        <div class="bottom-info-text">
                            Описание
                        </div>
                        <pre class="bottom-info-description"><? echo $product['description']; ?></pre>
                    </div>
                <? endforeach ?>
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
                                    <path data-name="Shape 51 copy 13" class="cls"
                                        d="M402.738,141a18.086,18.086,0,0,0,1.136,1.727,0.474,0.474,0,0,1-.144.735l-0.3.257a1,1,0,0,1-.805.279,4.641,4.641,0,0,1-1.491-.232,4.228,4.228,0,0,1-1.9-3.1,9.614,9.614,0,0,1,.025-4.3,4.335,4.335,0,0,1,1.934-3.118,4.707,4.707,0,0,1,1.493-.244,0.974,0.974,0,0,1,.8.272l0.3,0.255a0.481,0.481,0,0,1,.113.739c-0.454.677-.788,1.159-1.132,1.731a0.43,0.43,0,0,1-.557.181l-0.468-.061a0.553,0.553,0,0,0-.7.309,6.205,6.205,0,0,0-.395,2.079,6.128,6.128,0,0,0,.372,2.076,0.541,0.541,0,0,0,.7.3l0.468-.063a0.432,0.432,0,0,1,.555.175h0Z"
                                        transform="translate(-399 -133)"></path>
                                </svg>
                                <h3 id="phone-text">8 800 302-26-54</h3>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 11 11">
                                    <path data-name="Rectangle 583 copy 16" class="cls"
                                        d="M367,142h-7a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h7a2,2,0,0,1,2,2v5A2,2,0,0,1,367,142Zm0-2v-3.039L364,139h-1l-3-2.036V140h7Zm-6.634-5,3.145,2.079L366.634,135h-6.268Z"
                                        transform="translate(-358 -133)"></path>
                                </svg>
                                <h3 id="phone-text">shop@to.coffee</h3>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 9 12">
                                    <path class="cls"
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
        </div>
        <script src="../product_card/product_card.js"></script>
    <?php else: ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="../product_card/product_card.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="shortcut icon" href="https://shop.to.coffee/favicon.ico" type="image/x-icon">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../reset.css">
            <script src="../jquery-3.7.1.js"></script>
            <title>Личный кабинет</title>
        </head>

        <body>
            <div id="wrapper">
                <div class="main-container-header">
                    <ul class="wrapper-list">
                        <a href="../main/index.php">
                            <div class="header-logo-container">
                                <img id="logo" src="../img/logo_small.png" alt="">
                            </div>
                        </a>
                        <div class="nav-scrolled">
                            <ul class="nav-bar-scrolled">
                                <li class="nav-bar-item nav-bar-item-coffee">
                                    <a href="../catalog/coffee/coffee.php">
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
                                    <a href="../catalog/tea/coffee.php">
                                        Чай
                                        <ul class="sub-menu">
                                            <a href="../catalog/tea/white.php">
                                                <li id="sub-menu-item">Белый</li>
                                            </a>
                                            <a href="../catalog/tea/green.php">
                                                <li id="sub-menu-item">Зеленый</li>
                                            </a>
                                            <a href="../catalog/tea/puer.php">
                                                <li id="sub-menu-item">Пуэр</li>
                                            </a>
                                            <a href="../catalog/tea/trava.php">
                                                <li id="sub-menu-item">Травяной</li>
                                            </a>
                                            <a href="../catalog/tea/ulun.php">
                                                <li id="sub-menu-item">Улун</li>
                                            </a>
                                            <a href="../catalog/tea/black.php">
                                                <li id="sub-menu-item">Черный</li>
                                            </a>
                                        </ul>
                                    </a>
                                </li>

                                <a href="../../buy.php">
                                    <li class="nav-bar-item">как купить</li>
                                </a>
                                <a href="../../about.php">
                                    <li class="nav-bar-item">о компании</li>
                                </a>

                            </ul>
                        </div>
                        <div class="nav-menu">

                            <?php if (!empty($_SESSION['auth'])): ?>
                                <ul class="profile-box">
                                    <svg class="" width="16" height="18" viewBox="0 0 16 18" fill-opacity="0.5" color="#999">
                                        <path data-name="Rounded Rectangle 803 copy" class="cls"
                                            d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                            transform="translate(-920 -943)"></path>
                                    </svg>
                                    <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5"
                                        height="3" viewBox="0 0 5 3">
                                        <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                                    </svg>
                                    <ul class="profile-box-sub-menu">
                                        <a href="../personal_account/personal_account.php">
                                            <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
                                        </a>
                                        <a href="../personal_account/order.php">
                                            <li id="profile-box-sub-menu-item">Текущие заказы</li>
                                        </a>
                                        <a href="../personal_account/private.php">
                                            <li id="profile-box-sub-menu-item">Личные данные</li>
                                        </a>
                                        <a href="">
                                            <li id="profile-box-sub-menu-item">История заказов</li>
                                        </a>
                                        <a href="">
                                            <li id="profile-box-sub-menu-item" onclick="exit()">
                                                <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="12" height="9"
                                                        viewBox="0 0 12 9">
                                                        <path class="cls"
                                                            d="M501.849,868.853l-2.011,1.993a0.485,0.485,0,0,1-.694,0,0.506,0.506,0,0,1,0-.707L500.293,869H494.5a0.5,0.5,0,0,1,0-1h5.826l-1.182-1.175a0.5,0.5,0,0,1,0-.7,0.487,0.487,0,0,1,.694,0l2.011,2a0.486,0.486,0,0,1,.138.365A0.492,0.492,0,0,1,501.849,868.853Zm-5.349-3.322a0.486,0.486,0,0,1-.269-0.089l-0.016.024a3.5,3.5,0,1,0,0,6.07l0,0a0.484,0.484,0,0,1,.287-0.1,0.5,0.5,0,0,1,.5.5,0.492,0.492,0,0,1-.242.418l0.008,0.012c-0.022.013-.049,0.018-0.071,0.031h0a4.434,4.434,0,0,1-2.194.6,4.5,4.5,0,1,1,0-9,4.4,4.4,0,0,1,2.057.542A0.5,0.5,0,0,1,496.5,865.531Z"
                                                            transform="translate(-490 -864)"></path>
                                                    </svg></i>
                                                Выйти
                                            </li>
                                        </a>
                                    </ul>
                                </ul>
                            <?php else: ?>
                                <div id="acc"></div>
                            <?php endif; ?>


                            <a href="../cart/cart.php">
                                <div id="cart"></div>
                            </a>
                            <div class="cart_counter" id="nav-menu-item">
                                <span class="cart-counter-value">0</span>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="main-container-head">
                <header class="header">
                    <h1 id="phone">8 800 302-26-54</h1>
                    <a href="../main/index.php">
                        <div class="logo-container">
                            <img id="logo" src="../img/logo_small.png" alt="">
                        </div>
                    </a>
                    <div class="nav-menu">
                        <?php if (!empty($_SESSION['auth'])): ?>
                            <ul class="profile-box">
                                <svg class="" width="16" height="18" viewBox="0 0 16 18" fill-opacity="0.5" color="#999">
                                    <path data-name="Rounded Rectangle 803 copy" class="cls"
                                        d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                        transform="translate(-920 -943)"></path>
                                </svg>
                                <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5" height="3"
                                    viewBox="0 0 5 3">
                                    <path class="cls" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                                </svg>
                                <ul class="profile-box-sub-menu">
                                    <a href="../personal_account/personal_account.php">
                                        <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
                                    </a>
                                    <a href="../personal_account/order.php">
                                        <li id="profile-box-sub-menu-item">Текущие заказы</li>
                                    </a>
                                    <a href="../personal_account/private.php">
                                        <li id="profile-box-sub-menu-item">Личные данные</li>
                                    </a>
                                    <a href="">
                                        <li id="profile-box-sub-menu-item">История заказов</li>
                                    </a>
                                    <a href="">
                                        <li id="profile-box-sub-menu-item" onclick="exit()">
                                            <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                                    xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                                    <path class="cls"
                                                        d="M501.849,868.853l-2.011,1.993a0.485,0.485,0,0,1-.694,0,0.506,0.506,0,0,1,0-.707L500.293,869H494.5a0.5,0.5,0,0,1,0-1h5.826l-1.182-1.175a0.5,0.5,0,0,1,0-.7,0.487,0.487,0,0,1,.694,0l2.011,2a0.486,0.486,0,0,1,.138.365A0.492,0.492,0,0,1,501.849,868.853Zm-5.349-3.322a0.486,0.486,0,0,1-.269-0.089l-0.016.024a3.5,3.5,0,1,0,0,6.07l0,0a0.484,0.484,0,0,1,.287-0.1,0.5,0.5,0,0,1,.5.5,0.492,0.492,0,0,1-.242.418l0.008,0.012c-0.022.013-.049,0.018-0.071,0.031h0a4.434,4.434,0,0,1-2.194.6,4.5,4.5,0,1,1,0-9,4.4,4.4,0,0,1,2.057.542A0.5,0.5,0,0,1,496.5,865.531Z"
                                                        transform="translate(-490 -864)"></path>
                                                </svg></i>
                                            Выйти
                                        </li>
                                    </a>
                                </ul>
                            </ul>
                        <?php else: ?>
                            <div id="acc"></div>
                        <?php endif; ?>


                        <a href="../cart/cart.php">
                            <div id="cart" id="nav-menu-item">
                                <div class="cart_counter" id="nav-menu-item">
                                    <span class="cart-counter-value">0</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </header>
                <nav>
                    <ul class="nav-bar">
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="../catalog/coffee/coffee.php">
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
                            <a href="../catalog/tea/coffee.php">
                                Чай
                                <ul class="sub-menu">
                                    <a href="../catalog/tea/white.php">
                                        <li id="sub-menu-item">Белый</li>
                                    </a>
                                    <a href="../catalog/tea/green.php">
                                        <li id="sub-menu-item">Зеленый</li>
                                    </a>
                                    <a href="../catalog/tea/puer.php">
                                        <li id="sub-menu-item">Пуэр</li>
                                    </a>
                                    <a href="../catalog/tea/trava.php">
                                        <li id="sub-menu-item">Травяной</li>
                                    </a>
                                    <a href="../catalog/tea/ulun.php">
                                        <li id="sub-menu-item">Улун</li>
                                    </a>
                                    <a href="../catalog/tea/black.php">
                                        <li id="sub-menu-item">Черный</li>
                                    </a>
                                </ul>
                            </a>
                        </li>

                        <a href="../../buy.php">
                            <li class="nav-bar-item">как купить</li>
                        </a>
                        <a href="../../about.php">
                            <li class="nav-bar-item">о компании</li>
                        </a>

                    </ul>
                </nav>
            </div>
            <hr>
            <?php
            $sql = mysqli_query($connect, "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, short_description, description , type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000, hit, new, stock, recommend
            FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel WHERE Code_tovar=" . $_GET['t'] . "");
            $products = array();
            while ($res = mysqli_fetch_array($sql)) {
                $products[] = $res;
            }
            ?>
            <? foreach ($products as $product): ?>
                <?
                $c500 = $product['cost500'];
                $c1000 = $product['cost1000'];
                $c250 = $product['cost250'];
                ?>
                <div class="main-container-wrapper">
                    <div class="main-container">
                        <ul class="navigation">
                            <li>Главная </li>
                            <li> — </li>
                            <li>Каталог</li>
                            <li> — </li>
                            <li>Кофе</li>
                            <li> — </li>
                            <li><?= $product['Name_tovar'] ?></li>
                        </ul>
                        <div class="goods-list-item">
                            <div class="spec">
                                <? if ($product['hit'] == '1'): ?>
                                    <div class="hit">Хит</div>
                                <? endif ?>
                                <? if ($product['recommend'] == '1'): ?>
                                    <div class="rec">Рекомендуем</div>
                                <? endif ?>
                                <? if ($product['new'] == '1'): ?>
                                    <div class="new">Новинка</div>
                                <? endif ?>
                                <? if ($product['stock'] == '1'): ?>
                                    <div class="stock">Акция</div>
                                <? endif ?>
                            </div>
                            <div class="product-card-image">
                                <img id="milk_blend_img" style=" width: 350px;" src="<?= $product['Name_img'] ?>" alt="">
                            </div>
                            <div class="product-card-text">
                                <div class="properties-name">
                                    <?= $product['Name_tovar'] ?>
                                </div>
                                <div class="short-description">
                                    <?= $product['short_description'] ?>
                                </div>
                                <div class="product-card-info">
                                    <ul class="product-card-properties">
                                        <div class="product-card-properties-flex">
                                            <li class="product-card-properties-item">Тип обжарки</li>
                                            <li style="color: #333333!important;" class="product-card-properties-item">
                                                <?= $product['Name_type_obz'] ?>
                                            </li>
                                        </div>
                                        <div class="product-card-properties-flex">
                                            <li class="product-card-properties-item">Кислотность</li>
                                            <li style="color: #333333!important;" class="product-card-properties-item">
                                                <img style="    width: 60%;" src="<?= $product['K'] ?>" alt="">
                                            </li>
                                        </div>
                                        <div class="product-card-properties-flex">
                                            <li class="product-card-properties-item">Горечь</li>
                                            <li style="color: #333333!important;     width: 60%;"
                                                class="product-card-properties-item">
                                                <img style="    width: 70%;" src="<?= $product['G'] ?>" alt="">

                                            </li>
                                        </div>
                                        <div class="product-card-properties-flex">
                                            <li class="product-card-properties-item">Полнотелость</li>
                                            <li style="color: #333333!important;     width: 60%;"
                                                class="product-card-properties-item">
                                                <img style="    width: 70%;" src="<?= $product['P'] ?>" alt="">
                                            </li>
                                        </div>
                                    </ul>
                                    <div class="properties">
                                        <div class="cost">
                                            <div class="cost_value">
                                                <?= $product['cost250'] ?>₽
                                            </div>
                                        </div>
                                        <ul class="weight">
                                            <li data-weight="250" data-id="<?= $c250; ?>" class="item border-checked">250 гр
                                            </li>
                                            <li data-weight="500" data-id="<?= $c500; ?>" class="item">500 гр</li>
                                            <li data-weight="1000" data-id="<?= $c1000; ?>" class="item">1000 гр</li>
                                        </ul>
                                        <select id="Combobox">
                                            <option id="Combobox_item" value="">Без помола (В зернах)</option>
                                            <option id="Combobox_item" value="">Для аэропресса</option>
                                            <option id="Combobox_item" value="">Для гейзерной кофеварки</option>
                                            <option id="Combobox_item" value="">Для капельной кофеварки</option>
                                        </select>
                                        <div class="container">
                                            <div class="counter_block">
                                                <span data-name="minus-btn" onclick="addHandlers()" class="minus">
                                                    <h3>-</h3>
                                                </span>
                                                <span class="text">
                                                    <h3 data-text="" class="text-value">0</h3>
                                                </span>
                                                <span data-name="plus-btn" onclick="addHandlers()" class="plus">
                                                    <h3>+</h3>
                                                </span>
                                            </div>
                                            <div class="button_block" data-code="4">
                                                <h3 id="button_block_text">В корзину</h3>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <aside>
                            <div class="main-container-aside-bar">
                                <ul class="aside_bar">
                                    <li class="aside-bar-item">
                                        <img id="Free_shipping_img" src="../img/Free_shipping.png" alt="">
                                        <h2 id="Free_shipping_text">Бесплатная доставка</h2>
                                        <p id="Free_shipping_text">Уменьшим стоимость доставки товара <br> на 15% от стоимости
                                            заказа
                                        </p>
                                    </li>
                                    <li class="aside-bar-item">
                                        <img id="payment_img" src="../img/payment.png" alt="">
                                        <h2 id="Free_shipping_text">Оплата при получении</h2>
                                        <p id="Free_shipping_text">Платите только тогда, когда <br> забрали посылку</p>
                                    </li>
                                    <li class="aside-bar-item">
                                        <img id="gift_img" src="../img/gift.png" alt="">
                                        <h2 id="Free_shipping_text">Чай в подарок</h2>
                                        <p id="Free_shipping_text">Фирменная чайная смесь в подарок <br> при заказе от 3 000 ₽
                                        </p>
                                    </li>
                                    <li class="aside-bar-item">
                                        <img id="discount_img" src="../img/discount.png" alt="">
                                        <h2 id="Free_shipping_text">Система скидок</h2>
                                        <p id="Free_shipping_text">Действует накопительная система <br> скидок от суммы заказа
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <div class="bottom-info">
                            <div class="bottom-info-text">
                                Описание
                            </div>
                            <pre class="bottom-info-description"><? echo $product['description']; ?></pre>
                        </div>
                    <? endforeach ?>
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
                                        <path data-name="Shape 51 copy 13" class="cls"
                                            d="M402.738,141a18.086,18.086,0,0,0,1.136,1.727,0.474,0.474,0,0,1-.144.735l-0.3.257a1,1,0,0,1-.805.279,4.641,4.641,0,0,1-1.491-.232,4.228,4.228,0,0,1-1.9-3.1,9.614,9.614,0,0,1,.025-4.3,4.335,4.335,0,0,1,1.934-3.118,4.707,4.707,0,0,1,1.493-.244,0.974,0.974,0,0,1,.8.272l0.3,0.255a0.481,0.481,0,0,1,.113.739c-0.454.677-.788,1.159-1.132,1.731a0.43,0.43,0,0,1-.557.181l-0.468-.061a0.553,0.553,0,0,0-.7.309,6.205,6.205,0,0,0-.395,2.079,6.128,6.128,0,0,0,.372,2.076,0.541,0.541,0,0,0,.7.3l0.468-.063a0.432,0.432,0,0,1,.555.175h0Z"
                                            transform="translate(-399 -133)"></path>
                                    </svg>
                                    <h3 id="phone-text">8 800 302-26-54</h3>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 11 11">
                                        <path data-name="Rectangle 583 copy 16" class="cls"
                                            d="M367,142h-7a2,2,0,0,1-2-2v-5a2,2,0,0,1,2-2h7a2,2,0,0,1,2,2v5A2,2,0,0,1,367,142Zm0-2v-3.039L364,139h-1l-3-2.036V140h7Zm-6.634-5,3.145,2.079L366.634,135h-6.268Z"
                                            transform="translate(-358 -133)"></path>
                                    </svg>
                                    <h3 id="phone-text">shop@to.coffee</h3>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 9 12">
                                        <path class="cls"
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
            </div>
            <script src="../product_card/product_card.js"></script>
        <?php endif; ?>
    </body>

    </html>