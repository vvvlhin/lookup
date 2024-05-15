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
          <a href="#0" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
            aria-expanded="false" aria-label="Toggle navigation">
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
          <a href="../admin/user.php" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
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
        <li class="nav-item">
          <a href="../admin/goods.php?page=0">
            <span class="icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M3.33334 3.35442C3.33334 2.4223 4.07954 1.66666 5.00001 1.66666H15C15.9205 1.66666 16.6667 2.4223 16.6667 3.35442V16.8565C16.6667 17.5519 15.8827 17.9489 15.3333 17.5317L13.8333 16.3924C13.537 16.1673 13.1297 16.1673 12.8333 16.3924L10.5 18.1646C10.2037 18.3896 9.79634 18.3896 9.50001 18.1646L7.16668 16.3924C6.87038 16.1673 6.46298 16.1673 6.16668 16.3924L4.66668 17.5317C4.11731 17.9489 3.33334 17.5519 3.33334 16.8565V3.35442ZM4.79168 5.04218C4.79168 5.39173 5.0715 5.6751 5.41668 5.6751H10C10.3452 5.6751 10.625 5.39173 10.625 5.04218C10.625 4.69264 10.3452 4.40927 10 4.40927H5.41668C5.0715 4.40927 4.79168 4.69264 4.79168 5.04218ZM5.41668 7.7848C5.0715 7.7848 4.79168 8.06817 4.79168 8.41774C4.79168 8.76724 5.0715 9.05066 5.41668 9.05066H10C10.3452 9.05066 10.625 8.76724 10.625 8.41774C10.625 8.06817 10.3452 7.7848 10 7.7848H5.41668ZM4.79168 11.7932C4.79168 12.1428 5.0715 12.4262 5.41668 12.4262H10C10.3452 12.4262 10.625 12.1428 10.625 11.7932C10.625 11.4437 10.3452 11.1603 10 11.1603H5.41668C5.0715 11.1603 4.79168 11.4437 4.79168 11.7932ZM13.3333 4.40927C12.9882 4.40927 12.7083 4.69264 12.7083 5.04218C12.7083 5.39173 12.9882 5.6751 13.3333 5.6751H14.5833C14.9285 5.6751 15.2083 5.39173 15.2083 5.04218C15.2083 4.69264 14.9285 4.40927 14.5833 4.40927H13.3333ZM12.7083 8.41774C12.7083 8.76724 12.9882 9.05066 13.3333 9.05066H14.5833C14.9285 9.05066 15.2083 8.76724 15.2083 8.41774C15.2083 8.06817 14.9285 7.7848 14.5833 7.7848H13.3333C12.9882 7.7848 12.7083 8.06817 12.7083 8.41774ZM13.3333 11.1603C12.9882 11.1603 12.7083 11.4437 12.7083 11.7932C12.7083 12.1428 12.9882 12.4262 13.3333 12.4262H14.5833C14.9285 12.4262 15.2083 12.1428 15.2083 11.7932C15.2083 11.4437 14.9285 11.1603 14.5833 11.1603H13.3333Z" />
              </svg>
            </span>
            <span class="text">Товары</span>
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
                  <input type="text" placeholder="Поиск..." />
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
      <h1 style="padding: 25px 50px;">Список заказов</h1>
      <div class="table-section">
        <table>
          <thead>
            <tr>
              <th style="text-align: center;">ID заказа</th>
              <th>Дата заказа</th>
              <th>Клиент</th>
              <th>Номер телефона</th>
              <th style="text-align: center;">Статус</th>
              <th>Адрес доставки</th>
              <th>Сумма</th>
            </tr>
          </thead>
          <tbody>
            <?php
            error_reporting(E_ALL);
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
            $sql = mysqli_query($connect, "SELECT * FROM Orders ORDER BY Code_orders DESC LIMIT " . $number . ", " . $limit . "");
            $products = array();
            while ($result = mysqli_fetch_array($sql)) {
              $products[] = $result;
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
</body>

</html>