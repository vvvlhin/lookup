<?
include_once ('../connect.php');

$sql = mysqli_query($connect, "SELECT * FROM `group_tovar` WHERE Code_group_tovar = " . $_POST['id'] . "");
$res = mysqli_fetch_assoc($sql);
?>

<div class="auth-edit">
    <div class="main-edit">
        <div class="flex-main-edit">
            <h3 id="main-header-text">Редактирование группы товара</h3>
            <div id="mdiv" onclick="closed()">
                <div class="mdiv">
                    <div class="md"></div>
                </div>
            </div>
        </div>
        <form action="update-group.php?id=<?= $_POST['id'] ?>" method="post" id="form-edit"
            enctype="multipart/form-data">
            <div id="message"></div>
            <h1 for="first" id="input-text">Наименование группы<span id="red">*</span>
            </h1>
            <input type="text" id="input" value="<?= $res['name_group'] ?>" name="name_group" required>
            <div class="wrap">
                <input type="submit" class="sub" value="Изменить">
            </div>
        </form>
    </div>
</div>