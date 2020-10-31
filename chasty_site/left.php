<?php
// подключаем доступ к базе данных
include "configs/db.php";
?>

<!-- модуль боковой выдвигающейся части -->
<input type="checkbox" id="hmt" class="hidden-menu-ticker">

<label class="btn-menu" for="hmt">
	<span class="first"></span>
	<span class="second"></span>
	<span class="third"></span>
</label>

<ul class="hidden-menu">
	<div class="userInfo">

		<?php

		if ( isset($_COOKIE["user_id"]) != 0 ) {
			// Запрос
			$sql = "SELECT * FROM `user` WHERE `user_id` =" . $_COOKIE["user_id"];
			// mysqli_query = выполнить sql запрос
			// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
			$result = mysqli_query($connect, $sql);

			//mysqli_num_rows = получить количество результатов - количество строк
			$col_user = mysqli_num_rows($result);

			$user = mysqli_fetch_assoc($result);
			?>
					
			<img src='<?php echo $user["user_photo"]; ?>' class="userInfo">
			<h1><?php echo $user["user_name"]; ?></h1>
			<h2>E-mail:<a href=""><?php echo $user["user_email"]; ?></a></h2>
			<?php

		} else {
			?>
			<img src="images/user.svg" class="userInfo">
			<h1>Нажми на</h1>
			<h2 ><a href="login.php" class="btn">Login in</a></h2>
			<?php
		}
		?>
	</div> 
</ul>
<!-- конец модуль боковой выдвигающейся части -->