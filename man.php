<?php 
	include "configs\db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>name</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<?php
		include "allstyles.php";
	?>
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
	
	
	<?php
		include "modal.php";
	?>

	<!-- модуль покупок -->
	<!--  <php
		include "products.php";
	?>  -->
	<script type="text/javascript" src="script.js"></script>

</body>
</html>