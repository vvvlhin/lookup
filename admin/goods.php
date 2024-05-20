<?
include_once ("../connect.php");
session_start();
$id = $_SESSION['id'];

$res = mysqli_query($connect, "SELECT * FROM clients WHERE Code_clients = '$id'");
$user = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../admin/assets/images/favicon.svg" type="image/x-icon" />
  <title>Админ панель</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="../admin/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../admin/assets/css/lineicons.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../admin/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../admin/assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../admin/assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="../admin/assets/css/main.css" />
  <link rel="stylesheet" href="../admin/assets/css/main.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <div class="auth">
    <div class="main">
      <div class="flex-main">
        <h3 id="main-header-text">Добавление товара</h3>
        <div id="mdiv" onclick="closed()">
          <div class="mdiv">
            <div class="md"></div>
          </div>
        </div>
      </div>
      <form method="post" id="form" enctype="multipart/form-data">
        <div id="message"></div>
        <h1 for="first" id="input-text">Наименование товара <span id="red">*</span>
        </h1>
        <input type="text" id="input" name="Name_tovar" required>
        <h1 for="password" id="input-text">
          Изображение <span id="red">*</span>
        </h1>
        <?
        $sql = mysqli_query($connect, "SELECT * FROM card_img");
        $products = array();
        while ($result = mysqli_fetch_array($sql)) {
          $products[] = $result;
        }
        ?>
        <select name="img" id="input" class="input-select-img">
          <? foreach ($products as $product): ?>
            <option value="<?= $product['Code_img'] ?>"><?= $product['synonym'] ?></option>
          <? endforeach ?>
        </select>
        <?
        $sql = mysqli_query($connect, "SELECT * FROM group_tovar");
        $groups = array();
        while ($result = mysqli_fetch_array($sql)) {
          $groups[] = $result;
        }
        ?>
        <h1 for="first" id="input-text">Группа товара <span id="red">*</span></h1>
        <select name="group" id="input">
          <? foreach ($groups as $group): ?>
            <option value="<?= $group['Code_group_tovar'] ?>"><?= $group['name_group'] ?></option>
          <? endforeach ?>
        </select>
        <?
        $sql = mysqli_query($connect, "SELECT * FROM type_obzharki");
        $rates = array();
        while ($result = mysqli_fetch_array($sql)) {
          $rates[] = $result;
        }
        ?>
        <h1 for="first" id="input-text">Тип обжарки <span id="red">*</span></h1>
        <select name="rate" id="input">
          <option value=""></option>
          <? foreach ($rates as $rate): ?>
            <option value="<?= $rate['Code_type'] ?>"><?= $rate['Name_type_obz'] ?></option>
          <? endforeach ?>
        </select>
        <h1 for="first" id="input-text">Кислотность, горечь и полнотелость (от 1 до 5) <span id="red">*</span></h1>
        <div class="togeth">
          <input name="K" class="input-range" type="text" data-min="1" data-max="5" placeholder="Кислотность..."
            required>
          <input name="G" class="input-range" type="text" data-min="1" data-max="5" placeholder="Горечь..." required>
          <input name="P" class="input-range" type="text" data-min="1" data-max="5" placeholder="Полнотелость..."
            required>
        </div>
        <h1 for="first" id="input-text">Цены <span id="red">*</span></h1>
        <div class="togeth">
          <input name="cost250" class="input-range" type="number" placeholder="За 250г..." required>
          <input name="cost500" class="input-range" type="number" placeholder="За 500г..." required>
          <input name="cost1000" class="input-range" type="number" placeholder="За 1000г..." required>
        </div>
        <h1 for="first" id="input-text">Краткое описание <span id="red">*</span></h1>
        <input id="input" type="text" name="short_description" required>
        <h1 for="first" id="input-text">Полное описание <span id="red">*</span></h1>
        <textarea name="description" id="input"></textarea>
        <div class="togeth" style="display: flex; justify-content: center; gap: 40px">
          <div class="togeth-class">
            <input type="checkbox" name="hit">
            <label for="hit">Хит</label>
          </div>
          <div class="togeth-class">
            <input type="checkbox" name="rec">
            <label for="rec">Рекомендуем</label>
          </div>
          <div class="togeth-class">
            <input type="checkbox" name="new" checked>
            <label for="new">Новинка</label>
          </div>
          <div class="togeth-class">
            <input type="checkbox" name="stock">
            <label for="stock">Акция</label>
          </div>
        </div>
        <div class="wrap">
          <input type="submit" class="sub" value="Добавить">
        </div>
      </form>
    </div>
  </div>
  <div class="blur">

    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="../main/index.php">
          <img src="../img/logo_small.png" alt="logo" />
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item nav-item-has-children">
            <a class="collapsed" href="index.php?page=0" data-bs-toggle="collapse" data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                  <path
                    d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                </svg>
              </span>
              <span class="text">Заказы</span>
            </a>
            <!-- <ul id="ddmenu_1" class="collapse show dropdown-nav">
            <li>
              <a href="index.html" class="active"> eCommerce </a>
            </li>
          </ul> -->
          </li>
          <li class="nav-item nav-item-has-children">
            <a class="collapsed" href="../admin/user.php" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M11.8097 1.66667C11.8315 1.66667 11.8533 1.6671 11.875 1.66796V4.16667C11.875 5.43232 12.901 6.45834 14.1667 6.45834H16.6654C16.6663 6.48007 16.6667 6.50186 16.6667 6.5237V16.6667C16.6667 17.5872 15.9205 18.3333 15 18.3333H5.00001C4.07954 18.3333 3.33334 17.5872 3.33334 16.6667V3.33334C3.33334 2.41286 4.07954 1.66667 5.00001 1.66667H11.8097ZM6.66668 7.70834C6.3215 7.70834 6.04168 7.98816 6.04168 8.33334C6.04168 8.67851 6.3215 8.95834 6.66668 8.95834H10C10.3452 8.95834 10.625 8.67851 10.625 8.33334C10.625 7.98816 10.3452 7.70834 10 7.70834H6.66668ZM6.04168 11.6667C6.04168 12.0118 6.3215 12.2917 6.66668 12.2917H13.3333C13.6785 12.2917 13.9583 12.0118 13.9583 11.6667C13.9583 11.3215 13.6785 11.0417 13.3333 11.0417H6.66668C6.3215 11.0417 6.04168 11.3215 6.04168 11.6667ZM6.66668 14.375C6.3215 14.375 6.04168 14.6548 6.04168 15C6.04168 15.3452 6.3215 15.625 6.66668 15.625H13.3333C13.6785 15.625 13.9583 15.3452 13.9583 15C13.9583 14.6548 13.6785 14.375 13.3333 14.375H6.66668Z" />
                  <path
                    d="M13.125 2.29167L16.0417 5.20834H14.1667C13.5913 5.20834 13.125 4.74197 13.125 4.16667V2.29167Z" />
                </svg>
              </span>
              <span class="text">Пользователи</span>
            </a>
          </li>
          <li class="nav-item nav-item-has-children">
            <a data-bs-toggle="collapse" data-bs-target="#ddmenu_2" aria-controls="ddmenu_2" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
                </svg>
              </span>
              <span class="text">Товары</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../admin/image.php?page=0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg id="svg" fill="#000000" stroke="#000000" width="20px" height="20px" version="1.1"
                  viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg">
                  <g id="IconSvg_bgCarrier" stroke-width="0"></g>
                  <g id="IconSvg_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"></g>
                  <g id="IconSvg_iconCarrier">
                    <g xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="m615.24 549.47c0.10156-0.64844 0.38672-1.2344 0.38672-1.9102v-295.12c0-7.1094-5.7656-12.875-12.875-12.875h-405.5c-7.1094 0-12.875 5.7656-12.875 12.875v295.11c0 0.14453 0.078125 0.26172 0.082031 0.40234 0.03125 0.95312 0.32031 1.8477 0.55859 2.7734 0.18359 0.71094 0.25391 1.4492 0.55078 2.1016 0.30469 0.67969 0.83203 1.2422 1.2617 1.8711 0.52734 0.76562 0.98828 1.5547 1.6641 2.1875 0.10547 0.097656 0.14453 0.23828 0.25391 0.33594 0.48828 0.42969 1.0898 0.58594 1.6172 0.92969 0.77344 0.50391 1.5 1.0352 2.3789 1.3633 0.87109 0.32812 1.7578 0.40625 2.668 0.53906 0.625 0.09375 1.1836 0.37109 1.8359 0.37109h405.5 0.007812 0.011719c0.035156 0 0.070312-0.027344 0.10547-0.027344 1.8789-0.019532 3.6328-0.48047 5.2383-1.2227 0.10156-0.046876 0.21484-0.023438 0.32031-0.074219 0.57812-0.28516 0.95312-0.77734 1.4688-1.1328 0.77734-0.53516 1.5703-1.0156 2.2148-1.707 0.5625-0.60156 0.91797-1.3086 1.3477-1.9961 0.44922-0.71484 0.94141-1.3711 1.2422-2.168 0.32812-0.84766 0.39844-1.7344 0.53906-2.6328zm-25.367-284.15v226.82l-66.645-135.67c-1.9102-3.9062-5.6836-6.5781-10.008-7.1094-4.3242-0.51172-8.6172 1.1758-11.418 4.5078l-83.543 99.695-78.957-67.961c-5.3633-4.6172-13.43-4.0391-18.074 1.2578l-111.1 126.52v-248.06zm-7.7891 269.36h-356.39l106.47-121.24 79.184 68.16c2.6172 2.2305 6.1211 3.3711 9.4375 3.0664 3.4375-0.26953 6.6211-1.9102 8.8359-4.5586l79.219-94.531z" />
                      <path
                        d="m415.88 378.89c27.129 0 49.191-22.062 49.191-49.191 0-27.117-22.062-49.18-49.191-49.18-27.117 0-49.18 22.062-49.18 49.18 0 27.129 22.062 49.191 49.18 49.191zm0-72.621c12.926 0 23.438 10.512 23.438 23.43 0 12.926-10.512 23.438-23.438 23.438-12.918 0-23.43-10.512-23.43-23.438 0-12.918 10.512-23.43 23.43-23.43z" />
                    </g>
                  </g>
                </svg>
              </span>
              <span class="text">Карточки товара</span>
            </a>
          </li>
          <li class="nav-item nav-item-has-children">
            <a href="../admin/groups.php?page=0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon">
                <svg id="svg" fill="#000000" stroke="#000000" width="20px" height="20px" version="1.1"
                  viewBox="144 144 512 512" xmlns="http://www.w3.org/2000/svg">
                  <g id="IconSvg_bgCarrier" stroke-width="0"></g>
                  <g id="IconSvg_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC"></g>
                  <g id="IconSvg_iconCarrier">
                    <path xmlns="http://www.w3.org/2000/svg"
                      d="m218.63 428.54h-9.2305c-27.863 0-50.48 22.617-50.48 50.477 0 27.863 22.617 50.48 50.48 50.48h381.2c27.859 0 50.477-22.617 50.477-50.48 0-27.859-22.617-50.477-50.477-50.477h-2.9727v-153.12c0-2.7188-2.2031-4.9219-4.9219-4.9219h-157.44c-2.7188 0-4.9219 2.2031-4.9219 4.9219v153.12h-34.441v-153.12c0-2.7188-2.2031-4.9219-4.918-4.9219h-157.44c-2.7148 0-4.918 2.2031-4.918 4.9219zm412.61 50.477c0 22.43-18.211 40.641-40.637 40.641h-381.2c-22.43 0-40.641-18.211-40.641-40.641 0-22.43 18.211-40.637 40.641-40.637h381.2c22.426 0 40.637 18.207 40.637 40.637zm-8.1172 0c0-18.422-14.961-33.383-33.383-33.383h-379.48c-18.426 0-33.383 14.961-33.383 33.383 0 18.426 14.957 33.383 33.383 33.383h379.48c18.422 0 33.383-14.957 33.383-33.383zm-9.8438 0c0 12.992-10.547 23.543-23.539 23.543h-379.48c-12.996 0-23.543-10.551-23.543-23.543 0-12.992 10.547-23.539 23.543-23.539h379.48c12.992 0 23.539 10.547 23.539 23.539zm-135.59-19.484c-10.758 0-19.488 8.7305-19.488 19.484 0 10.758 8.7305 19.488 19.488 19.488 10.754 0 19.484-8.7305 19.484-19.488 0-10.754-8.7305-19.484-19.484-19.484zm-233.07 0c-10.754 0-19.488 8.7305-19.488 19.484 0 10.758 8.7344 19.488 19.488 19.488 10.754 0 19.488-8.7305 19.488-19.488 0-10.754-8.7344-19.484-19.488-19.484zm77.691 0c-10.758 0-19.488 8.7305-19.488 19.484 0 10.758 8.7305 19.488 19.488 19.488 10.754 0 19.484-8.7305 19.484-19.488 0-10.754-8.7305-19.484-19.484-19.484zm77.691 0c-10.758 0-19.488 8.7305-19.488 19.484 0 10.758 8.7305 19.488 19.488 19.488 10.754 0 19.484-8.7305 19.484-19.488 0-10.754-8.7305-19.484-19.484-19.484zm155.38 0c-10.754 0-19.484 8.7305-19.484 19.484 0 10.758 8.7305 19.488 19.484 19.488 10.758 0 19.488-8.7305 19.488-19.488 0-10.754-8.7305-19.484-19.488-19.484zm-77.688 9.8398c5.3242 0 9.6445 4.3203 9.6445 9.6445s-4.3203 9.6484-9.6445 9.6484c-5.3281 0-9.6484-4.3242-9.6484-9.6484s4.3203-9.6445 9.6484-9.6445zm-233.07 0c5.3242 0 9.6484 4.3203 9.6484 9.6445s-4.3242 9.6484-9.6484 9.6484c-5.3242 0-9.6484-4.3242-9.6484-9.6484s4.3242-9.6445 9.6484-9.6445zm77.691 0c5.3242 0 9.6445 4.3203 9.6445 9.6445s-4.3203 9.6484-9.6445 9.6484c-5.3242 0-9.6484-4.3242-9.6484-9.6484s4.3242-9.6445 9.6484-9.6445zm77.691 0c5.3242 0 9.6445 4.3203 9.6445 9.6445s-4.3203 9.6484-9.6445 9.6484-9.6484-4.3242-9.6484-9.6484 4.3242-9.6445 9.6484-9.6445zm155.38 0c5.3242 0 9.6484 4.3203 9.6484 9.6445s-4.3242 9.6484-9.6484 9.6484c-5.3242 0-9.6445-4.3242-9.6445-9.6484s4.3203-9.6445 9.6445-9.6445zm-179.31-189.04v147.6h-147.6v-147.6zm201.72 0v147.6h-147.6v-147.6zm-289.17 119.66h74.523c2.7148 0 4.9219-2.2031 4.9219-4.9219 0-2.7148-2.207-4.918-4.9219-4.918h-74.523c-2.7148 0-4.918 2.2031-4.918 4.918 0 2.7188 2.2031 4.9219 4.918 4.9219zm201.72 0h74.523c2.7148 0 4.918-2.2031 4.918-4.9219 0-2.7148-2.2031-4.918-4.918-4.918h-74.523c-2.7148 0-4.9219 2.2031-4.9219 4.918 0 2.7188 2.207 4.9219 4.9219 4.9219zm-201.72-20.469h74.523c2.7148 0 4.9219-2.2031 4.9219-4.918 0-2.7148-2.207-4.9219-4.9219-4.9219h-74.523c-2.7148 0-4.918 2.207-4.918 4.9219 0 2.7148 2.2031 4.918 4.918 4.918zm201.72 0h74.523c2.7148 0 4.918-2.2031 4.918-4.918 0-2.7148-2.2031-4.9219-4.918-4.9219h-74.523c-2.7148 0-4.9219 2.207-4.9219 4.9219 0 2.7148 2.207 4.918 4.9219 4.918zm-183.88-20.465h56.68c2.7148 0 4.9219-2.207 4.9219-4.9219 0-2.7148-2.207-4.918-4.9219-4.918h-56.68c-2.7148 0-4.918 2.2031-4.918 4.918 0 2.7148 2.2031 4.9219 4.918 4.9219zm201.72 0h56.68c2.7148 0 4.918-2.207 4.918-4.9219 0-2.7148-2.2031-4.918-4.918-4.918h-56.68c-2.7148 0-4.9219 2.2031-4.9219 4.918 0 2.7148 2.207 4.9219 4.9219 4.9219zm-140.12-65.797c0-2.7188-2.2031-4.9219-4.9219-4.9219h-37.785c-2.7188 0-4.9219 2.2031-4.9219 4.9219v37.785c0 2.7148 2.2031 4.918 4.9219 4.918h37.785c2.7188 0 4.9219-2.2031 4.9219-4.918zm201.72 0c0-2.7188-2.2031-4.9219-4.918-4.9219h-37.789c-2.7148 0-4.918 2.2031-4.918 4.9219v37.785c0 2.7148 2.2031 4.918 4.918 4.918h37.789c2.7148 0 4.918-2.2031 4.918-4.918zm-211.56 4.918v27.945h-27.949v-27.945zm201.72 0v27.945h-27.945v-27.945z"
                      fill-rule="evenodd" />
                  </g>
                </svg>
              </span>
              <span class="text">Группы товара</span>
            </a>
          </li>
          <span class="divider">
            <hr />
          </span>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Меню
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <!-- <form action="#">
                    <input id="live_search_goods" type="text" placeholder="Поиск..." />
                    <div id="search_result_goods"></div>
                    <button><i class="lni lni-search-alt"></i></button>
                  </form> -->
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div class="image">
                          <img src="../img/admin.png" alt="" />
                        </div>
                        <div>
                          <h6 class="fw-500"><? echo $user['names'] ?></h6>
                          <p>
                            <?
                            if ($user['admin'] == 1) {
                              echo "Админ";
                            } else {
                              if ($user['admin'] == 2) {
                                echo "Модератор";
                              }
                            }
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="image">
                          <img src="../img/admin.png" alt="" />
                        </div>
                        <div class="content">
                          <h4 class="text-sm"><? echo $user['names'] ?></h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                            href="#"><? echo $user['email'] ?></a>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> Мой кабинет
                      </a>
                    </li>
                    <li class="divider"></li>
                    <li onclick="exit()">
                      <a>
                        <i class="lni lni-exit"></i>
                        Выход
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== section start ========== -->
      <section class="section">
        <h1 class="preview-text">Список заказов
          <div class="plus"></div>
        </h1>
        <div class="table-section">
          <table>
            <thead>
              <tr>
                <th style="text-align: center;">ID товара</th>
                <th>Наименование товара</th>
                <th>Изображение товара</th>
                <th>Группа товара</th>
                <th>Тип обжарки</th>
                <th>Кислотность</th>
                <th>Горечь</th>
                <th>Полнотелость</th>
                <th>Цена за 250г</th>
                <th>Цена за 500г</th>
                <th>Цена за 1000г</th>
              </tr>
            </thead>
            <tbody>
              <?php
              error_reporting(E_ALL);
              $res_count = mysqli_query($connect, "SELECT COUNT(*) FROM Tovar");
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
              $sql = mysqli_query($connect, "SELECT Code_tovar, Name_tovar, card_img.synonym , image, card_img.Name_img, group_tovar.name_group AS name, type_obzharki.Name_type_obz AS obz, Kisl, gorech, polnotel, cost250, cost500, cost1000 FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar ORDER BY Code_tovar DESC LIMIT " . $number . ", " . $limit . "");
              $products = array();
              while ($result = mysqli_fetch_array($sql)) {
                $products[] = $result;
              }
              ?>
              <? foreach ($products as $key => $product): ?>
                <tr class="row__group">
                  <td id="id" style="text-align: center;"><?= $product['Code_tovar'] ?></td>
                  <td><?= $product['Name_tovar'] ?></td>
                  <td>
                    <a target="_blank"
                      href="images.php?pic=<?php echo urlencode($product["Name_img"]); ?>"><?= $product["synonym"] ?></a>
                  </td>
                  <td><?= $product['name'] ?></td>
                  <td><?= $product['obz'] ?></td>
                  <td><?= $product['Kisl'] ?></td>
                  <td><?= $product['gorech'] ?></td>
                  <td><?= $product['polnotel'] ?></td>
                  <td><?= $product['cost250'] ?> ₽</td>
                  <td><?= $product['cost500'] ?> ₽</td>
                  <td><?= $product['cost1000'] ?> ₽</td>
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="edit"
                      class="bi bi-pen" style="fill: blue; transform: scale(1.4); cursor: pointer;" viewBox="0 0 16 16">
                      <path
                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                    </svg></td>
                  <td>
                    <div id="delete">
                      <div class="delete">
                        <div class="mdelete"></div>
                      </div>
                    </div>
                  </td>
                </tr>
              <? endforeach ?>
            </tbody>
          </table>
          <div class="page-list">
            <? for ($p = 0; $p < $str_page; $p++): ?>
              <a href="?page=<? echo $p ?>">
                <div class="page-button"><? echo $p + 1 ?></div>
              </a>
            <? endfor ?>
          </div>
        </div>
      </section>
      <!-- ========== section end ========== -->

    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="../admin/assets/js/main.js"></script>
    <!-- <script src="../jquery-3.7.1.js"></script> -->

    <script>
      // ======== jvectormap activation
      var markers = [
        { name: "Egypt", coords: [26.8206, 30.8025] },
        { name: "Russia", coords: [61.524, 105.3188] },
        { name: "Canada", coords: [56.1304, -106.3468] },
        { name: "Greenland", coords: [71.7069, -42.6043] },
        { name: "Brazil", coords: [-14.235, -51.9253] },
      ];

      var jvm = new jsVectorMap({
        map: "world_merc",
        selector: "#map",
        zoomButtons: true,

        regionStyle: {
          initial: {
            fill: "#d1d5db",
          },
        },

        labels: {
          markers: {
            render: (marker) => marker.name,
          },
        },

        markersSelectable: true,
        selectedMarkers: markers.map((marker, index) => {
          var name = marker.name;

          if (name === "Russia" || name === "Brazil") {
            return index;
          }
        }),
        markers: markers,
        markerStyle: {
          initial: { fill: "#4A6CF7" },
          selected: { fill: "#ff5050" },
        },
        markerLabelStyle: {
          initial: {
            fontWeight: 400,
            fontSize: 14,
          },
        },
      });
      // ====== calendar activation
      document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
          initialView: "dayGridMonth",
          headerToolbar: {
            end: "today prev,next",
          },
        });
        calendarMini.render();
      });

      // =========== chart one start
      const ctx1 = document.getElementById("Chart1").getContext("2d");
      const chart1 = new Chart(ctx1, {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "",
              backgroundColor: "transparent",
              borderColor: "#365CF5",
              data: [
                600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#365CF5",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#fff",
              pointHoverBorderWidth: 5,
              borderWidth: 5,
              pointRadius: 8,
              pointHoverRadius: 8,
              cubicInterpolationMode: "monotone", // Add this line for curved line
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              callbacks: {
                labelColor: function (context) {
                  return {
                    backgroundColor: "#ffffff",
                    color: "#171717"
                  };
                },
              },
              intersect: false,
              backgroundColor: "#f9f9f9",
              title: {
                fontFamily: "Plus Jakarta Sans",
                color: "#8F92A1",
                fontSize: 12,
              },
              body: {
                fontFamily: "Plus Jakarta Sans",
                color: "#171717",
                fontStyle: "bold",
                fontSize: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 10,
              },
              bodyAlign: "center",
              titleAlign: "center",
              titleColor: "#8F92A1",
              bodyColor: "#171717",
              bodyFont: {
                family: "Plus Jakarta Sans",
                size: "16",
                weight: "bold",
              },
            },
            legend: {
              display: false,
            },
          },
          responsive: true,
          maintainAspectRatio: false,
          title: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
                max: 1200,
                min: 500,
              },
            },
            x: {
              grid: {
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
      // =========== chart one end

      // =========== chart two start
      const ctx2 = document.getElementById("Chart2").getContext("2d");
      const chart2 = new Chart(ctx2, {
        type: "bar",
        data: {
          labels: [
            "Jan",
            "Fab",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "",
              backgroundColor: "#365CF5",
              borderRadius: 30,
              barThickness: 6,
              maxBarThickness: 8,
              data: [
                600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
              ],
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              callbacks: {
                titleColor: function (context) {
                  return "#8F92A1";
                },
                label: function (context) {
                  let label = context.dataset.label || "";

                  if (label) {
                    label += ": ";
                  }
                  label += context.parsed.y;
                  return label;
                },
              },
              backgroundColor: "#F3F6F8",
              titleAlign: "center",
              bodyAlign: "center",
              titleFont: {
                size: 12,
                weight: "bold",
                color: "#8F92A1",
              },
              bodyFont: {
                size: 16,
                weight: "bold",
                color: "#171717",
              },
              displayColors: false,
              padding: {
                x: 30,
                y: 10,
              },
            },
          },
          legend: {
            display: false,
          },
          legend: {
            display: false,
          },
          layout: {
            padding: {
              top: 15,
              right: 15,
              bottom: 15,
              left: 15,
            },
          },
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
                max: 1200,
                min: 0,
              },
            },
            x: {
              grid: {
                display: false,
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                drawTicks: false,
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
          plugins: {
            legend: {
              display: false,
            },
            title: {
              display: false,
            },
          },
        },
      });
      // =========== chart two end

      // =========== chart three start
      const ctx3 = document.getElementById("Chart3").getContext("2d");
      const chart3 = new Chart(ctx3, {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Revenue",
              backgroundColor: "transparent",
              borderColor: "#365CF5",
              data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#365CF5",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#365CF5",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
              fill: false,
              tension: 0.4,
            },
            {
              label: "Profit",
              backgroundColor: "transparent",
              borderColor: "#9b51e0",
              data: [
                120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
              ],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#9b51e0",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#9b51e0",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
              fill: false,
              tension: 0.4,
            },
            {
              label: "Order",
              backgroundColor: "transparent",
              borderColor: "#f2994a",
              data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
              pointBackgroundColor: "transparent",
              pointHoverBackgroundColor: "#f2994a",
              pointBorderColor: "transparent",
              pointHoverBorderColor: "#f2994a",
              pointHoverBorderWidth: 3,
              pointBorderWidth: 5,
              pointRadius: 5,
              pointHoverRadius: 8,
              fill: false,
              tension: 0.4,
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              intersect: false,
              backgroundColor: "#fbfbfb",
              titleColor: "#8F92A1",
              bodyColor: "#272727",
              titleFont: {
                size: 16,
                family: "Plus Jakarta Sans",
                weight: "400",
              },
              bodyFont: {
                family: "Plus Jakarta Sans",
                size: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 15,
              },
              borderColor: "rgba(143, 146, 161, .1)",
              borderWidth: 1,
              enabled: true,
            },
            title: {
              display: false,
            },
            legend: {
              display: false,
            },
          },
          layout: {
            padding: {
              top: 0,
            },
          },
          responsive: true,
          // maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
              },
              max: 350,
              min: 50,
            },
            x: {
              grid: {
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                drawTicks: false,
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
      // =========== chart three end

      // ================== chart four start
      const ctx4 = document.getElementById("Chart4").getContext("2d");
      const chart4 = new Chart(ctx4, {
        type: "bar",
        data: {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
          datasets: [
            {
              label: "",
              backgroundColor: "#365CF5",
              borderColor: "transparent",
              borderRadius: 20,
              borderWidth: 5,
              barThickness: 20,
              maxBarThickness: 20,
              data: [600, 700, 1000, 700, 650, 800],
            },
            {
              label: "",
              backgroundColor: "#d50100",
              borderColor: "transparent",
              borderRadius: 20,
              borderWidth: 5,
              barThickness: 20,
              maxBarThickness: 20,
              data: [690, 740, 720, 1120, 876, 900],
            },
          ],
        },
        options: {
          plugins: {
            tooltip: {
              backgroundColor: "#F3F6F8",
              titleColor: "#8F92A1",
              titleFontSize: 12,
              bodyColor: "#171717",
              bodyFont: {
                weight: "bold",
                size: 16,
              },
              multiKeyBackground: "transparent",
              displayColors: false,
              padding: {
                x: 30,
                y: 10,
              },
              bodyAlign: "center",
              titleAlign: "center",
              enabled: true,
            },
            legend: {
              display: false,
            },
          },
          layout: {
            padding: {
              top: 0,
            },
          },
          responsive: true,
          // maintainAspectRatio: false,
          title: {
            display: false,
          },
          scales: {
            y: {
              grid: {
                display: false,
                drawTicks: false,
                drawBorder: false,
              },
              ticks: {
                padding: 35,
                max: 1200,
                min: 0,
              },
            },
            x: {
              grid: {
                display: false,
                drawBorder: false,
                color: "rgba(143, 146, 161, .1)",
                zeroLineColor: "rgba(143, 146, 161, .1)",
              },
              ticks: {
                padding: 20,
              },
            },
          },
        },
      });
      // =========== chart four end
    </script>
  </div>
</body>

</html>