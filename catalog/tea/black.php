<?php
session_start();
include_once ("../../connect.php");
include_once ("../../functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="coffee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="https://shop.to.coffee/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../reset.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <script src="../../jquery-3.7.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <title>TO.Coffee - интернет-магазин вкусного кофе</title>
</head>

<body>
    <div class="auth">
        <div class="main">
            <div class="flex-main">
                <h3 id="main-header-text">Личный кабинет</h3>
                <div id="mdiv" onclick="closed()">
                    <div class="mdiv">
                        <div class="md"></div>
                    </div>
                </div>
            </div>
            <form method="post" id="form">
                <div id="message"></div>
                <h1 for="first">
                    Введите логин, номер телефона или почту <span id="red">*</span>
                </h1>
                <input type="text" id="first" name="login" required>
                <h1 for="password">
                    Пароль <span id="red">*</span>
                </h1>
                <input type="password" id="password" name="password" required>
                <div class="wrap">
                    <input type="submit" class="sub" value="Вход">
                </div>
            </form>
            <p class="href-text">Тут впервые?
                <a href="../../reg/reg.php" style="text-decoration: none; color:#0000ee;" class="href">
                    Создайте аккаунт
                </a>
            </p>
        </div>
    </div>
    <div id="wrapper">
        <div class="main-container-header">
            <ul class="wrapper-list">
                <a href="../main/index.php">
                    <div class="header-logo-container">
                        <img id="logo" src="../../img/logo_small.png" alt="">
                    </div>
                </a>
                <div class="nav-scrolled">
                    <ul class="nav-bar-scrolled">
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="../coffee/coffee.php">
                                Кофе
                                <ul class="sub-menu">
                                    <a href="../coffee/flavored.php">
                                        <li id="sub-menu-item">Ароматизированный кофе</li>
                                    </a>
                                    <a href="../coffee/mixture.php">
                                        <li id="sub-menu-item">Кофейные смеси</li>
                                    </a>
                                    <a href="../coffee/Monosort.php">
                                        <li id="sub-menu-item">Моносорта</li>
                                    </a>
                                    <a href="../coffee/spec.php">
                                        <li id="sub-menu-item">Спешалити</li>
                                    </a>
                                    <a href="../coffee/ferment.php">
                                        <li id="sub-menu-item">Ферментированный кофе</li>
                                    </a>
                                </ul>
                            </a>
                        </li>
                        <li class="nav-bar-item nav-bar-item-coffee">
                            <a href="coffee.php">
                                Чай
                                <ul class="sub-menu">
                                    <a href="white.php">
                                        <li id="sub-menu-item">Белый</li>
                                    </a>
                                    <a href="green.php">
                                        <li id="sub-menu-item">Зеленый</li>
                                    </a>
                                    <a href="puer.php">
                                        <li id="sub-menu-item">Пуэр</li>
                                    </a>
                                    <a href="trava.php">
                                        <li id="sub-menu-item">Травяной</li>
                                    </a>
                                    <a href="ulun.php">
                                        <li id="sub-menu-item">Улун</li>
                                    </a>
                                    <a href="black.php">
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
                                <path data-name="Rounded Rectangle 803 copy" class="cls-1"
                                    d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                    transform="translate(-920 -943)"></path>
                            </svg>
                            <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5" height="3"
                                viewBox="0 0 5 3">
                                <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                            </svg>
                            <ul class="profile-box-sub-menu">
                                <a href="../personal_account/personal_account.php">
                                    <li id="profile-box-sub-menu-item">Мой кабинет</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item">Текущие заказы</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item">Личный счет</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item">Личные данные</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item">История заказов</li>
                                </a>
                                <a href="">
                                    <li id="profile-box-sub-menu-item" onclick="exit()">
                                        <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                                xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                                <path class="cls-1"
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

                    <a href="../../cart/cart.php">
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
            <a href="../../main/index.php">
                <div class="logo-container">
                    <img id="logo" src="../../img/logo_small.png" alt="">
                </div>
            </a>
            <div class="nav-menu">
                <?php if (!empty($_SESSION['auth'])): ?>
                    <ul class="profile-box">
                        <svg class="" width="16" height="18" viewBox="0 0 16 18" fill-opacity="0.5" color="#999">
                            <path data-name="Rounded Rectangle 803 copy" class="cls-1"
                                d="M933.5,961H922.469v0a2.486,2.486,0,0,1-1.848-4.13c0.018-.026.026-0.052,0.046-0.077,1.374-1.7,4.476-2.79,6.833-2.79h1c2.357,0,5.459,1.089,6.833,2.79,0.02,0.025.028,0.051,0.046,0.077A2.475,2.475,0,0,1,936,958.5,2.5,2.5,0,0,1,933.5,961Zm0.5-2.533h0a1.509,1.509,0,0,0-.619-0.9A10.224,10.224,0,0,0,928.5,956h-1a10.224,10.224,0,0,0-4.872,1.566,1.5,1.5,0,0,0-.619.9h0c0,0.01,0,.024,0,0.033a0.5,0.5,0,0,0,.5.5h11a0.5,0.5,0,0,0,.5-0.5C934,958.491,934,958.477,934,958.467ZM928,953a5,5,0,1,1,5-5A5,5,0,0,1,928,953Zm0-8a3,3,0,1,0,3,3A3,3,0,0,0,928,945Z"
                                transform="translate(-920 -943)"></path>
                        </svg>
                        <svg style=" padding: 5px 5px 5px 10px;" xmlns="http://www.w3.org/2000/svg" width="5" height="3"
                            viewBox="0 0 5 3">
                            <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)"></path>
                        </svg>
                        <ul class="profile-box-sub-menu">
                            <a href="../../personal_account/personal_account.php">
                                <li id="profile-box-sub-menu-item">Мой кабинет</li>
                            </a>
                            <a href="">
                                <li id="profile-box-sub-menu-item">Текущие заказы</li>
                            </a>
                            <a href="">
                                <li id="profile-box-sub-menu-item">Личный счет</li>
                            </a>
                            <a href="">
                                <li id="profile-box-sub-menu-item">Личные данные</li>
                            </a>
                            <a href="">
                                <li id="profile-box-sub-menu-item">История заказов</li>
                            </a>
                            <a href="">
                                <li id="profile-box-sub-menu-item" onclick="exit()">
                                    <i class="icons" style="padding-right: 10px;"><svg id="Exit.svg"
                                            xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9">
                                            <path class="cls-1"
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

                <a href="../../cart/cart.php">
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
                    <a href="../coffee/coffee.php">
                        Кофе
                        <ul class="sub-menu">
                            <a href="../coffee/flavored.php">
                                <li id="sub-menu-item">Ароматизированный кофе</li>
                            </a>
                            <a href="../coffee/mixture.php">
                                <li id="sub-menu-item">Кофейные смеси</li>
                            </a>
                            <a href="../coffee/Monosort.php">
                                <li id="sub-menu-item">Моносорта</li>
                            </a>
                            <a href="../coffee/spec.php">
                                <li id="sub-menu-item">Спешалити</li>
                            </a>
                            <a href="../coffee/ferment.php">
                                <li id="sub-menu-item">Ферментированный кофе</li>
                            </a>
                        </ul>
                    </a>
                </li>
                <li class="nav-bar-item nav-bar-item-coffee">
                    <a href="coffee.php">
                        Чай
                        <ul class="sub-menu">
                            <a href="white.php">
                                <li id="sub-menu-item">Белый</li>
                            </a>
                            <a href="green.php">
                                <li id="sub-menu-item">Зеленый</li>
                            </a>
                            <a href="puer.php">
                                <li id="sub-menu-item">Пуэр</li>
                            </a>
                            <a href="trava.php">
                                <li id="sub-menu-item">Травяной</li>
                            </a>
                            <a href="ulun.php">
                                <li id="sub-menu-item">Улун</li>
                            </a>
                            <a href="black.php">
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
    <div class="main-container">
        <?
        $sql = mysqli_query($connect, "SELECT COUNT(*) as kol_vo FROM `Tovar`WHERE Groups_tovar = 2 AND category = 8;");
        $res = mysqli_fetch_assoc($sql);
        ?>
        <div class="top-block-wrapper">
            <div id="top-block-wrapper-preview-text">Черный<span
                    id="top-block-wrapper-preview-text-count"><?= $res['kol_vo'] ?></span>
            </div>
        </div>
        <ul class="navigation">
            <li>Главная</li>
            <li> — </li>
            <li>Каталог </li>
            <li> — </li>
            <li>Черный</li>
        </ul>
        <div class="wrapper-main-block">
            <div class="wrapper-inner">
                <div class="title-menu">
                    <div class="title-menu-tmp">
                        <i class="svg inline  svg-inline-catalog" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                <path data-name="Rounded Rectangle 969 copy 7" class="cls-1"
                                    d="M644,76a1,1,0,1,1-1,1A1,1,0,0,1,644,76Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,648,76Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,652,76Zm-8,4a1,1,0,1,1-1,1A1,1,0,0,1,644,80Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,648,80Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,652,80Zm-8,4a1,1,0,1,1-1,1A1,1,0,0,1,644,84Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,648,84Zm4,0a1,1,0,1,1-1,1A1,1,0,0,1,652,84Z"
                                    transform="translate(-643 -76)">
                                </path>
                            </svg>
                        </i> Каталог
                    </div>
                    <i class="svg  svg-inline-down colored_theme_hover_bg-el" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5">
                            <path data-name="Rounded Rectangle 890 copy 2" class="cls-1"
                                d="M517.778,610.8a0.721,0.721,0,0,1-1.016,0L514,607.769l-2.79,3.028a0.715,0.715,0,1,1-1.01-1.011l3.273-3.552c0.009-.009.012-0.021,0.021-0.03a0.723,0.723,0,0,1,1.017,0,0.022,0.022,0,0,1,0,0l3.265,3.577A0.712,0.712,0,0,1,517.778,610.8Z"
                                transform="translate(-510 -606)">
                            </path>
                        </svg>
                    </i>
                </div>
                <ul style="display: block;" class="menu-dropdown">
                    <li id="menu-dropdown-item">
                        <div class="menu-dropdown-wrapper">
                            Кофе
                            <i class="sub-svg" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5">
                                    <path data-name="Rounded Rectangle 890 copy 2" class="cls-1"
                                        d="M517.778,610.8a0.721,0.721,0,0,1-1.016,0L514,607.769l-2.79,3.028a0.715,0.715,0,1,1-1.01-1.011l3.273-3.552c0.009-.009.012-0.021,0.021-0.03a0.723,0.723,0,0,1,1.017,0,0.022,0.022,0,0,1,0,0l3.265,3.577A0.712,0.712,0,0,1,517.778,610.8Z"
                                        transform="translate(-510 -606)">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <ul style="display: none;" class="submenu-dropdown">
                            <a href="../coffee/flavored.php">
                                <li class="submenu-dropdown-item">Ароматизированный кофе</li>
                            </a>
                            <a href="../coffee/mixture.php">
                                <li class="submenu-dropdown-item">Кофейные смеси</li>
                            </a>
                            <a href="../coffee/Monosort.php">
                                <li class="submenu-dropdown-item">Моносорта</li>
                            </a>
                            <a href="../coffee/spec.php">
                                <li class="submenu-dropdown-item">Спешалити</li>
                            </a>
                            <a href="../coffee/ferment.php">
                                <li class="submenu-dropdown-item">Ферментированный кофе</li>
                            </a>
                        </ul>
                    </li>
                    <li id="menu-dropdown-item">
                        <div class="menu-dropdown-wrapper" style="background-color: #fafafa;">
                            Чай
                            <i class="sub-svg" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5">
                                    <path data-name="Rounded Rectangle 890 copy 2" class="cls-1"
                                        d="M517.778,610.8a0.721,0.721,0,0,1-1.016,0L514,607.769l-2.79,3.028a0.715,0.715,0,1,1-1.01-1.011l3.273-3.552c0.009-.009.012-0.021,0.021-0.03a0.723,0.723,0,0,1,1.017,0,0.022,0.022,0,0,1,0,0l3.265,3.577A0.712,0.712,0,0,1,517.778,610.8Z"
                                        transform="translate(-510 -606)">
                                    </path>
                                </svg>
                            </i>
                        </div>
                        <ul style="display: block; background-color: #fafafa;" class="submenu-dropdown">
                            <a href="white.php">
                                <li class="submenu-dropdown-item">Белый</li>
                            </a>
                            <a href="green.php">
                                <li class="submenu-dropdown-item">Зеленый</li>
                            </a>
                            <a href="puer.php">
                                <li class="submenu-dropdown-item">Пуэр</li>
                            </a>
                            <a href="aroma.php">
                                <li class="submenu-dropdown-item">Ароматизированный</li>
                            </a>
                            <a href="trava.php">
                                <li class="submenu-dropdown-item">Травяной, фруктово-ягодный</li>
                            </a>
                            <a href="ulun.php">
                                <li class="submenu-dropdown-item">Улун</li>
                            </a>
                            <a href="black.php">
                                <li class="submenu-dropdown-item">Чёрный</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="goods-wrapper">
                <div class="sort">
                    <i class="svg-sort" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="10" viewBox="0 0 12 10">
                            <path data-name="Rectangle 636 copy 5" class="cls-1"
                                d="M574.593,665.783L570,670.4V674l-2-1v-2.6l-4.6-4.614a0.94,0.94,0,0,1-.2-1.354,0.939,0.939,0,0,1,.105-0.16,0.969,0.969,0,0,1,.82-0.269h9.747a0.968,0.968,0,0,1,.82.269,0.94,0.94,0,0,1,.087.132A0.945,0.945,0,0,1,574.593,665.783Zm-8.164.216L569,668.581,571.571,666h-5.142Z"
                                transform="translate(-563 -664)">
                            </path>
                        </svg>
                    </i>
                    <ul class="sort-list">
                        <li class="sort-list-item" id="price">
                            Цена
                            <i class="svg  svg-inline-down colored_theme_hover_bg-el" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3">
                                    <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)">
                                    </path>
                                </svg>
                            </i>
                        </li>
                        <div style="display: none;" class="price-block">
                            <span class="price-block-preview-text">
                                Цена
                            </span>
                            <?
                            $sql = mysqli_query($connect, "SELECT MIN(cost250) as min, MAX(cost250) as max FROM `Tovar` WHERE Groups_tovar = 2 AND category = 8");
                            $res = mysqli_fetch_assoc($sql);
                            ?>
                            <div id="slider-range">
                                <input type="number" id="min" class="input-min" value="<?= $res['min'] ?>">
                                <input type="number" id="max" class="input-max" value="<?= $res['max'] ?>">
                            </div>
                            <div id="slider"></div>
                        </div>
                        <li class="sort-list-item" id="stock">
                            Акция
                            <i class="svg  svg-inline-down colored_theme_hover_bg-el" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="3" viewBox="0 0 5 3">
                                    <path class="cls-1" d="M250,80h5l-2.5,3Z" transform="translate(-250 -80)">
                                    </path>
                                </svg>
                            </i>
                        </li>
                        <ul style="display: none;" class="stock-block">
                            <li class="stock-item">
                                <input onclick="kisl()" id="input-stock" style="width: auto;" type="checkbox">
                                Акция
                            </li>
                            <li class="stock-item">
                                <input onclick="kisl()" id="input-hit" style="width: auto;" type="checkbox">
                                Хит
                            </li>
                            <li class="stock-item">
                                <input onclick="kisl()" id="input-rec" style="width: auto;" type="checkbox">
                                Рекомендуем
                            </li>
                            <li class="stock-item">
                                <input onclick="kisl()" id="input-new" style="width: auto;" type="checkbox">
                                Новинка
                            </li>
                        </ul>
                    </ul>
                </div>
                <div class="load-wrapper">
                    <img id="load" src="../../img/load.gif" alt="">
                </div>
                <div class="wrapper-goods-list">
                    <ul class="goods_list">
                        <?
                        $sql = "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000, hit, new, stock, recommend FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel WHERE Groups_tovar = 2 AND category = 8;";
                        $result = mysqli_query($connect, $sql);
                        $products = array();
                        while ($res = mysqli_fetch_array($result)) {
                            $products[] = $res;
                        }
                        ?>
                        <? foreach ($products as $product): ?>
                            <?
                            $c500 = $product['cost500'];
                            $c1000 = $product['cost1000'];
                            $c250 = $product['cost250'];
                            ?>
                            <li class="goods-list-item" data-code="<?= $product['Code_tovar'] ?>">
                                <a href="../../product_card/product_card.php?t=<?= $product['Code_tovar'] ?>">
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
                                    <img id="milk_blend_img" src=../<?= $product['Name_img'] ?> alt="">
                                </a>
                                <div class="properties">
                                    <a href="../../product_card/product_card.php?t=<?= $product['Code_tovar'] ?>">
                                        <h3 class="properties-name">
                                            <?= $product['Name_tovar'] ?>
                                        </h3>
                                    </a>
                                    <div class="cost">
                                        <div class="cost_value">
                                            <?= $product['cost250'] ?>₽
                                        </div>
                                    </div>
                                    <ul class="weight">
                                        <li data-weight="250" data-id="<?= $c250; ?>" class="item border-checked">250 гр
                                        </li>
                                        <li data-weight="500" data-id="<?= $c500; ?>" class="item">
                                            500 гр
                                        </li>
                                        <li data-weight="1000" data-id="<?= $c1000; ?>" class="item">
                                            1000
                                            гр</li>
                                    </ul>
                                    <div class="container">
                                        <div class="counter_block">
                                            <span class="minus">
                                                <h3>-</h3>
                                            </span>
                                            <span class="text">
                                                <h3 class="text-value">0</h3>
                                            </span>
                                            <span class="plus">
                                                <h3>+</h3>
                                            </span>
                                        </div>
                                        <div class="button_block" data-code="<?= $product['Code_tovar'] ?>">
                                            <h3 id="button_block_text">В корзину</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <? endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
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
    </div>
    <script type="text/javascript" src="coffee.js"></script>
</body>

</html>