<?php
// подключаем доступ к базе данных
include "configs/db.php";

/*========================================
Отправка выбранного в корзину
*/

/*
если есть куки - тогда 
добавляем в user_id - куки
в товар - номер товара

иначе

присваиваем номер любой
в товар - номер товара
*/
if ( (isset($_COOKIE["user_id"])) && (isset($_POST["catalog_id"])) && (($_COOKIE["user_id"]) != "") && (($_POST["catalog_id"]) != "") ) {

$sql = "INSERT INTO `mz`.`basket` (`user_id`, `catalog_id`) VALUES ('" . $_COOKIE["user_id"] . "', '" . $_POST["catalog_id"] . "')";

} else {

$sql = "INSERT INTO `mz`.`basket` (`user_id`, `catalog_id`) VALUES ('77777', '" . $_POST["catalog_id"] . "')";

}

if (mysqli_query($connect, $sql)) {

		header("Location: basket.php ");
		// echo "<h2>Добавлено в корзину</h2>";		
	} 

	// else {
	// 	echo "<h2>Ошибка</h2>";
	// }

// include "basket.php";

?>