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
	
	<!-- модуль модального окна -->
	<?php
		include "modal.php";
	?>
	
	<!-- модуль покупок -->
	<?php
		include "products.php";
	?>

	<script type="text/javascript" src="script.js"></script>	
</body>
</html>