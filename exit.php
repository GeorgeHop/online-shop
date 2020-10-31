<?php
	//удаление куки
	setcookie("user_id", "", 0);
	//После удаление куки происходит переход на главную страницу
	header("Location: index.php");	

?>