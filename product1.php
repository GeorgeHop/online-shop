<?php
/*
1. Страница, открывающаяся при нажатии на кнопку MAN
*/
?>

<?php
// подключаем доступ к базе данных
include "configs/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>MAN</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/menu.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link rel="stylesheet" type="text/css" href="style/head&poisk.css">
	<link rel="stylesheet" type="text/css" href="style/katalog.css">
	<link rel="stylesheet" type="text/css" href="style/login&registration.css">
	<link rel="stylesheet" type="text/css" href="style/type_product.css">

</head>
<body>

	<!-- модуль верхней и левой боковой частей <div class="head">-->
	<?php
		include "head.php";
	?>
	<!-- конец модуля верхней и левой боковой частей -->
	<!-- модуль отображения списка <div class="item">-->
	<?php
		include "spisok.php";
	?>
	<!-- конец модуль отображения списка <div class="item"> -->
	

</body>
</html>