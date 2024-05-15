<?
include_once ('../../connect.php');
error_reporting(E_ALL);

$query = "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000, hit, new, stock, recommend
            FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel WHERE ";

$x = array();
$y = array();
$z = array();
$v = array();
if ($_POST['kinput1'] == 'true') {
    $x[] = 'Kisl = 1';
}
if ($_POST['kinput2'] == 'true') {
    $x[] = 'Kisl = 2';
}
if ($_POST['kinput3'] == 'true') {
    $x[] = 'Kisl = 3';
}
if ($_POST['kinput4'] == 'true') {
    $x[] = 'Kisl = 4';
}
if ($_POST['kinput5'] == 'true') {
    $x[] = 'Kisl = 5';
}
if (!empty($x)) {
    if (!empty($y)) {
        $query .= ' AND ';
        $query .= '(' . implode(' OR ', $x) . ')';
    } else {
        if (!empty($y)) {
            $query .= ' AND ';
            $query .= '(' . implode(' OR ', $x) . ')';
        } else {
            if (!empty($v)) {
                $query .= ' AND ';
                $query .= '(' . implode(' OR ', $x) . ')';
            } else {
                $query .= '(' . implode(' OR ', $x) . ')';
            }
        }
    }
}


if ($_POST['ginput1'] == 'true') {
    $y[] = 'gorech = 1';
}
if ($_POST['ginput2'] == 'true') {
    $y[] = 'gorech = 2';
}
if ($_POST['ginput3'] == 'true') {
    $y[] = 'gorech = 3';
}
if ($_POST['ginput4'] == 'true') {
    $y[] = 'gorech = 4';
}
if ($_POST['ginput5'] == 'true') {
    $y[] = 'gorech = 5';
}

if (!empty($y)) {
    if (!empty($x)) {
        $query .= ' AND ';
        $query .= '(' . implode(' OR ', $y) . ')';
    } else {
        if (!empty($z)) {
            $query .= ' AND ';
            $query .= '(' . implode(' OR ', $y) . ')';
        } else {
            if (!empty($v)) {
                $query .= ' AND ';
                $query .= '(' . implode(' OR ', $y) . ')';
            } else {
                $query .= '(' . implode(' OR ', $y) . ')';
            }
        }
    }
}

if ($_POST['pinput1'] == 'true') {
    $z[] = 'polnotel = 1';
}
if ($_POST['pinput2'] == 'true') {
    $z[] = 'polnotel = 2';
}
if ($_POST['pinput3'] == 'true') {
    $z[] = 'polnotel = 3';
}
if ($_POST['pinput4'] == 'true') {
    $z[] = 'polnotel = 4';
}
if ($_POST['pinput5'] == 'true') {
    $z[] = 'polnotel = 5';
}

if (!empty($z)) {
    if (!empty($x)) {
        $query .= ' AND ';
        $query .= '(' . implode(' OR ', $z) . ')';
    } else {
        if (!empty($y)) {
            $query .= ' AND ';
            $query .= '(' . implode(' OR ', $z) . ')';
        } else {
            if (!empty($v)) {
                $query .= ' AND ';
                $query .= '(' . implode(' OR ', $z) . ')';
            } else {
                $query .= '(' . implode(' OR ', $z) . ')';
            }
        }
    }
}

if ($_POST['rec'] == 'true') {
    $v[] = 'recommend = 1';
}
if ($_POST['new'] == 'true') {
    $v[] = 'new = 1';
}
if ($_POST['hit'] == 'true') {
    $v[] = 'hit = 1';
}
if ($_POST['stock'] == 'true') {
    $v[] = 'stock = 1';
}

if (!empty($v)) {
    if (!empty($x)) {
        $query .= ' AND ';
        $query .= '(' . implode(' AND ', $v) . ')';
    } else {
        if (!empty($y)) {
            $query .= ' AND ';
            $query .= '(' . implode(' AND ', $v) . ')';
        } else {
            if (!empty($z)) {
                $query .= ' AND ';
                $query .= '(' . implode(' AND ', $v) . ')';
            } else {
                $query .= '(' . implode(' AND ', $v) . ')';
            }
        }
    }
}

if (empty($x) && empty($y) && empty($z) && empty($v)) {
    $query = "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000, hit, new, stock, recommend
            FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel";
}

if (isset($_POST['min']) && isset($_POST['max'])) {
    $gg = " cost250 BETWEEN '" . $_POST['min'] . "' AND '" . $_POST['max'] . "';";
    if (empty($x) && empty($y) && empty($z) && empty($v)) {
        $query .= " WHERE" . $gg;
    } else {
        if (!empty($v) && !empty($x) && !empty($y) && !empty($z)) {
            $query .= "AND" . $gg;
        }
    }
}


// echo $query;

$result = mysqli_query($connect, $query);
$count = mysqli_num_rows($result);
// echo $count;
if ($count == 0) {
    echo "<div style='font-family: Montserrat, sans-serif;
    font-weight: 400;
    font-size: 24px;
    color: #333; display: flex; justify-content: center; text-align: center; margin-top: 20px;'>Товаров по выбранным категориям не найдено. Измените запрос и повторите попытку</div>";
}
?>

<ul class="goods_list">
    <?
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
                <div class="properties_item">
                    <div class="properties_title">Тип обжарки</div>
                    <div class="properties_value">
                        <?= $product['Name_type_obz'] ?>
                    </div>
                </div>
                <div class="properties_item">
                    <div class="properties_title">Кислотность</div>
                    <div class="properties_value">
                        <img id="properties-value-img" src=../<?= $product['K'] ?> alt="">
                    </div>
                </div>
                <div class="properties_item">
                    <div class="properties_title">Горечь</div>
                    <div class="properties_value">
                        <img id="properties-value-img" src=../<?= $product['G'] ?> alt="">
                    </div>
                </div>
                <div class="properties_item">
                    <div class="properties_title">Полнотелость</div>
                    <div class="properties_value">
                        <img id="properties-value-img" src=../<?= $product['P'] ?> alt="">
                    </div>
                </div>
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
                        <span data-name="minus-btn<?= $product['id'] ?>" class="minus">
                            <h3>-</h3>
                        </span>
                        <span class="text">
                            <h3 data-text="<?= $product['id'] ?>" class="text-value">0</h3>
                        </span>
                        <span data-name="plus-btn<?= $product['id'] ?>" class="plus">
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