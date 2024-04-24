<?php
include_once ("../connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../personal_account/personal_account.css">
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
                                <a href="">
                                    <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
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
                <a href="">
                    <div id="search" id="nav-menu-item"></div>
                </a>
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
                            <a href="">
                                <li style="font-weight: bold;" id="profile-box-sub-menu-item">Мой кабинет</li>
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
                    <span class="cart-counter-value">0</span>
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
    <div class="main-container-wrapper">
        <div class="main-container">
            <div class="top-block-wrapper">
                <div id="top-block-wrapper-preview-text">Личный кабинет</div>
            </div>
            <ul class="navigation">
                <li>Главная</li>
                <li> — </li>
                <li>Личный кабинет</li>
            </ul>
            <div class="prime">
                <ul class="prime-sidebar">
                    <li id="prime-sidebar-item" class="prime-sidebar-item-selected">Мой кабинет</li>
                    <li id="prime-sidebar-item">Текущие заказы</li>
                    <li id="prime-sidebar-item">Личный счет</li>
                    <li id="prime-sidebar-item">Личные данные</li>
                    <li id="prime-sidebar-item">История заказов</li>
                    <li id="prime-sidebar-item">Выйти</li>
                </ul>
                <ul class="prime-panel">
                    <li id="prime-panel-item">
                        <i class="svg inline  svg-inline-cur_orders colored" aria-hidden="true"><svg
                                data-name="Group 188 copy 3" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #307edd;
                                            fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <path data-name="Rounded Rectangle 1009 copy 6" class="cls-1"
                                    d="M754.981,406.093a0.962,0.962,0,0,1-.051.255,0.906,0.906,0,0,1-.072.134,0.961,0.961,0,0,1-.078.149c-0.013.015-.032,0.021-0.046,0.035a0.967,0.967,0,0,1-.2.158c-0.029.017-.053,0.042-0.083,0.056a0.95,0.95,0,0,1-1.193-.226L748,402.289l-5.213,4.329a0.054,0.054,0,0,0-.007.013,0.941,0.941,0,0,1-.466.285c-0.014,0-.028.006-0.042,0.011a1.074,1.074,0,0,1-.544,0c-0.014,0-.028-0.006-0.042-0.011a0.941,0.941,0,0,1-.466-0.285,0.054,0.054,0,0,0-.007-0.013L736,402.289l-5.213,4.329a0.054,0.054,0,0,0-.007.013,0.941,0.941,0,0,1-.466.285c-0.014,0-.028.006-0.042,0.011a1.074,1.074,0,0,1-.544,0c-0.014,0-.028-0.006-0.042-0.011a0.941,0.941,0,0,1-.466-0.285,0.054,0.054,0,0,0-.007-0.013L724,402.289l-5.213,4.329a0.054,0.054,0,0,0-.007.013,0.941,0.941,0,0,1-.466.285c-0.014,0-.028.006-0.042,0.011a1.074,1.074,0,0,1-.544,0c-0.014,0-.028-0.006-0.042-0.011a0.941,0.941,0,0,1-.466-0.285,0.054,0.054,0,0,0-.007-0.013L712,402.289l-5.257,4.365a0.95,0.95,0,0,1-1.193.226,0.9,0.9,0,0,1-.082-0.055,1.048,1.048,0,0,1-.2-0.159c-0.013-.014-0.032-0.02-0.045-0.035a0.951,0.951,0,0,1-.078-0.148,0.709,0.709,0,0,1-.123-0.39c0-.032-0.019-0.06-0.019-0.093V360a3,3,0,0,1,3-3h44a3,3,0,0,1,3,3v46C755,406.033,754.984,406.06,754.981,406.093ZM753,391V360a1,1,0,0,0-1-1H708a1,1,0,0,0-1,1v43.845l4.314-3.582a1.016,1.016,0,0,1,.151-0.084,0.951,0.951,0,0,1,.158-0.089,0.979,0.979,0,0,1,.173-0.045,0.784,0.784,0,0,1,.408,0,0.979,0.979,0,0,1,.173.045,0.951,0.951,0,0,1,.158.089,1.016,1.016,0,0,1,.151.084L718,404.675l5.314-4.412a1.016,1.016,0,0,1,.151-0.084,0.951,0.951,0,0,1,.158-0.089,0.979,0.979,0,0,1,.173-0.045,0.784,0.784,0,0,1,.408,0,0.979,0.979,0,0,1,.173.045,0.951,0.951,0,0,1,.158.089,1.016,1.016,0,0,1,.151.084L730,404.675l5.314-4.412a1.016,1.016,0,0,1,.151-0.084,0.951,0.951,0,0,1,.158-0.089,0.979,0.979,0,0,1,.173-0.045,0.784,0.784,0,0,1,.408,0,0.979,0.979,0,0,1,.173.045,0.951,0.951,0,0,1,.158.089,1.016,1.016,0,0,1,.151.084L742,404.675l5.314-4.412a1.016,1.016,0,0,1,.151-0.084,0.951,0.951,0,0,1,.158-0.089,0.979,0.979,0,0,1,.173-0.045,0.784,0.784,0,0,1,.408,0,0.979,0.979,0,0,1,.173.045,0.951,0.951,0,0,1,.158.089,1.016,1.016,0,0,1,.151.084L753,403.845V391Zm-11-3H727a1,1,0,0,1,0-2h15A1,1,0,0,1,742,388Zm0-7H727a1,1,0,0,1,0-2h15A1,1,0,0,1,742,381Zm0-7H727a1,1,0,0,1,0-2h15A1,1,0,0,1,742,374Zm-20,14h-4a1,1,0,0,1,0-2h4A1,1,0,0,1,722,388Zm0-7h-4a1,1,0,0,1,0-2h4A1,1,0,0,1,722,381Zm0-7h-4a1,1,0,0,1,0-2h4A1,1,0,0,1,722,374Z"
                                    transform="translate(-705 -357)"></path>
                                <path class="cls-2" d="M731,362h22v43l-5-4-6,5-6-5-6,5V363A1,1,0,0,1,731,362Z"
                                    transform="translate(-705 -357)"></path>
                            </svg>
                        </i>
                        <div class="prime-panel-item-text">
                            Текущие заказы
                        </div>
                    </li>
                    <li id="prime-panel-item">
                        <i class="svg inline  svg-inline-bill colored" aria-hidden="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #307edd;
                                        }

                                        .cls-1 {
                                            fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <path data-name="Rounded Rectangle 925 copy" class="cls-1"
                                    d="M1118,402h-40a5,5,0,0,1-5-5V367a5,5,0,0,1,5-5h40a5,5,0,0,1,5,5v30A5,5,0,0,1,1118,402Zm3-36a2,2,0,0,0-2-2h-42a2,2,0,0,0-2,2v4h46v-4Zm0,6h-46v7h46v-7Zm0,9h-46v17a2,2,0,0,0,2,2h42a2,2,0,0,0,2-2V381Zm-24,13h-5a1,1,0,0,1,0-2h5A1,1,0,0,1,1097,394Zm-10,0h-5a1,1,0,0,1,0-2h5A1,1,0,0,1,1087,394Z"
                                    transform="translate(-1073 -362)"></path>
                                <rect class="cls-2" x="4" y="12" width="44" height="5"></rect>
                            </svg>
                        </i>
                        <div class="prime-panel-item-text">
                            Личный счет
                        </div>
                    </li>
                    <li id="prime-panel-item">
                        <i class="svg inline  svg-inline-personal colored" aria-hidden="true"><svg
                                data-name="Group 189 copy 3" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #1d7ce6;
                                            fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <path data-name="Ellipse 282 copy" class="cls-1"
                                    d="M1466,407a25,25,0,1,1,25-25A25,25,0,0,1,1466,407Zm15.91-8.412a29.891,29.891,0,0,0-31.82,0A22.939,22.939,0,0,0,1481.91,398.587ZM1466,359a22.975,22.975,0,0,0-17.31,38.111,31.861,31.861,0,0,1,34.62,0A22.976,22.976,0,0,0,1466,359Zm0,30a11,11,0,1,1,11-11A11,11,0,0,1,1466,389Zm0-20a9,9,0,1,0,9,9A9,9,0,0,0,1466,369Z"
                                    transform="translate(-1441 -357)"></path>
                                <path data-name="Shape 8 copy" class="cls-2"
                                    d="M1467,387a8,8,0,1,1,8-8A8,8,0,0,1,1467,387Zm16,12.429c-1.57.959-5.57,3.347-8.45,4.675a27.626,27.626,0,0,1-7.1,1.829c-0.58.031-1.17,0.054-1.76,0.053a25.927,25.927,0,0,1-7.27-.9c-1.41-.712-3.11-1.683-4.55-2.534a7,7,0,0,1-.88-1.218,24.247,24.247,0,0,1,15.7-5.325A42.794,42.794,0,0,1,1483,399.429Z"
                                    transform="translate(-1441 -357)"></path>
                            </svg>
                        </i>
                        <div class="prime-panel-item-text">
                            Личные данные
                        </div>
                    </li>
                    <li id="prime-panel-item">
                        <i class="svg inline  svg-inline-filter_orders colored" aria-hidden="true"><svg
                                data-name="Group 190 copy 3" xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                viewBox="0 0 50 50">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            fill: #3d8ee9;
                                            fill-rule: evenodd;
                                        }

                                        .cls-2 {
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <path data-name="Rounded Rectangle 932 copy" class="cls-1"
                                    d="M754,567h-1a5,5,0,0,0-5,5v37a6,6,0,0,1-6,6H711a6,6,0,0,1-6-6v-5a2,2,0,0,1,2-2h5V571a6,6,0,0,1,6-6h36A1,1,0,0,1,754,567Zm-47,37v5a3.95,3.95,0,0,0,5,3.858V613h25.557A5.957,5.957,0,0,1,736,609v-5H707Zm11-37a4,4,0,0,0-4,4v31h22a2,2,0,0,1,2,2v5a4,4,0,0,0,4,4h0a4,4,0,0,0,4-4V572a6.969,6.969,0,0,1,2.111-5H718Zm21,29H729a1,1,0,0,1,0-2h10A1,1,0,0,1,739,596Zm0-6H729a1,1,0,0,1,0-2h10A1,1,0,0,1,739,590Zm0-6H729a1,1,0,0,1,0-2h10A1,1,0,0,1,739,584Zm0-6H729a1,1,0,1,1,0-2h10A1,1,0,1,1,739,578Zm-15,18h-3a1,1,0,0,1,0-2h3A1,1,0,0,1,724,596Zm0-6h-3a1,1,0,0,1,0-2h3A1,1,0,0,1,724,590Zm0-6h-3a1,1,0,0,1,0-2h3A1,1,0,0,1,724,584Zm0-6h-3a1,1,0,1,1,0-2h3A1,1,0,1,1,724,578Z"
                                    transform="translate(-705 -565)"></path>
                                <path class="cls-2"
                                    d="M715,614a6,6,0,0,1-6-6v-2h29v8H715Zm2.419-43A5,5,0,0,1,722,568h26v3H717.419Z"
                                    transform="translate(-705 -565)"></path>
                            </svg>
                        </i>
                        <div class="prime-panel-item-text">
                            История заказов
                        </div>
                    </li>
                </ul>
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
    <script src="reg.js"></script>
</body>

</html>