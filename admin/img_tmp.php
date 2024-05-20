<?php
include_once ("../connect.php");
error_reporting(E_ALL);
// переменная для хранения результата
$result = 'Файл не был успешно загружен на сервер';
// путь для загрузки файлов
$upload_path = '../img/';
// если файл был успешно загружен, то
if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
    // получаем расширение исходного файла
    $extension_file = mb_strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
    // получаем уникальное имя под которым будет сохранён файл 
    $full_unique_name = $upload_path . $_FILES['file']['name'];
    // перемещает файл из временного хранилища в указанную директорию
    if (move_uploaded_file($_FILES['file']['tmp_name'], $full_unique_name)) {
        $result = 'Файл загружен и доступен по адресу: <b>/' . substr($full_unique_name, strlen($_SERVER['DOCUMENT_ROOT']) + 1) . '</b>';
        // записываем в переменную $result ответ
    } else {
        // записываем в переменную $result сообщение о том, что произошла ошибка
        $result = "Произошла обшибка при загрузке файла на сервер";
    }
}
// возвращаем результат (ответ сервера)
// echo $result;
$way = $upload_path . $_FILES['file']['name'];
echo $way;

$sql = mysqli_query($connect, "INSERT INTO `card_img` (`Code_img`, `Name_img`, `synonym`) VALUES (NULL, '" . $way . "', '" . $_POST['gg'] . "');");

