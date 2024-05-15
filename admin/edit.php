<?
include_once ('../connect.php');

$sql = mysqli_query($connect, "SELECT * FROM `Tovar` WHERE Code_tovar = " . $_POST['id'] . "");
$res = mysqli_fetch_assoc($sql);
?>

<div class="auth-edit">
    <div class="main-edit">
        <div class="flex-main-edit">
            <h3 id="main-header-text">Редактирование товара</h3>
            <div id="mdiv" onclick="closed()">
                <div class="mdiv">
                    <div class="md"></div>
                </div>
            </div>
        </div>
        <form action="update.php?id=<?= $_POST['id'] ?>" method="post" id="form-edit" enctype="multipart/form-data">
            <div id="message"></div>
            <h1 for="first" id="input-text">Наименование товара <span id="red">*</span>
            </h1>
            <input type="text" id="input" value="<?= $res['Name_tovar'] ?>" name="Name_tovar" required>
            <h1 for="password" id="input-text">
                Изображение <span id="red">*</span>
            </h1>
            <?
            $sql = mysqli_query($connect, "SELECT * FROM card_img");
            $a = mysqli_query($connect, "SELECT Code_img, synonym FROM card_img WHERE Code_img = " . $res['image'] . "");
            $arr = mysqli_fetch_assoc($a);
            $products = array();
            while ($result = mysqli_fetch_array($sql)) {
                $products[] = $result;
            }
            ?>
            <select name="img" id="input" class="input-select-img">
                <option value="<?= $res['image'] ?>"><?= $arr['synonym'] ?></option>
                <? foreach ($products as $product): ?>
                    <? if ($product['Code_img'] == $res['image']): ?>
                        <? $product++; ?>
                    <?php else: ?>
                        <option value="<?= $product['Code_img'] ?>">
                            <?= $product['synonym'] ?>
                        </option>
                    <? endif ?>
                <? endforeach ?>
            </select>
            <?
            $sql = mysqli_query($connect, "SELECT * FROM group_tovar");
            $a = mysqli_query($connect, "SELECT name_group FROM group_tovar WHERE Code_group_tovar  = " . $res['Groups_tovar'] . "");
            $groups = array();
            $arr = mysqli_fetch_assoc($a);
            while ($result = mysqli_fetch_array($sql)) {
                $groups[] = $result;
            }
            ?>
            <h1 for="first" id="input-text">Группа товара <span id="red">*</span></h1>
            <select name="group" id="input">
                <option value="<?= $res['Groups_tovar'] ?>"><?= $arr['name_group'] ?></option>
                <? foreach ($groups as $group): ?>
                    <? if ($group['Code_group_tovar'] == $res['Groups_tovar']): ?>
                        <? $group++; ?>
                    <?php else: ?>
                        <option value="<?= $group['Code_group_tovar'] ?>">
                            <?= $group['name_group'] ?>
                        </option>
                    <? endif ?>
                <? endforeach ?>
            </select>
            <?
            $sql = mysqli_query($connect, "SELECT * FROM type_obzharki");
            $a = mysqli_query($connect, "SELECT Name_type_obz FROM type_obzharki WHERE Code_type  = " . $res['Type_obz'] . "");
            $arr = mysqli_fetch_assoc($a);
            $rates = array();
            while ($result = mysqli_fetch_array($sql)) {
                $rates[] = $result;
            }
            ?>
            <h1 for="first" id="input-text">Тип обжарки <span id="red">*</span></h1>
            <select name="rate" id="input">
                <option value="<?= $res['Type_obz'] ?>"><?= $arr['Name_type_obz'] ?></option>
                <? foreach ($rates as $rate): ?>
                    <? if ($rate['Code_type'] == $res['Type_obz']): ?>
                        <? $rate++; ?>
                    <?php else: ?>
                        <option value="<?= $rate['Code_type'] ?>">
                            <?= $rate['Name_type_obz'] ?>
                        </option>
                    <? endif ?>
                <? endforeach ?>
            </select>
            <h1 for="first" id="input-text">Кислотность, горечь и полнотелость (от 1 до 5) <span id="red">*</span>
            </h1>
            <div class="togeth">
                <input value="<?= $res['Kisl'] ?>" name="K" class="input-range" type="text" data-min="1" data-max="5"
                    placeholder="Кислотность..." required>
                <input value="<?= $res['gorech'] ?>" name="G" class="input-range" type="text" data-min="1" data-max="5"
                    placeholder="Горечь..." required>
                <input value="<?= $res['polnotel'] ?>" name="P" class="input-range" type="text" data-min="1"
                    data-max="5" placeholder="Полнотелость..." required>
            </div>
            <h1 for="first" id="input-text">Цены <span id="red">*</span></h1>
            <div class="togeth">
                <input value="<?= $res['cost250'] ?>" name="cost250" class="input-range" type="number"
                    placeholder="За 250г..." required>
                <input value="<?= $res['cost500'] ?>" name="cost500" class="input-range" type="number"
                    placeholder="За 500г..." required>
                <input value="<?= $res['cost1000'] ?>" name="cost1000" class="input-range" type="number"
                    placeholder="За 1000г..." required>
            </div>
            <h1 for="first" id="input-text">Краткое описание <span id="red">*</span></h1>
            <input value="<?= $res['short_description'] ?>" id="input" type="text" name="short_description" required>
            <h1 for="first" id="input-text">Полное описание <span id="red">*</span></h1>
            <textarea name="description" id="input"><?= $res['description'] ?></textarea>
            <div class="togeth" style="display: flex; justify-content: center; gap: 40px">
                <? if ($res['hit'] == "0"): ?>
                    <div class="togeth-class">
                        <input type="checkbox" name="hit">
                        <label for="hit">Хит</label>
                    </div>
                <? else: ?>
                    <div class="togeth-class">
                        <input checked type="checkbox" name="hit">
                        <label for="hit">Хит</label>
                    </div>
                <? endif ?>
                <? if ($res['rec'] == "0"): ?>
                    <div class="togeth-class">
                        <input type="checkbox" name="rec">
                        <label for="rec">Рекомендуем</label>
                    </div>
                <? else: ?>
                    <div class="togeth-class">
                        <input checked type="checkbox" name="rec">
                        <label for="rec">Рекомендуем</label>
                    </div>
                <? endif ?>
                <? if ($res['new'] == "0"): ?>
                    <div class="togeth-class">
                        <input type="checkbox" name="new" checked>
                        <label for="new">Новинка</label>
                    </div>
                <? else: ?>
                    <div class="togeth-class">
                        <input checked type="checkbox" name="new" checked>
                        <label for="new">Новинка</label>
                    </div>
                <? endif ?>
                <? if ($res['stock'] == "0"): ?>
                    <div class="togeth-class">
                        <input type="checkbox" name="stock">
                        <label for="stock">Акция</label>
                    </div>
                <? else: ?>
                    <div class="togeth-class">
                        <input checked type="checkbox" name="stock">
                        <label for="stock">Акция</label>
                    </div>
                <? endif ?>
            </div>
            <div class="wrap">
                <input type="submit" class="sub" value="Изменить">
            </div>
        </form>
    </div>
</div>