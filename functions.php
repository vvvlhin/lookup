<?
include_once ("connect.php");
//Запрос на выборку все товаров
$sql = "SELECT Tovar.Code_tovar, Tovar.Name_tovar, card_img.Name_img, group_tovar.name_group, type_obzharki.Name_type_obz, k.img_rate AS K, g.img_rate AS G, p.img_rate AS P, cost250, cost500, cost1000, hit, new, stock, recommend
            FROM Tovar INNER JOIN card_img ON Tovar.image = card_img.Code_img INNER JOIN group_tovar ON Tovar.Groups_tovar = group_tovar.Code_group_tovar INNER JOIN type_obzharki ON Tovar.Type_obz = type_obzharki.Code_type INNER JOIN rate k ON k.Code_rate = Tovar.Kisl INNER JOIN rate g ON g.Code_rate = Tovar.gorech INNER JOIN rate p ON p.Code_rate = Tovar.polnotel;";
$result = mysqli_query($connect, $sql);
?>