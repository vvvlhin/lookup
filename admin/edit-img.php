<?
include_once ('../connect.php');

$sql = mysqli_query($connect, "SELECT * FROM `card_img` WHERE Code_img = " . $_POST['id'] . "");
$res = mysqli_fetch_assoc($sql);
?>

<div class="auth-edit">
    <div class="main-edit">
        <div class="flex-main-edit">
            <h3 id="main-header-text">Редактирование изображения товара</h3>
            <div id="mdiv" onclick="closed()">
                <div class="mdiv">
                    <div class="md"></div>
                </div>
            </div>
        </div>
        <form action="update-img.php?id=<?= $_POST['id'] ?>" method="post" id="form-edit" enctype="multipart/form-data">
            <div id="message"></div>
            <h1 for="first" id="input-text">Наименование изображения<span id="red">*</span>
            </h1>
            <input type="text" id="input" value="<?= $res['synonym'] ?>" name="synonym" required>
            <h1 for="password" id="input-text">
                Путь изображения <span id="red">*</span>
            </h1>
            <input type="text" id="input" value="<?= $res['Name_img'] ?>" name="Name_img" required>
            </select>
            <div class="wrap">
                <input type="submit" class="sub" value="Изменить">
            </div>
        </form>
    </div>
</div>