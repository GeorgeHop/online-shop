<!-- модуль верхней и левой боковой частей -->
<div class="head">
	<h4 >GVG</h4>
	<!-- модуль перебора категорий <nav id="slow_nav" -->
	<?php
		include "chasty_site/menu.php";
	?>
	<!-- конец модуль перебора категорий <nav id="slow_nav" -->

	<!-- модуль поиска <div class="d6"> -->
	<?php
		include "chasty_site/poisk.php";
	?>
	<!-- конец модуль поиска <div class="d6"> -->

	<!-- модуль боковой выдвигающейся части -->
	<?php
		include "chasty_site/left.php";
	?>
	<!-- конец модуль боковой выдвигающейся части -->
	
	<!-- кнопка регистрации class="boot" -->
	<?php
		if (isset($_COOKIE["user_id"])) {
			$sql = "SELECT * FROM user WHERE user_id = ".$_COOKIE["user_id"];
			$result = mysqli_query($connect, $sql);
			$user = mysqli_fetch_assoc($result);
		 	?>
		 	
		 	<a href="exit.php" class="boot"><?php echo $user["user_name"]?> &#8658;</a>

		 	<?php
		 } else {
		 	?>
		 	<a href="login.php" class="boot">Login in</a>
		 	<?php
		 }
		 ?>
</div>
<!-- конец модуля верхней и левой боковой частей -->