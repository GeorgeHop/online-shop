<?php
// подключаем доступ к базе данных
include "configs/db.php";

/*========================================
Отправка выбранного в корзину
*/

/*
если есть куки - тогда 
удаляем в user_id - куки
в товар - номер товара

иначе

удаляем номер 77777
в товар - номер товара
*/
if ( (isset($_COOKIE["user_id"])) && (isset($_POST["catalog_id"])) && (($_COOKIE["user_id"]) != "") && (($_POST["catalog_id"]) != "") ) {


$sql = "DELETE FROM `mz`.`basket` WHERE `basket`.`user_id` =" . $_COOKIE["user_id"] . " AND `basket`.`catalog_id` =" . $_POST["catalog_id"];



} else {


$sql = "DELETE FROM `mz`.`basket` WHERE `basket`.`user_id` = 77777 AND `basket`.`catalog_id` =" . $_POST["catalog_id"];

}

if (mysqli_query($connect, $sql)) {
		
		header("Location: basket.php ") ;
		// echo "<h2>Удалено из корзины</h2>"				
	} 

	// else {
	// 	echo "<h2>Ошибка</h2>";
	// }
	
// include "basket.php";
?>